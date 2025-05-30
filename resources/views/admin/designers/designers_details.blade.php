@extends('admin.admin_app')
@push('styles')
<style>
    .grid .card {
        margin-bottom: 0;
    }

    .grid-item {
        margin-bottom: 25px;
    }
</style>
@endpush
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2> Designer Details </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong> Designer Details </strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-4 text-right">
        <a class="btn btn-primary t_m_25" href="{{ url('admin/designers') }}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Designers
        </a>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="row ibox-content" style="border: none !important;">
                    <div class="col-md-4">
                        <div class="ibox-title" style="border: none !important;">
                            <h5>Profile Image</h5>
                        </div>
                        <div>
                            <div class="ibox-content p-4 border-left-right text-center">
                                <img alt="image" class="img-fluid" src="{{ $designer->image != 'avatar.png' ? asset('uploads/designers/images/' . $designer->image) : asset('clientSideAssets/images/avatar.png') }}" style="width: 250px; height: 250px; object-fit:contain;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-title" style="border: none !important;">
                                <h5>Designer Details</h5>
                                <span class="float-end float-right"><a href="{{route('designer_profile', $designer->username)}}" target="_blank">View Public Profile <i class="fa fa-external-link"></i></a></span>
                            </div>
                            <div class="ibox-content">
                                <div>
                                    <div class="feed-activity-list">
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
                                <h5>About Designer</h5>
                            </div>
                            <div class="ibox-content">
                                <div>
                                    <div class="feed-activity-list">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-sm-12 col-form-label">
                                                        {!! $designer->about !!}
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
                                <h5>Recent Projects</h5>
                            </div>
                            <div class="ibox-content">
                                <!-- cards -->
                                <div class="row">
                                    @foreach($projects as $project)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset('uploads/projects/' . $project->banner) }}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title
                                                ">{{ $project->title }}</h5>
                                                <p class="card-text">{{ $project->subtitle }}</p>
                                            </div>
                                            <div class="card-footer">
                                                <a href="{{ route('project', [$designer->username, $project->slug]) }}" class="btn btn-primary">View Project</a>
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

    <script src="{{asset('admin_assets/js/plugins/masonary/masonry.pkgd.min.js')}}"></script>
    <script>
        $(window).load(function() {

            $('.grid').masonry({
                // options
                itemSelector: '.grid-item',
                columnWidth: 300,
                gutter: 25
            });

        });
    </script>
    @endpush