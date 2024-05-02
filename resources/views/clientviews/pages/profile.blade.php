@extends('clientviews.layouts.panel')
@push('styles')

@endpush
@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Profile</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<form action="{{route('user.updateProfile')}}" method="post" id="updateDesignerProfileForm">
    @csrf
    <div class="row">
        <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                            <img src="{{$user->image !=  'avatar.png' ? asset('uploads/users/images/' . $user->image) : asset('clientSideAssets/images/avatar.png')}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" name="image" class="profile-img-file-input">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-1">{{$user->name}}</h5>
                        <p class="text-muted mb-0">{{$user->city ? $user->city . ', ' : ''}}{{$user->country ? $user->country : ''}}</p>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        Profile Details
                    </h5>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="firstnameInput" class="form-label">
                                    Full Name</label>
                                <input type="text" value="{{$user->name ?? ''}}" class="form-control" name="name" required placeholder="John Doe">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email
                                    Address</label>
                                <input type="email" value="{{$user->email ?? ''}}" class="form-control" id="emailInput" name="email" required placeholder="johndoe@hotmail.com">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">City</label>
                                <input type="text" value="{{$user->city ?? ''}}" class="form-control" id="city" name="city" placeholder="Lisbon">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Country</label>
                                <input type="text" value="{{$user->country ?? ''}}" class="form-control" id="country" name="country" placeholder="Portugal">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="submit" class="btn btn-secondary">Save Changes</button>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                </div>
            </div>
        </div>

        <!--end col-->
    </div>
</form>
@endsection
@push('scripts')
<script src="{{asset('clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('designer_assets/js/toastify.js')}}"></script>

<script>
    var profile_image = document.getElementById("profile-img-file-input");

    profile_image.onchange = function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            console.log(e.target.result);
            document.querySelector('.user-profile-image').src = e.target.result;
        }
        reader.readAsDataURL(this.files[0]);
    };

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('updateDesignerProfileForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.querySelector('button[type="submit"]').setAttribute('disabled', 'true');
            const form = this;
            const formData = new FormData(form);
            fetch(form.action, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log("response", data);
                    if (data.success == true) {
                        console.log(data);
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        }).showToast();
                        // enable the submit button
                        document.querySelector('button[type="submit"]').removeAttribute('disabled');
                        setTimeout(() => {
                            location.reload();
                        }, 700);
                    } else if (data.errors) {
                        console.log(data);
                        var errorMsg = data.errors;
                        // toastr.error(data.message);
                        Toastify({
                            text: errorMsg,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "linear-gradient(to right, #df1b1b, #FFA500)",
                        }).showToast();
                        document.querySelector('button[type="submit"]').removeAttribute('disabled');

                    } else {
                        console.log(data);
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "linear-gradient(to right, #df1b1b, #FFA500)",
                        }).showToast();
                        document.querySelector('button[type="submit"]').removeAttribute('disabled');

                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    });
</script>
@endpush