@extends('clientviews.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{asset('/clientSideAssets/masonary/css/component.css')}}" />
<script src="{{asset('/clientSideAssets/masonary/js/modernizr.custom.js')}}"></script>
<script src="{{asset('/clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
@endpush
@section('content')
<!-- Designer Head -->
<div class="container pt-3 pb-0">
    <div class="col-lg-6 col-12 mx-auto">
        <div class="py-3  justify-content-center  text-center">
            <div class="profile m-auto">
                <img src="{{asset('/clientSideAssets/images/potrait.avif')}}" alt="" />
            </div>
            <div class="mx-3 profile-text">
                <!-- <span class="pro-badge">PRO</span> -->
                <h1 class="m-0 pt-2">Your Name</h1>
                <p class="text-muted m-0">United States</p>
                <div class="d-flex designer-social  justify-content-center">
                    <a href="">
                        <svg width="24" height="24" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.375 3.25a4.388 4.388 0 0 1 4.375 4.375v8.75a4.388 4.388 0 0 1-4.375 4.375h-8.75a4.389 4.389 0 0 1-4.375-4.375v-8.75A4.388 4.388 0 0 1 7.625 3.25h8.75Zm0-1.75h-8.75C4.256 1.5 1.5 4.256 1.5 7.625v8.75c0 3.369 2.756 6.125 6.125 6.125h8.75c3.369 0 6.125-2.756 6.125-6.125v-8.75c0-3.369-2.756-6.125-6.125-6.125Z"></path>
                            <path d="M17.688 7.625a1.313 1.313 0 1 1 0-2.625 1.313 1.313 0 0 1 0 2.625Z"></path>
                            <path d="M12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0-1.75a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Z"></path>
                        </svg>
                    </a>
                    <a href="" class="mx-2">
                        <svg width="24" height="24" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.002 1.5c-5.798 0-10.5 4.702-10.5 10.5 0 4.298 2.587 7.992 6.286 9.619-.028-.732-.005-1.613.183-2.41l1.35-5.723s-.338-.67-.338-1.66c0-1.556.9-2.718 2.025-2.718.957 0 1.416.717 1.416 1.575 0 .96-.614 2.395-.928 3.726-.263 1.116.557 2.02 1.66 2.02 1.987 0 3.327-2.554 3.327-5.582 0-2.302-1.551-4.022-4.369-4.022-3.182 0-5.17 2.377-5.17 5.03 0 .914.272 1.56.694 2.057.192.23.22.324.15.586-.052.193-.164.657-.216.844-.07.267-.286.361-.525.263-1.467-.6-2.151-2.203-2.151-4.013 0-2.981 2.517-6.558 7.504-6.558 4.008 0 6.647 2.902 6.647 6.014 0 4.12-2.292 7.196-5.667 7.196-1.134 0-2.198-.614-2.564-1.308 0 0-.61 2.419-.74 2.887-.22.811-.657 1.618-1.055 2.25.966.286 1.969.43 2.976.432 5.799 0 10.5-4.702 10.5-10.5C22.497 6.206 17.8 1.5 12.002 1.5Z"></path>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="24" height="24" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class="container mt-5">
    <!-- Tab Navigation Buttons -->
    <ul class="nav nav-tabs justify-content-center border-0" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active border-0 text-black" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                Work
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab border-0 text-black" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                Resume
            </button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab border-0 text-black" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="contact" aria-selected="false">
                About Me
            </button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content mt-3" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <ul class="grid effect-1" id="grid">
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal1.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal2.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal3.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal4.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal5.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal6.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal7.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal8.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal9.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'slug' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal10.jpg')}}" />
                            <div class="mt-3">
                                <h5>'Shades' Collection Summer '21</h5>
                                <p>
                                    The Summer 2021 "Shades" collection was designed as an opportunity
                                    to bring people together during the pandemic. This collection was
                                    inspired by each member of the...
                                </p>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container">
                <div class="col-lg-8 mx-auto resume">
                    <img src="{{asset('/clientSideAssets/images/resume.png')}}" width="100%" alt="">
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">

            <div class="col-lg-10 mx-auto pt-3 pb-5">
                <div style="border-radius: 20px; overflow: hidden">
                    <img src="https://framerusercontent.com/images/MSOY9fWwJ1EQeK4PRTFyHCPx4.jpg" width="100%" alt="" />
                </div>
                <p class="my-4" style="text-align: justify;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis porro molestiae nam aperiam, maxime ipsam earum aliquid voluptatibus dolores amet commodi soluta excepturi facere omnis unde, saepe quos fugiat libero hic iusto, repudiandae voluptas dicta veritatis? Exercitationem omnis eum provident rem ab voluptatibus enim eius nostrum inventore, aperiam similique fugiat numquam ut totam iusto impedit explicabo reprehenderit magnam ex illo dolorum nam quia fugit sint. Voluptate in nihil reiciendis, unde architecto dicta repellendus earum iure soluta inventore delectus aut sunt temporibus ea assumenda culpa harum. Placeat voluptate similique, nihil debitis doloribus vel tempora soluta expedita harum! Recusandae aut dignissimos nemo?
                </p>
                <p class="my-4" style="text-align: justify;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis porro molestiae nam aperiam, maxime ipsam earum aliquid voluptatibus dolores amet commodi soluta excepturi facere omnis unde, saepe quos fugiat libero hic iusto, repudiandae voluptas dicta veritatis? Exercitationem omnis eum provident rem ab voluptatibus enim eius nostrum inventore, aperiam similique fugiat numquam ut totam iusto impedit explicabo reprehenderit magnam ex illo dolorum nam quia fugit sint. Voluptate in nihil reiciendis, unde architecto dicta repellendus earum iure soluta inventore delectus aut sunt temporibus ea assumenda culpa harum. Placeat voluptate similique, nihil debitis doloribus vel tempora soluta expedita harum! Recusandae aut dignissimos nemo?
                </p>
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
    new AnimOnScroll(document.getElementById("grid"), {
        minDuration: 0.4,
        maxDuration: 0.7,
        viewportFactor: 0.2,
    });
    document.addEventListener("DOMContentLoaded", function() {
        var grid = document.querySelector(".grid");
        var masonry = new Masonry(grid, {
            itemSelector: ".grid-item",
            columnWidth: ".grid-sizer",
            gutter: 20,
        });


        var urlParams = new URLSearchParams(window.location.search);
        var tabParam = urlParams.get('tab');

        if (tabParam) {
            var tabIdsMap = {
                'projects': 'home-tab',
                'resume': 'resume-tab',
                'about': 'about-tab'
            };
            var tabId = tabIdsMap[tabParam];
            $('#' + tabId).show();
            // document.getElementById(tabId).show();
        }
    });
</script>
@endpush