@extends('designer.layouts.app')
@push('styles')

@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Profile</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('designer.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<form action="{{route('designer.updateProfile')}}" method="post" id="updateDesignerProfileForm">
    @csrf
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
            <img src="{{$designer->cover_image ? asset('uploads/designers/images/' . $designer->cover_image) : asset('designer_assets/images/profile-bg.jpg')}}" class="profile-wid-img" alt="">
            <div class="overlay-content">
                <div class="text-end p-3">
                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                        <input id="profile-foreground-img-file-input" type="file" name="cover_image" class="profile-foreground-img-file-input">
                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                            <img src="{{$designer->image !=  'avatar.png' ? asset('uploads/designers/images/' . $designer->image) : asset('clientSideAssets/images/avatar.png')}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" name="image" class="profile-img-file-input">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <h5 class="fs-16 mb-1">{{$designer->name}}</h5>
                        <p class="text-muted mb-0">{{$designer->city ? $designer->city . ', ' : ''}}{{$designer->country ? $designer->country : ''}}</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-grow-1">
                            <h5 class="card-title mb-0">Portfolio/Socials</h5>
                        </div>
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                            <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                <i class="ri-facebook-fill"></i>
                            </span>
                        </div>
                        <input type="url" class="form-control" name="facebook" id="facebook" placeholder="https://facebook.com/" value="{{$designer->facebook ?? ''}}">
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                            <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                <i class="ri-instagram-fill"></i>
                            </span>
                        </div>
                        <input type="url" class="form-control" name="instagram" id="instagram" placeholder="https://instagram.com/" value="{{$designer->instagram ?? ''}}">
                    </div>
                    <div class="mb-3 d-flex">
                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                            <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                <i class="ri-dribbble-fill"></i>
                            </span>
                        </div>
                        <input type="url" class="form-control" name="dribbble" id="dribble" placeholder="https://dribbble.com/" value="{{$designer->dribbble ?? ''}}">
                    </div>
                    <div class="d-flex">
                        <div class="avatar-xs d-block flex-shrink-0 me-3">
                            <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                <i class="ri-pinterest-fill"></i>
                            </span>
                        </div>
                        <input type="url" class="form-control" name="pinterest" id="pinterest" placeholder="https://pinterest.com/" value="{{$designer->pinterest ?? ''}}">
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
                                <input type="text" value="{{$designer->name ?? ''}}" class="form-control" name="name" required placeholder="John Doe">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="lastnameInput" class="form-label">Username</label>
                                <input type="text" value="{{$designer->username ?? ''}}" class="form-control" name="username" required placeholder="johnthejeweler">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="phonenumberInput" class="form-label">Phone
                                    Number</label>
                                <input type="text" value="{{$designer->phone ?? ''}}" class="form-control" id="phonenumberInput" name="phone" placeholder="+(1) 987 541 6543">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email
                                    Address</label>
                                <input type="email" value="{{$designer->email ?? ''}}" class="form-control" id="emailInput" name="email" required placeholder="johndoe@hotmail.com">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">City</label>
                                <input type="text" value="{{$designer->city ?? ''}}" class="form-control" id="city" name="city" placeholder="Lisbon">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Country</label>
                                <input type="text" value="{{$designer->country ?? ''}}" class="form-control" id="country" name="country" placeholder="Portugal">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="cityInput" class="form-label">Resume</label> <small>(jpg, png, Less than 2Mb)</small>
                                <input type="file" class="form-control" id="resume" name="resume" accept="image/*" />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="countryInput" class="form-label">Open To Work</label>
                                <select name="open" id="open" class="form-control">
                                    <option value="1" {{$designer->open == 0 ? 'selected' : ''}}>No</option>
                                    <option value="0" {{$designer->open == 0 ? 'selected' : ''}}>Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3 pb-2">
                                <label for="exampleFormControlTextarea" class="form-label">About Me</label>
                                <textarea class="form-control" id="exampleFormControlTextarea" name="about" rows="3">{{$designer->about ?? 'Hi, I am a jewelry designer.'}}</textarea>
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="{{asset('clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
<script>
    const resume = document.getElementById("resume");

    resume.onchange = function() {
        if (this.files[0].size > 2048000) {
            alert("Please upload an image file less than 2Mb! You can also compress images using online tools.");
            this.value = "";
        }
    };

    var profile_image = document.getElementById("profile-img-file-input");

    profile_image.onchange = function() {
        if (this.files[0].size > 2048000) {
            alert("Please upload an image file less than 2Mb! You can also compress images using online tools.");
            this.value = "";
        } else {
            var reader = new FileReader();
            reader.onload = function(e) {
                console.log(e.target.result);
                document.querySelector('.user-profile-image').src = e.target.result;
            }
            reader.readAsDataURL(this.files[0]);
        }
    };

    var cover_img = document.getElementById("profile-foreground-img-file-input");

    cover_img.onchange = function() {
        if (this.files[0].size > 2048000) {
            alert("Please upload an image file less than 2Mb! You can also compress images using online tools.");
            this.value = "";
        } else {
            // set src of profile-wid-img to the selected image
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('.profile-wid-img').src = e.target.result;
            }
            reader.readAsDataURL(this.files[0]);
        }

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
                        var errorMsg = data.message + " " + data.errors;
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