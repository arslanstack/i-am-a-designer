@extends('admin.admin_app')
@push('styles')
@endpush
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2> Client Details </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong> Client Details </strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4 col-sm-4 col-xs-4 text-right">
        <a class="btn btn-primary t_m_25" href="{{ url('admin/users') }}">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Client Users
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
                                <img alt="image" class="img-fluid" src="{{ $user->image != 'avatar.png' ? asset('uploads/users/images/' . $user->image) : asset('clientSideAssets/images/avatar.png') }}" style="width: 250px; height: 250px; object-fit:contain;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-title" style="border: none !important;">
                                <h5>User Details</h5>
                            </div>
                            <div class="ibox-content">
                                <div>
                                    <div class="feed-activity-list">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <strong class="col-sm-2 col-form-label">User Name</strong>
                                                    <div class="col-sm-4 col-form-label text-danger">
                                                        {{ $user->name }}
                                                    </div>
                                                    <strong class="col-sm-2 col-form-label">Email</strong>
                                                    <div class="col-sm-4 col-form-label">
                                                        {{ $user->email }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <strong class="col-sm-2 col-form-label">City</strong>
                                                    <div class="col-sm-4 col-form-label">
                                                        {{$user->city ? $user->city : 'N/A'}}
                                                    </div>
                                                    <strong class="col-sm-2 col-form-label">Country</strong>
                                                    <div class="col-sm-4 col-form-label">
                                                        {{$user->country ? $user->country : 'N/A'}}
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <strong class="col-sm-2 col-form-label">Joining Date</strong>
                                                    <div class="col-sm-4 col-form-label">
                                                        {{ date_formated($user->created_at) }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@endpush