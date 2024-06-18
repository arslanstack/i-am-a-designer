@extends('clientviews.layouts.app')
@push('styles')
<style>
    .withoutdecanchor {
        text-decoration: none;
        color: black;
    }

    .withoutdecanchor:hover {
        text-decoration: none;
        color: black;
    }

    .filter-col .filter {
        background-color: #f8f8f8;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .filter-col .filter.active {
        background-color: #cae7fc;
    }
</style>
@endpush
@section('content')

<div class="container-fluid">
    <div class="section-heading text-center py-5">
        <h1>Search Your Dream Designer</h1>
    </div>
    <div class="col-lg-7 mx-auto">
        <div class="row">

            <div class="col-lg-2 col-2">
                <div class="search">

                    <button id="designer-search-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                        <div class="d-flex">
                            <div>
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 6.75h21"></path>
                                    <path d="M5.25 12h13.5"></path>
                                    <path d="M9.75 17.25h4.5"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="mx-1 mt-1" style="font-size: 12px;">
                                    Filter
                                </div>
                            </div>
                        </div>

                    </button>
                </div>


            </div>

            <div class="col-lg-10 col-10">
                <form method="get" id="designer-search-form">
                    <div class="search">
                        <div class="row top-search">
                            <div class="col-lg-9 col-10">
                                <input class="form-control" id="InputTerm" name="designer_name" placeholder="Search by designer name" type="text" value="{{$searchParams['designer_name'] ?? ''}}" />
                            </div>
                            <div class="col-lg-3 col-2 p-0">

                                <button type="submit" class="btn btn-primary w-100" id="designer-search-btn">
                                    <span class="d-none d-lg-block">
                                        Search
                                    </span>
                                    <span class="d-block d-lg-none">
                                        <svg width="24" height="24" fill="none" stroke="#ffffff" stroke-linecap="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.364 3a7.364 7.364 0 1 0 0 14.727 7.364 7.364 0 0 0 0-14.727v0Z"></path>
                                            <path d="M15.857 15.86 21 21.001"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    @foreach($categories as $category)
                    <input type="checkbox" hidden name="{{$category->title}}" @if(isset($searchParams) && isset($searchParams[$category->slug]))
                    {{'checked'}}
                    @endif
                    value="true" id="{{$category->slug}}" />
                    @endforeach
                </form>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start" style="max-width: 250px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filters</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">


            </button>
        </div>
        <div class="offcanvas-body">
            <div>
                <div class="d-flex flex-wrap">
                    @foreach($categories as $category)
                    <div class=" filter-badge me-2 my-2
                     @if(isset($searchParams) && isset($searchParams[$category->slug]))
                    {{'cat-selected'}}
                    @endif
                    " data-slug="{{$category->slug}}" onclick="updateCategories()">{{$category->title}}
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="row">
                    <h5 class="mx-2 my-4"><b>Search Results</b></h5>
                </div>
                <div class="row py-4">
                    @foreach($designers as $designer)
                    <div class="col-md-3 col-12">
                        <a class="withoutdecanchor" href="{{route('designer_profile',$designer->username)}}">
                            <div class="card my-3 designer-card py-2 border-0">
                                <div class="d-flex m-2 mx-3">
                                    <div class="ms-3 mt-1">
                                        <h6 class="m-0">{{$designer->name}}</h6>
                                        <small class="text-muted">{{$designer->city ? $designer->city . ', ' : ''}} {{$designer->country ?? ''}}</small>
                                        <br><span class="badge bg-secondary accept">I am a {{$designer->definition}} designer</span>
                                    </div>
                                </div>
                                <div class="d-flex ml-4 tags">
                                </div>
                                <div class="card-body">
                                    <div class="designer-image">
                                        <img src="{{asset('uploads/designers/images/' . $designer->image)}}" class="card-img-top" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>



@endsection
@push('scripts')
<script>
    var categoriesArr = [];

    function updateCategories() {
        var category = event.target.getAttribute('data-slug');
        if (categoriesArr.includes(category)) {
            categoriesArr = categoriesArr.filter(e => e !== category);
            document.getElementById(category).checked = false;
            event.target.classList.remove('cat-selected');
        } else {
            categoriesArr.push(category);
            document.getElementById(category).checked = true;
            event.target.classList.add('cat-selected');
        }
    }
</script>
@endpush