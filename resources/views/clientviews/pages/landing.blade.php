@extends('clientviews.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{asset('/clientSideAssets/masonary/css/component.css')}}" />
<script src="{{asset('/clientSideAssets/masonary/js/modernizr.custom.js')}}"></script>
<style>
    /* Navbar Styling Start */
    .navbar {
        /* background-color: rgba(252, 252, 252, 0.6); */
        background-color: #ddddd5 !important;
        transition: 0.3s ease-in-out;
    }

    .navbar-scrolled {
        background-color: #ffffff !important;
        transition-duration: 0.3s;
        transition: 0.3s ease-in-out;
        /*box-shadow: -1px 2px 3px -1px rgba(46, 45, 45, 0.78);*/
        box-shadow: 0px 3px 2px 0px rgba(222, 213, 213, 0.75);
        -webkit-box-shadow: 0px 3px 2px 0px rgba(222, 213, 213, 0.75);
        -moz-box-shadow: 0px 3px 2px 0px rgba(222, 213, 213, 0.75);
    }
</style>
@endpush
@section('content')
<!-- Slider Hero Section -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> -->
        <!-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button> -->
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- <div class="overlay"></div> -->
            <img src="{{asset('/clientSideAssets/images/hero-new.png')}}" class="d-block w-100" alt="..." />
            <div class="carousel-caption text-black">
                <!-- <div class="hero">
                    <p>The Worlds Destination for jewelry design</p>
                    <h1>Find Dream Designers</h1>
                    <small>
                        Get inspired by the work of thousands of top-rated jewelry
                        designers around the world.</small>
                    <div class="mt-2">
                        <a href="{{route('designers')}}" style="color:black; text-decoration: none;">
                            Search Now<svg width="18" height="18" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 18.715c0-3.003.677-5.402 2.011-7.137 1.612-2.094 4.157-3.223 7.574-3.363v-4.84l9.915 8.438-9.915 8.437v-4.812c-2.075.056-3.64.356-4.888.93-1.348.621-2.325 1.55-3.379 2.752L2.25 20.625v-1.91Z"></path>
                            </svg>
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- 
        <div class="carousel-item">
            <div class="overlay"></div>
            <img src="{{asset('/clientSideAssets/plugin/img/slide-img-2.jpg')}}" class="d-block w-100" alt="..." />
            <div class="carousel-caption text-black">
                <div class="hero">
                    <p>Over 3 thousand ready-to-work creatives!</p>
                    <h1>Find Inspiring Designs</h1>
                    <small>
                        The world's leading brands use 'I am a designer' to hire creative talent. </small>
                    <div class="mt-2">
                        <a href="{{route('designers')}}" style="color:black; text-decoration: none;">
                            Search Now<svg width="18" height="18" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.25 18.715c0-3.003.677-5.402 2.011-7.137 1.612-2.094 4.157-3.223 7.574-3.363v-4.84l9.915 8.438-9.915 8.437v-4.812c-2.075.056-3.64.356-4.888.93-1.348.621-2.325 1.55-3.379 2.752L2.25 20.625v-1.91Z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button> -->
</div>
<!-- Masonary Gallery-->

<div class="container py-4">
    <div class="section-heading text-center pt-4">
        <h1>Explore, Connect & Create</h1>
        <p class="py-2" style="font-size: 20px;">Express your individuality with wearable works of art.</p>
    </div>
</div>

<div class="container">
    <ul class="grid effect-1" id="grid">
        @foreach($projects as $item)
        <li>
            <a href="{{route('project', ['username' => $item->designer['username'], 'slug' => $item->slug])}}" style="text-decoration: none;"><img src="{{asset('/uploads/projects/' . $item->banner)}}" />
            </a>
        </li>
        @endforeach
    </ul>
</div>

<!-- Designs Cards -->
<div class="container py-5">
    <div class="section-heading text-center pb-3">
        <h1>Explore Designs That Inspire</h1>
        <p class="py-2" style="font-size: 20px;">Discover the elegance of creative expression, crafted in precious metals and stones.</p>
    </div>
    <div class="row">
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car1.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car2.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height=18 fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car3.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                                <!--  -->
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height=18 fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car4.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                                <!--  -->
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height=18 fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car5.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                                <!--  -->
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height=18 fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car6.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                                <!--  -->
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height=18 fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car7.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                                <!--  -->
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height=18 fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12">
            <div class="card border-0 my-3">
                <div class="inspiring-image" style="height: 200px">
                    <img src="{{asset('/clientSideAssets/images/car8.jpg')}}" class="card-img-top" alt="..." />
                    <div class="image-overlay">
                        <span class="overlay-text">
                            <div class="row">
                                <div class="col-12">
                                    <p class="mb-0 mt-2 text-white">Bridgetown Collection</p>
                                </div>
                                <!--  -->
                            </div>
                        </span>
                    </div>
                </div>

                <div class="card-body px-0 py-1 inspiring-text">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex">
                                <div>
                                    <img src="{{asset('/clientSideAssets/images/matty.avif')}}" style="border-radius: 60px" width="20px" height="20px" alt="" />
                                </div>
                                <div class="mx-1">
                                    <span>Mattey Corbalorano</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="mx-1">
                                <svg class="heart" width="18" height="18" fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="m12 21-.421-.281c-2.006-1.34-4.543-2.853-6.422-5.078-1.98-2.344-2.93-4.75-2.907-7.36C2.28 5.37 4.616 3 7.457 3c2.255 0 3.755 1.313 4.544 2.26.788-.947 2.287-2.26 4.543-2.26 2.841 0 5.177 2.37 5.206 5.28.027 2.61-.923 5.016-2.906 7.36-1.879 2.226-4.416 3.74-6.422 5.079l-.421.281Z"></path>
                                </svg>
                                <span class="amount">228</span>
                                <svg width="18" height=18 fill="#ccc" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                    <path d="M18.507 6.618C16.457 5.213 14.264 4.5 11.99 4.5c-2.048 0-4.045.61-5.934 1.804C4.149 7.51 2.28 9.704.75 12c1.238 2.063 2.933 4.183 4.697 5.4 2.024 1.393 4.225 2.1 6.542 2.1 2.297 0 4.493-.706 6.53-2.1 1.792-1.228 3.499-3.346 4.731-5.4-1.237-2.036-2.948-4.151-4.743-5.382ZM12 16.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9Z"></path>
                                </svg>
                                <span class="amount">52k</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Team Cards -->
<div class="container">
    <div class="section-heading text-center pt-5 pb-0">
        <h1 class="m-0">Our Featured Designers</h1>
        <p class="py-2" style="font-size: 20px;">Where artistry meets elegance, one gem at a time</p>
    </div>
</div>
<div class="my-4">
    <div class="wrap-slider" id="js-wrapSlider">
        <ul class="js-slider">
            <li class="item">
                <div class="mx-2">
                    <div class="card position-relative team my-2">
                        <img src="{{asset('/clientSideAssets/images/potrait.avif')}}" class="card-img" alt="Sample Image" />
                        <div class="card-img-overlay pb-4 ms-2">
                            <div class="card-img-overlay-text pb-2">
                                <p class="card-text m-0">Dan Mall</p>
                                <div>
                                    <small class="card-text">London, UK</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="mx-2">
                    <div class="card position-relative team my-2">
                        <img src="{{asset('/clientSideAssets/images/bl-white.webp')}}" class="card-img" alt="Sample Image" />
                        <div class="card-img-overlay pb-4 ms-2">
                            <div class="card-img-overlay-text pb-2">
                                <p class="card-text m-0">Walt Disney</p>
                                <div>
                                    <small class="card-text">Texas, US</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="mx-2">
                    <div class="card position-relative team my-2">
                        <img src="{{asset('/clientSideAssets/images/chintoo.gif')}}" class="card-img" alt="Sample Image" />
                        <div class="card-img-overlay pb-4 ms-2">
                            <div class="card-img-overlay-text pb-2">
                                <p class="card-text m-0">Elsa Chinto</p>
                                <div>
                                    <small class="card-text">Tengah, Singapore</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="mx-2">
                    <div class="card position-relative team my-2">
                        <img src="{{asset('/clientSideAssets/images/mcb.webp')}}" class="card-img" alt="Sample Image" />
                        <div class="card-img-overlay pb-4 ms-2">
                            <div class="card-img-overlay-text pb-2">
                                <p class="card-text m-0">Molda Banki</p>
                                <div>
                                    <small class="card-text">Tokyo, Japan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item">
                <div class="mx-2">
                    <div class="card position-relative team my-2">
                        <img src="{{asset('/clientSideAssets/images/designer.gif')}}" class="card-img" alt="Sample Image" />
                        <div class="card-img-overlay pb-4 ms-2">
                            <div class="card-img-overlay-text pb-2">
                                <p class="card-text m-0">Alfred Augusta</p>
                                <div>
                                    <small class="card-text">New York, US</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Destination Section -->

<div class="destination py-3">
    <div class="container py-5">
        <div class="col-lg-11 mx-auto">
            <div class="col-lg-6 mx-auto">
                <div class="text-center pb-3">
                    <h1>Find Your Dream Designer Today</h1>
                    <p class="py-3">
                        The world’s leading brands use 'I am a designer' to hire creative talent.
                        Browse thousands of top-rated designs & portfolios to find your perfect
                        creative match!
                    </p>
                    <div class="row">
                        <div class="col-lg-12">
                            <button onclick="event.preventDefault(); relocateToSearch()" class="w-50 m-auto started my-2 redirectButton">
                                Get started now
                            </button>
                        </div>
                    </div>
                    <p class="pt-2">
                        Are you a designer?
                        <a href="{{route('designer.dashboard')}}" class="text-black join">Publish Your Portfolio</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="{{asset('/clientSideAssets/masonary/js/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('/clientSideAssets/masonary/js/imagesloaded.js')}}"></script>
<script src="{{asset('/clientSideAssets/masonary/js/classie.js')}}"></script>
<script src="{{asset('/clientSideAssets/masonary/js/AnimOnScroll.js')}}"></script>
<script>
    function relocateToSearch() {
        window.location.href = "{{route('designers')}}";
    }
    // Slider Redirect
    const buttons = document.querySelectorAll('.redirectButton');

    // Add event listener to each button
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            window.location.href = "{{route('designers')}}";
        });
    });

    // Masonary
    document.addEventListener('DOMContentLoaded', function() {
        new AnimOnScroll(document.getElementById("grid"), {
            minDuration: 0.4,
            maxDuration: 0.7,
            viewportFactor: 0.2,
        });
    });

    // Team card sliders

    window.requestAnimFrame = (function() {
        return (
            window.requestAnimationFrame ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame ||
            function(callback) {
                window.setTimeout(callback, 1000 / 60);
            }
        );
    })();

    const wrapSlider = document.querySelector("#js-wrapSlider");
    const widthWrap = wrapSlider.offsetWidth;

    let items;
    let sliders;
    let sliderList = [];

    const getSliderList = () => {
        sliders = document.querySelectorAll(".js-slider");
        // get the dom elements in a array to better use it
        sliderList = [...sliders];
    };
    // made a function for update later
    getSliderList();

    const slider = document.querySelectorAll(".js-slider")[0];
    const sliderWidth = slider.offsetWidth;

    const sumIsLargerThanSlider = sliderWidth >= widthWrap + sliderWidth;

    const iterationItems = Math.ceil((widthWrap + sliderWidth) / sliderWidth);
    if (iterationItems > 1) {
        for (let i = 0; i < iterationItems - 1; i++) {
            const clone = slider.cloneNode(true);
            wrapSlider.appendChild(clone);
        }

        getSliderList();
    }

    let stateList = sliderList.map((item, i) => {
        let pos = 0;
        let start = false;

        if (i < iterationItems - 1) {
            pos = -widthWrap + sliders[i].offsetWidth * i;
            start = true;

            sliders[i].style.transform = `translate(${pos}px, -50%)`;
        }

        return {
            pos,
            start,
        };
    });

    // logic animation for sliding each item at a time
    const translate = () => {
        for (let i = 0; i < sliderList.length; i++) {
            const slider = sliderList[i];
            const sliderWidth = slider.offsetWidth;
            const nextIndex = i != sliderList.length - 1 ? i + 1 : 0;
            let pos;

            // if slider should be in movement
            if (stateList[i].start) {
                stateList[i].pos -= 1;
                pos = stateList[i].pos;

                slider.style.transform = `translate(${pos}px, -50%)`;
            }

            const isComplete = pos <= -sliderWidth;
            const isOutSeen = pos <= -widthWrap - sliderWidth;

            // if the slider is fully on screen
            if (isComplete) {
                stateList[nextIndex].start = true;
            }
            // if the slider finished crossing the slider and has disappeared
            if (isOutSeen) {
                stateList[i].start = false;
                stateList[i].pos = 0;
            }
        }
    };

    let isPaused = false;

    function start() {
        if (!isPaused) {
            translate();
        }

        requestAnimFrame(start);
    }

    start();
</script>
@endpush