@extends('admin.admin_app')
@push('styles')
<style>
    #description img {
        max-width: 600px !important;
        height: auto !important;
        /* center them */
        display: block;
        margin-left: auto;
        margin-right: auto;

    }
</style>
@endpush
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2> Project Details </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong> Project Details </strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-4 text-right">
        <a class="btn btn-primary t_m_25" href="{{ url('admin/projects') }}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Projects
        </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="row ibox-content" style="border: none !important;">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-title" style="border: none !important;">
                                <h5>Project Details</h5>
                                <span class="float-end float-right"><a href="{{ route('project', [$designer->username, $project->slug]) }}" target="_blank">View Project Perview <i class="fa fa-external-link"></i></a></span>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" disabled value="{{$project->title}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Subtitle</label>
                                            <textarea type="text" disabled class="form-control">{{$project->subtitle}} </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset('uploads/projects/' . $project->banner)}}" alt="" style="width: 100%; height: auto; overflow: contain;">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div class="col-md-12 text-center" id="description">
                                                {!! $project->description !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="ibox">
                                    <div class="ibox-title" style="border: none !important;">
                                        <h5>About Designer</h5>
                                        <span class="float-end float-right"><a href="{{url('admin/designers/detail/' . $designer->id)}}" target="_blank" class="mr-4">View Designer <i class="fa fa-external-link"></i></a><a href="{{route('designer_profile', $designer->username)}}" target="_blank">View Public Profile <i class="fa fa-external-link"></i></a></span>

                                    </div>
                                    <div class="row ibox-content">
                                        <div class="col-md-4">
                                            <div>
                                                <img alt="image" class="img-fluid" src="{{ $designer->image != 'avatar.png' ? asset('uploads/designers/images/' . $designer->image) : asset('clientSideAssets/images/avatar.png') }}" style="width: 250px; height: 250px; object-fit:contain;">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <strong class="col-sm-2 col-form-label">Designer Name</strong>
                                                        <div class="col-sm-4 col-form-label text-danger">
                                                            {{ $designer->name }}
                                                        </div>
                                                        <strong class="col-sm-2 col-form-label">Username</strong>
                                                        <div class="col-sm-4 col-form-label text-danger">
                                                            {{ $designer->username }}
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <strong class="col-sm-2 col-form-label">Email</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->email }}
                                                        </div>
                                                        <strong class="col-sm-2 col-form-label">Phone</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->phone }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <strong class="col-sm-2 col-form-label">City</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->city }}
                                                        </div>
                                                        <strong class="col-sm-2 col-form-label">Country</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->country }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <strong class="col-sm-2 col-form-label">Pinterest</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->pinterest }}
                                                        </div>
                                                        <strong class="col-sm-2 col-form-label">Dribbble</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->dribbble  }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <strong class="col-sm-2 col-form-label">Instagram</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->instagram }}
                                                        </div>
                                                        <strong class="col-sm-2 col-form-label">Feacebook</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ $designer->facebook  }}
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <strong class="col-sm-2 col-form-label">Member Since</strong>
                                                        <div class="col-sm-4 col-form-label">
                                                            {{ memberSince($designer->id) }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ibox">
                                <div class="ibox-title" style="border: none !important;">
                                    <h5>Other Projects</h5>
                                </div>
                                <div class="ibox-content">
                                    <!-- cards -->
                                    <div class="row">
                                        @foreach($works as $work)
                                        <div class="col-md-4">
                                            <div class="card">
                                                <img class="card-img-top" src="{{ asset('uploads/projects/' . $work->banner) }}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title
                                                ">{{ $work->title }}</h5>
                                                    <p class="card-text">{{ $work->subtitle }}</p>
                                                </div>
                                                <div class="card-footer">
                                                    <a href="{{ url('admin/projects/detail/' . $work->id) }}" class="btn btn-primary">View Project</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @push('scripts')
        <script>
            window.onload = replaceOembedWithEmbed;

            function replaceOembedWithEmbed() {
                // Get all oembed elements
                const figures = document.querySelectorAll('figure');
                figures.forEach(figure => {
                    figure.style.display = 'block';
                    figure.style.alignItems = 'center';
                    figure.style.width = '100%';
                    figure.style.textAlign = 'center';

                });
                const oembedElements = document.querySelectorAll('oembed');

                // Loop through each oembed element
                oembedElements.forEach(oembedElement => {
                    // Get the YouTube video URL from the oembed element's URL attribute
                    const youtubeUrl = oembedElement.getAttribute('url');

                    // Extract the video ID from the YouTube URL
                    const videoId = youtubeUrl.split('v=')[1];

                    // Create an iframe element for embedding the YouTube video
                    const iframe = document.createElement('iframe');
                    iframe.setAttribute('width', '670');
                    iframe.setAttribute('height', '376');
                    iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}`);
                    iframe.setAttribute('frameborder', '0');
                    iframe.setAttribute('allowfullscreen', '');

                    // Replace the oembed element with the iframe
                    oembedElement.parentNode.replaceChild(iframe, oembedElement);
                });

                const quotes = document.querySelectorAll('blockquote');
                quotes.forEach(quote => {
                    quote.className = 'blockquote';
                });
            }
        </script>
        @endpush