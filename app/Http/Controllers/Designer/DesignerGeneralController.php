<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Designer;
use App\Models\DesignerCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DesignerGeneralController extends Controller
{
    protected $guard = 'designer';

    public function __construct()
    {
        $this->middleware('auth:designer')->except(['verify']);
    }

    public function index()
    {
        return view('designer.pages.dashboard');
    }
    public function resendVerifyMail()
    {
        $designer = Auth::guard('designer')->user();
        $verification_url = route('designer.verify', $designer->verification_token);
        $headers = "From: webmaster@example.com\r\n";
        $headers .= "Reply-To: webmaster@example.com\r\n";
        $headers .= "Content-Type: text/html\r\n";
        $subject = 'Please verify your email address';
        $emailTemplate = view('emails.designer_verify', compact(['designer', 'verification_url']))->render();
        $verification = mail($designer->email, $subject, $emailTemplate, $headers);
        if ($verification) {
            return response()->json(['success' => 'Verification email sent successfully. Please check your email.']);
        } else {
            return response()->json(['error' => 'Failed to send verification email. Please try again.']);
        }
    }

    public function verify($token)
    {
        $designer = Designer::where('verification_token', $token)->first();

        if ($designer) {
            $designer->email_verified_at = now();
            $designer->verification_token = null;
            $designer->save();
            if (Auth::guard('designer')->check()) {
                return redirect()->route('designer.dashboard')->with('success', 'Email verified successfully.');
            } else {
                return redirect()->route('designer.login')->with('success', 'Email verified successfully. Please login to continue.');
            }
        } else {
            return redirect()->route('designer.login')->with('error', 'Invalid verification token.');
        }
    }
    public function showProfile()
    {
        $designer = Auth::guard('designer')->user();
        $categories = Category::all();
        $designerCategories = DesignerCategory::where('designer_id', $designer->id)->get();
        foreach ($categories as $category) {
            $category->show = "1";
            foreach ($designerCategories as $designerCategory) {
                if ($category->id == $designerCategory->category_id) {
                    $category->show = "2";
                }
            }
        }
        return view('designer.pages.profile', compact('designer', 'categories'));
    }
    public function ProfileSettings()
    {
        $designer = Auth::guard('designer')->user();
        $categories = Category::all();
        $designerCategories = DesignerCategory::where('designer_id', $designer->id)->get();
        foreach ($categories as $category) {
            $category->show = "1";
            foreach ($designerCategories as $designerCategory) {
                if ($category->id == $designerCategory->category_id) {
                    $category->show = "2";
                }
            }
        }
        return view('designer.pages.profile-settings', compact('designer', 'categories'));
    }
    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:designers,username,' . Auth::guard('designer')->id(),
            'email' => 'required|string|email|max:255|unique:designers,email,' . Auth::guard('designer')->id(),
            'phone' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'image' => 'nullable|max:2048',
            'cover_image' => 'nullable|max:2048',
            'resume' => 'nullable|max:2048',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'dribbble' => 'nullable|url',
            'pinterest' => 'nullable|url',
        ]);
        if ($validator->fails()) {
            dd($validator->errors()->all());
            $errorList = '';
            foreach ($validator->errors()->all() as $message) {
                $errorList .= $message . '<br>';
            }
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields',
                'errors' => $errorList,
            ], 400);
        }

        $designer = Auth::guard('designer')->user();
        $designer->name = $request->name;
        $designer->username = $request->username;
        $designer->email = $request->email;
        $designer->phone = $request->phone ?? null;
        $designer->city = $request->city ?? null;
        $designer->country = $request->country ?? null;
        $designer->bio = $request->bio ?? null;
        $designer->definition = $request->definition ?? null;
        $designer->open = 0;
        $designer->about = $request->about ?? null;
        $designer->facebook = $request->facebook ?? null;
        $designer->instagram = $request->instagram ?? null;
        $designer->dribbble = $request->dribbble ?? null;
        $designer->pinterest = $request->pinterest ?? null;
        if ($request->hasFile('image')) {
            if ($designer->image != 'avatar.png') {
                $image_path = public_path('uploads/designers/images/' . $designer->image);
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
            $image = $request->file('image');
            $imageName = $designer->username . time() . '.' . $image->extension();
            $image->move(public_path('uploads/designers/images'), $imageName);
            $designer->image = $imageName;
        }
        if ($request->hasFile('cover_image')) {
            if ($designer->cover_image != '' || $designer->cover_image != null) {
                $cover_image_path = public_path('uploads/designers/images/' . $designer->cover_image);
                if (file_exists($cover_image_path)) {
                    unlink($cover_image_path);
                }
            }
            $cover_image = $request->file('cover_image');
            $cover_imageName = 'cover' . time() . '.' . $cover_image->extension();
            $cover_image->move(public_path('uploads/designers/images'), $cover_imageName);
            $designer->cover_image = $cover_imageName;
        }

        if ($request->hasFile('resume')) {
            if ($designer->resume != '' || $designer->resume != null) {
                $resume_path = public_path('uploads/designers/resumes/' . $designer->resume);
                if (file_exists($resume_path)) {
                    unlink($resume_path);
                }
            }
            $resume = $request->file('resume');
            $resumeName = $designer->username . time() . '.' . $resume->extension();
            $resume->move(public_path('uploads/designers/resumes'), $resumeName);
            $designer->resume = $resumeName;
        }
        if ($request->hasFile('introVideo')) {
            if ($designer->introVideo != '' || $designer->introVideo != null) {
                $introVideoPath = public_path('uploads/designers/intros/' . $designer->introVideo);
                if (file_exists($introVideoPath)) {
                    unlink($introVideoPath);
                }
            }
            $introVideo = $request->file('introVideo');
            $introVideoName = $designer->username . time() . '.' . $introVideo->extension();
            $introVideo->move(public_path('uploads/designers/intros'), $introVideoName);
            $designer->introVideo = $introVideoName;
        }
        $categories = Category::all();
        foreach ($categories as $category) {
            $category_id = $category->id;
            $designerCategory = DesignerCategory::where('designer_id', $designer->id)->where('category_id', $category_id)->first();
            if ($designerCategory) {
                $designerCategory->delete();
            }
            $designer_cats = [];
            if ($request->has($category->slug)) {
                array_push($designer_cats, $category_id);
            }
            if (count($designer_cats) > 0) {
                foreach ($designer_cats as $designer_cat) {
                    $designerCategory = new DesignerCategory();
                    $designerCategory->designer_id = $designer->id;
                    $designerCategory->category_id = $designer_cat;
                    $designerCategory->save();
                }
            }
        }
        $query = $designer->save();
        if ($query) {
            return response()->json([
                'success' => true,
                'message' => 'Profile updated successfully',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update profile. Please try again.',
            ]);
        }
    }

    public function showsecurity()
    {
        return view('designer.pages.security');
    }

    public function changePswd(Request $request)
    {
        // validate
        $validator = Validator::make($request->all(), [
            'old_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            $errorList = '';
            foreach ($validator->errors()->all() as $message) {
                $errorList .= $message . '<br>';
            }
            return response()->json([
                'success' => false,
                'message' => 'Please fill all required fields',
                'errors' => $errorList,
            ], 400);
        }

        $designer = Auth::guard('designer')->user();

        if (password_verify($request->old_password, $designer->password)) {
            $designer->password = bcrypt($request->password);
            $query = $designer->save();
            if ($query) {
                return response()->json([
                    'success' => true,
                    'message' => 'Password changed successfully',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to change password. Please try again.',
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Old password is incorrect',
            ]);
        }
    }

    public function ckeditor_upload(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('uploads/projects'), $fileName);
            $url = asset('uploads/projects/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
