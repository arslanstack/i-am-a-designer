@extends('clientviews.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{asset('/clientSideAssets/masonary/css/component.css')}}" />
<script src="{{asset('/clientSideAssets/masonary/js/modernizr.custom.js')}}"></script>
<script src="{{asset('/clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
@endpush
@section('content')
<!-- Designer Head -->
<div class="container pt-5 pb-3">
    <div class="col-lg-6 col-12 mx-auto">
        <div class="d-flex justify-content-center">
            <div class="profile">
                <img src="{{asset('/clientSideAssets/images/mathew.webp')}}" alt="" />
            </div>
            <div class="m-3">
                <h1 class="m-0">Mathew Perry</h1>
                <p class="text-muted">New York, United States</p>
            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class="container mt-5">
    <!-- Tab Navigation Buttons -->
    <ul class="nav nav-tabs justify-content-center border-0" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active border-0 text-black" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Projects</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="resume-tab border-0 text-black" data-bs-toggle="tab" data-bs-target="#resume" type="button" role="tab" aria-controls="resume" aria-selected="false">Resume</button>
        </li>

        <li class="nav-item" role="presentation">
            <button class="nav-link" id="about-tab border-0 text-black" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="contact" aria-selected="false">About Me</button>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content mt-3" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <ul class="grid effect-1" id="grid">
                    <li class="projected_card">
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal1.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal2.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal3.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal4.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal5.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal6.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal7.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal8.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal9.jpg')}}" />
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
                        <a href="{{ route('project', ['username' => 'mathewperry', 'id' => 1]) }}" style="text-decoration: none;"><img src="{{asset('/clientSideAssets/images/gal10.jpg')}}" />
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
        <div class="tab-pane fade" id="resume" role="tabpanel" aria-labelledby="resume-tab">
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