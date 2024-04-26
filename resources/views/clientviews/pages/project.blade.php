@extends('clientviews.layouts.app')
@push('styles')
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
            <a class="nav-link border-0 text-black" id="home-tab" href="{{route('designer_profile', 'methewperry')}}?tab=projects">Projects</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link border-0 text-black" id="home-tab" href="{{route('designer_profile', 'methewperry')}}?tab=resume">Resume</a>
        </li>

        <li class="nav-item" role="presentation">
            <a class="nav-link border-0 text-black" id="home-tab" href="{{route('designer_profile', 'methewperry')}}?tab=about">About Me</a>
        </li>
    </ul>
</div>
<!-- Project Details Container -->
<div class="container">
    <div class="col-lg-7 col-11 mx-auto">
        <div class="section-heading text-center py-4">
            <div class="col-lg-12 mx-auto">
                <h1>Faire Collection Summer 22'</h1>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mx-auto pt-3 pb-5">



        <div class="my-2">

            <img class="toZoom" src="https://payload.cargocollective.com/1/24/791745/14360613/5.Jewlery-Alejandra-Maricela_Horizontal.2022-04-07-15_47_20.gif" width="100%" />

            <div class="idMyModal modal">
                <span class="close">&times;</span>
                <img class="modal-content" />
            </div>
        </div>
        <div>
            <p class="my-4" style="text-align: justify">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Perferendis porro molestiae nam aperiam, maxime ipsam earum aliquid
                voluptatibus dolores amet commodi soluta excepturi facere omnis
                unde, saepe quos fugiat libero hic iusto, repudiandae voluptas dicta
                veritatis? Exercitationem omnis eum provident rem ab voluptatibus
                enim eius nostrum inventore, aperiam similique fugiat numquam ut
                totam iusto impedit explicabo reprehenderit magnam ex illo dolorum
                nam quia fugit sint. Voluptate in nihil reiciendis, unde architecto
                dicta repellendus earum iure soluta inventore delectus aut sunt
                temporibus ea assumenda culpa harum. Placeat voluptate similique,
                nihil debitis doloribus vel tempora soluta expedita harum!
                Recusandae aut dignissimos nemo?
            </p>
        </div>


        <video id="my-video" class="video-js mb-2" controls preload="auto" poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" data-setup='' loop>
            <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type='video/mp4'>
        </video>

        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="my-2">

                    <img class="toZoom" src="https://payload.cargocollective.com/1/24/791745/14360613/Fairtrade-gumdrop-earring-copy-2_1000.jpg" width="100%" />

                    <div class="idMyModal modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="my-2">

                    <img class="toZoom" src="https://payload.cargocollective.com/1/24/791745/14360613/Fairtrade-gumdrop-earring-copy-2_1000.jpg" width="100%" />

                    <div class="idMyModal modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" />
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@push('scripts')
<!-- Image zoom out JS start-->

<script>
    const modal = document.getElementsByClassName("idMyModal");
    const img = document.getElementsByClassName("toZoom");
    const modalImg = document.getElementsByClassName("modal-content");
    for (let i = 0; i < img.length; i++) {
        img[i].onclick = function() {
            modal[i].style.display = "block";
            modalImg[i].src = this.src;
        };
    }

    var span = document.getElementsByClassName("close");
    for (let i = 0; i < span.length; i++) {
        span[i].onclick = function() {
            modal[i].style.display = "none";
        };
    }
</script>

<!-- Image zoom out JS end-->
@endpush