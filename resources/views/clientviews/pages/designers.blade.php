@extends('clientviews.layouts.app')
@push('styles')
<style>
    .withoutdecanchor {
        text-decoration: none;
        color: black;
    }

    /* remove default anchor tag styling on hover as well */
    .withoutdecanchor:hover {
        text-decoration: none;
        color: black;
    }
</style>
@endpush
@section('content')
<div class="container">
    <div class="section-heading text-center py-5">
        <h1>Search Your Dream Designer</h1>
    </div>
    <form action="{{route('designerSearch')}}" method="get">
        <div class="col-lg-7 col-11 mx-auto">
            <div class="search">
                <div class="row top-search">
                    <div class="col-lg-9 col-10">
                        <input class="form-control" id="Input" name="designer_name" type="text" value="{{$name ?? ''}}" />
                    </div>
                    <div class="col-lg-3 col-2 p-0">
                        <button type="submit" class="btn btn-primary w-100">
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
        </div>
    </form>
    <div class="row py-5">
        @foreach($designers as $designer)
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile',$designer->username)}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <!-- <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('uploads/designers/images/' . $designer->image)}}" alt="" />
                        </div> -->
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">{{$designer->name}}</h6>
                            <small class="text-muted">{{$designer->city ? $designer->city . ', ' : ''}} {{$designer->country ?? ''}}</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <!-- <div>
                            @if($designer->open == 0)
                            <span class="badge bg-secondary ms-2 accept">Open to work</span>
                            @endif
                        </div> -->
                        <!-- <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div> -->
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
@endsection
@push('scripts')
@endpush