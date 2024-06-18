<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DesignerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();
        $search_query = $request->input('search_query');
        if ($request->has('search_query') && !empty($search_query)) {
            $query->where(function ($query) use ($search_query) {
                $query->where('title', 'like', '%' . $search_query . '%');
            });
        }
        $data['categories'] = $query->orderBy('id', 'DESC')->paginate(50);
        $data['searchParams'] = $request->all();
        return view('admin/categories/manage_categories', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(array('msg' => 'error', 'response' => 'Invaid Title For Category.'));
        }

        $category = Category::where('title', $request->title)->first();
        if (!empty($category)) {
            return response()->json(array('msg' => 'error', 'response' => 'Category already exists.'));
        }

        $category = new Category();
        $category->title = $request->title;
        $category->slug = slugify($request->title);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('uploads/categories/'), $filename);
            $category->image = $filename;
        }
        $category->save();

        if ($category->id > 0) {
            $finalResult = response()->json(['msg' => 'success', 'response' => 'Category added successfully.']);
            return $finalResult;
        } else {
            $finalResult = response()->json(['msg' => 'error', 'response' => 'Something went wrong!']);
            return $finalResult;
        }
    }

    public function show(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        if (!empty($category)) {
            $htmlresult = view('admin/categories/categories_ajax', compact('category'))->render();
            $finalResult = response()->json(['msg' => 'success', 'response' => $htmlresult]);
            return $finalResult;
        } else {
            return response()->json(['msg' => 'error', 'response' => 'Category not found.']);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(array('msg' => 'error', 'response' => 'Invaid Title For Category.'));
        }

        $category = Category::where('title', $request->title)->first();

        if (!empty($category) && $category->id != $request->id) {
            return response()->json(array('msg' => 'error', 'response' => 'Category with this title already exists.'));
        }

        $category = Category::find($request->id);
        if (!empty($category)) {
            $category->title = $request->title;
            $category->slug = slugify($request->title);
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move(public_path('uploads/categories/'), $filename);
                $category->image = $filename;
            }
            $category->save();
            return response()->json(['msg' => 'success', 'response' => 'Category updated successfully.']);
        } else {
            return response()->json(['msg' => 'error', 'response' => 'Category not found.']);
        }
    }
    public function delete(Request $request)
    {
        $category = Category::find($request->id);
        if (!empty($category)) {

            // if any property with this type exists then don't delete and return an error
            $designers = DesignerCategory::where('category_id', $category->id)->count();
            if ($designers > 0) {
                return response()->json(['msg' => 'error', 'response' => 'Proprety type could not be deleted. This Category is being used by ' . $designers . ' designer(s)']);
            }
            // delete image first 
            if (!empty($category->image)) {
                $file_path = public_path() . '/uploads/categories/' . $category->image;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
            $category->delete();
            return response()->json(['msg' => 'success', 'response' => 'Category deleted successfully.']);
        } else {
            return response()->json(['msg' => 'error', 'response' => 'Category not found.']);
        }
    }
}
