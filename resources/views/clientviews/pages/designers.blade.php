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

    <div class="col-lg-7 col-11 mx-auto">
        <div class="search">
            <div class="row top-search">
                <div class="col-lg-9 col-7">
                    <input class="form-control" id="Input" type="text" placeholder="Search here..." />
                </div>
                <div class="col-lg-3 col-5 p-0">
                    <button type="button" class="btn btn-primary w-100">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-5">
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal1.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal2.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal3.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal4.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal5.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal6.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal9.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-12">
            <a class="withoutdecanchor" href="{{route('designer_profile','mathewperry')}}">
                <div class="card my-3 designer-card py-2 border-0">
                    <div class="d-flex m-2 mx-3">
                        <div class="logo" style="width: 50px; height: 50px">
                            <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
                        </div>
                        <div class="ms-3 mt-1">
                            <h6 class="m-0">Mathew Perry</h6>
                            <small class="text-muted">New York, United States</small>
                        </div>
                    </div>
                    <div class="d-flex mx-2 tags">
                        <div>
                            <span class="badge bg-secondary ms-2 accept">Accepting New Clients</span>
                        </div>
                        <div>
                            <span class="badge bg-secondary ms-2 pro">PRO</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="designer-image">
                            <img src="{{asset('/clientSideAssets/images/gal10.jpg')}}" class="card-img-top" alt="..." />
                        </div>
                        <div class="pt-2">
                            <small class="card-text text-muted"> $50 (USD) per hour </small>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@endpush