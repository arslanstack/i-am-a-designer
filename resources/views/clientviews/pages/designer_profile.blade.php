@extends('clientviews.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{asset('/clientSideAssets/masonary/css/component.css')}}" />
<script src="{{asset('/clientSideAssets/masonary/js/modernizr.custom.js')}}"></script>
<script src="{{asset('/clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
@endpush
<style>
    .definition {
        font-size: 16px;
        margin-left: 12px;
        color: #9C8A4A;
    }
</style>
@section('content')

<div class="col-lg-10 mx-auto" style=" margin-bottom: 6rem;">
    <div class="designer-cover">
        <img src="{{$designer->cover_image != 'cover.png' ? asset('uploads/designers/images/' . $designer->cover_image) : 'https://framerusercontent.com/images/MSOY9fWwJ1EQeK4PRTFyHCPx4.jpg'}}" style="object-fit: cover; width: 100%; height: 100%;" alt="">
    </div>
    <div class="container">
        <div>
            <div class="profile">
                <img src="{{$designer->image != 'avatar.png' ? asset('uploads/designers/images/' . $designer->image) : asset('uploads/user.png')}}" alt="" />
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">

                <div class="m-3 profile-text">
                    <h1 class="m-0">{{$designer->name}}@if($designer->definition)<small class="definition">I am a {{$designer->definition}} designer</small>@endif</h1>
                    @if($designer->city || $designer->country)<p class="text-muted m-0 location" style="font-size: 16px !important;">{{$designer->city ? $designer->city . ', ' : ''}} {{$designer->country ?? ''}}</p>@endif
                    <p class="text-black mt-2" style="font-size: 18px !important;">{{$designer->bio}}</p>

                </div>
            </div>
            <div class="col-lg-3 text-center">

                <!-- <h3 class="mt-3 contact-designer-text d-none d-lg-block">Contact Him</h3> -->
                <small class="text-muted"> Member since {{memberSince($designer->id)}}</small>

                <div class="d-flex pt-2 designer-social justify-content-center">
                    <a href="{{$designer->instagram}}" class="mx-1">
                        <svg width="24" height="24" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.375 3.25a4.388 4.388 0 0 1 4.375 4.375v8.75a4.388 4.388 0 0 1-4.375 4.375h-8.75a4.389 4.389 0 0 1-4.375-4.375v-8.75A4.388 4.388 0 0 1 7.625 3.25h8.75Zm0-1.75h-8.75C4.256 1.5 1.5 4.256 1.5 7.625v8.75c0 3.369 2.756 6.125 6.125 6.125h8.75c3.369 0 6.125-2.756 6.125-6.125v-8.75c0-3.369-2.756-6.125-6.125-6.125Z">
                            </path>
                            <path d="M17.688 7.625a1.313 1.313 0 1 1 0-2.625 1.313 1.313 0 0 1 0 2.625Z"></path>
                            <path d="M12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0-1.75a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{$designer->pinterest}}" class="mx-1">
                        <svg width="24" height="24" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.002 1.5c-5.798 0-10.5 4.702-10.5 10.5 0 4.298 2.587 7.992 6.286 9.619-.028-.732-.005-1.613.183-2.41l1.35-5.723s-.338-.67-.338-1.66c0-1.556.9-2.718 2.025-2.718.957 0 1.416.717 1.416 1.575 0 .96-.614 2.395-.928 3.726-.263 1.116.557 2.02 1.66 2.02 1.987 0 3.327-2.554 3.327-5.582 0-2.302-1.551-4.022-4.369-4.022-3.182 0-5.17 2.377-5.17 5.03 0 .914.272 1.56.694 2.057.192.23.22.324.15.586-.052.193-.164.657-.216.844-.07.267-.286.361-.525.263-1.467-.6-2.151-2.203-2.151-4.013 0-2.981 2.517-6.558 7.504-6.558 4.008 0 6.647 2.902 6.647 6.014 0 4.12-2.292 7.196-5.667 7.196-1.134 0-2.198-.614-2.564-1.308 0 0-.61 2.419-.74 2.887-.22.811-.657 1.618-1.055 2.25.966.286 1.969.43 2.976.432 5.799 0 10.5-4.702 10.5-10.5C22.497 6.206 17.8 1.5 12.002 1.5Z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{$designer->facebook}}" class="mx-1">
                        <svg width="24" height="24" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M22.5 12.063c0-5.799-4.702-10.5-10.5-10.5s-10.5 4.7-10.5 10.5c0 5.24 3.84 9.584 8.86 10.373v-7.337H7.692v-3.037h2.666V9.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036H13.64v7.337c5.02-.788 8.859-5.131 8.859-10.373Z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="{{$designer->dribbble}}" class="mx-1">
                        <svg width="24" height="24" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 1.5C6.203 1.5 1.5 6.203 1.5 12S6.203 22.5 12 22.5 22.5 17.802 22.5 12 17.797 1.5 12 1.5Zm6.667 4.84a8.736 8.736 0 0 1 2.062 5.08c-1.892-.098-4.156-.098-5.972.071-.23-.58-.465-1.148-.722-1.695 2.094-.908 3.707-2.1 4.632-3.456ZM12 3.25a8.71 8.71 0 0 1 5.584 2.013c-.952 1.202-2.445 2.25-4.304 3.04-1.018-1.881-2.188-3.5-3.436-4.774A8.79 8.79 0 0 1 12 3.249Zm-3.96.957c1.264 1.258 2.45 2.86 3.49 4.734-1.975.604-4.239.95-6.655.95a21.6 21.6 0 0 1-1.35-.044 8.755 8.755 0 0 1 4.515-5.64Zm-4.774 7.377c.498.022 1.001.033 1.51.028 2.756-.033 5.32-.465 7.525-1.172.208.432.405.875.59 1.329a5.41 5.41 0 0 0-.782.234c-3.013 1.266-5.386 3.305-6.671 5.772A8.719 8.719 0 0 1 3.25 12c0-.14.005-.279.016-.416ZM12 20.75a8.699 8.699 0 0 1-5.365-1.843c1.165-2.308 3.243-4.219 5.863-5.403.246-.115.574-.208.951-.29.313.864.592 1.76.837 2.69a31.79 31.79 0 0 1 .808 4.272A8.678 8.678 0 0 1 12 20.75Zm4.73-1.394a30.34 30.34 0 0 0-1.444-6.388c1.718-.14 3.774-.12 5.41 0a8.741 8.741 0 0 1-3.965 6.388Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>


    </div>

    <!-- Tabs -->
    <div class="container-fluid mt-3 ">
        <!-- Tab Navigation Buttons -->
        <ul class="nav nav-tabs justify-content-center border-0" id="myTab" role="tablist">

            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="about-tab border-0 text-black" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false">
                    About
                </button>
            </li>
            <li class="nav-item " role="presentation">
                <button class="nav-link  border-0 text-black" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                    Projects
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="resume-tab border-0 text-black" data-bs-toggle="tab" data-bs-target="#resume" type="button" role="tab" aria-controls="resume" aria-selected="false">
                    Resume
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">

                <div class="row">
                    <div class="col-lg-8 mx-auto pt-3 pb-5 ">
                        <h5>About The Designer</h5>

                        <p class="my-4" style="text-align: justify;">
                            {{$designer->about}} lorem*20
                        </p>
                        @if($designer->introVideo)
                        <video id="my-video" class="video-js" controls preload="auto" data-setup='' loop>
                            <source src="{{asset('uploads/designers/intros/' . $designer->introVideo)}}" type='video/mp4'>
                        </video>
                        @endif
                    </div>
                    <div class="col-lg-4 mx-auto pt-3 pb-5">
                        <h5>Categories</h5>
                        <div class="d-flex flex-wrap">
                            @foreach($designer->categories as $category)
                            <a href="#"><span class="badge bg-light text-dark m-1">{{$category->slug}}</span></a>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container">
                    <ul class="grid effect-1" id="grid">
                        @foreach($projects as $project)
                        <li class="projected_card">
                            <a href="{{ route('project', ['username' => $designer->username, 'slug' => $project->slug]) }}" style="text-decoration: none;"><img src="{{asset('uploads/projects/' . $project->banner)}}" />
                                <div class="mt-3">
                                    <h5>{{$project->title}}</h5>
                                    <p>
                                        {{ substr($project->subtitle, 0, 120) }}...
                                    </p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="tab-pane fade" id="resume" role="tabpanel" aria-labelledby="resume-tab">
                <div class="container">
                    <div class="col-lg-8 mx-auto resume">
                        <a href="{{asset('uploads/designers/resumes/' . $designer->resume)}}" target="_blank"><img src="{{asset('uploads/designers/resumes/' . $designer->resume)}}" width="100%" alt=""></a>
                    </div>
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
                'work': 'home-tab',
                'resume': 'resume-tab',
                'about': 'about-tab'
            };
            var tabId = tabIdsMap[tabParam];
            $('#' + tabId).show();
            // document.getElementById(tabId).show();
        }
    });
    $(document).ready(function() {
        setTimeout(() => {
            $.ajax({
                url: "{{ url('increment_view') }}",
                type: 'post',
                data: {
                    "_token": "{{ csrf_token() }}",
                    'username': "{{$designer->username}}",
                },
                dataType: 'json',
                success: function(status) {
                    console.log("status");
                }
            });
        }, 10000);
    })
</script>
@endpush