@extends('clientviews.layouts.panel')
@push('styles')

@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Security</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Security</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<form action="{{route('user.changePswd')}}" method="post" id="ChangePasswordForm">
    @csrf
    <div class="col-xxl-9">
        <div class="card mt-xxl-n5">
            <div class="card-header">
                <h5 class="card-title mb-0">
                    Change Password
                </h5>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="oldpassword" class="form-label">
                                Old Password</label>
                            <input type="password" class="form-control" id="oldpassword" name="old_password" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="newpassword" class="form-label">
                                New Password</label>
                            <input type="password" class="form-control" id="newpassword" name="password" required>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label for="confirmpassword" class="form-label">
                                Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" required>
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
</form>
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('designer_assets/js/toastify.js')}}"></script>
<script src="{{asset('clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('ChangePasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();
            document.querySelector('button[type="submit"]').setAttribute('disabled', 'true');
            if (document.getElementById('newpassword').value !== document.getElementById('confirmpassword').value) {
                e.preventDefault();
                Toastify({
                    text: "New Password and Confirm Password do not match",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
                }).showToast();
                document.querySelector('button[type="submit"]').removeAttribute('disabled');
                return;
            } else if (document.getElementById('newpassword').value.length < 6) {
                e.preventDefault();
                Toastify({
                    text: "New Password must be atleast 6 characters long",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
                }).showToast();
                document.querySelector('button[type="submit"]').removeAttribute('disabled');
                return;
            } else if (document.getElementById('oldpassword').value === document.getElementById('newpassword').value) {
                e.preventDefault();
                Toastify({
                    text: "New Password must be different from Old Password",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
                }).showToast();
                document.querySelector('button[type="submit"]').removeAttribute('disabled');
                return;
            }

            const form = this;
            const formData = new FormData(form);
            fetch(form.action, {
                    method: form.method,
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        }).showToast();
                        setTimeout(() => {
                            location.reload();
                        }, 700);
                    } else {
                        Toastify({
                            text: data.message,
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: 'right',
                            backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
                        }).showToast();
                        document.querySelector('button[type="submit"]').removeAttribute('disabled');
                        form.reset();
                    }
                    document.querySelector('button[type="submit"]').removeAttribute('disabled');
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.querySelector('button[type="submit"]').removeAttribute('disabled');
                });
        });
    });
</script>
@endpush