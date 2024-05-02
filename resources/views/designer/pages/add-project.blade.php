@extends('designer.layouts.app')
@push('styles')
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Add New Project</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('designer.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('designer.projects')}}">Manage Projects</a></li>
                    <li class="breadcrumb-item active">Add New Project</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<form action="{{route('designer.storeProjects')}}" method="post" id="addProjectForm" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xxl-12">
            <div class="card mt-xxl-n5">
                <div class="card-header d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">
                        Add Project Details
                    </h5>
                    <div>
                        <a id="addRow" href="{{route('designer.projects')}}" class="btn btn-primary btn-sm"><i data-feather="arrow-left"></i> Go Back</a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="firstnameInput" class="form-label">
                                    Project Title</label>
                                <input type="text" class="form-control" name="title" required placeholder="22' Fade Shade Collection">
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="lastnameInput" class="form-label">Banner Image</label>
                                <input type="file" class="form-control" name="banner" accept="image/*" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="lastnameInput" class="form-label">Image Gallery <small>(File size < 2 Mb)</small></label>
                                <input type="file" class="form-control" id="imgGal" name="images[]" accept="image/*" multiple>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="lastnameInput" class="form-label">Video Gallery <small>(Max 3 videos each < 10 Mb)</small></label>
                                <input type="file" class="form-control" id="vidGal" name="videos[]" accept="video/*" multiple>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="mb-3 pb-2">
                                <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea" required name="description" rows="3"></textarea>
                            </div>
                        </div>
                        <!--end col-->

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
    var $vidUpload = $("#vidGal");
    $vidUpload.change(function() {
        if (parseInt($vidUpload.get(0).files.length) > 3) {
            alert("You are only allowed to upload a maximum of 3 videos");
        }
        // iterate  and if any file is greater than 10mb then alert with that filename
        for (var i = 0; i < $vidUpload.get(0).files.length; i++) {
            if ($vidUpload.get(0).files[i].size > 10000000) {
                // toast 
                Toastify({
                    text: "File " + $vidUpload.get(0).files[i].name + " is greater than 10mb. Please compress it before uploading.",
                    duration: 5000,
                    close: true,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
                }).showToast();
                // reset the input field and return
                $vidUpload.val('');
                return;
            }
        }
    });

    var $imgUpload = $("#imgGal");
    $imgUpload.change(function() {
        for (var i = 0; i < $imgUpload.get(0).files.length; i++) {
            // each image must be less than 2 mbs
            if ($imgUpload.get(0).files[i].size > 2000000) {
                // toast 
                Toastify({
                    text: "File " + $imgUpload.get(0).files[i].name + " is greater than 2mb. Please compress it before uploading.",
                    duration: 5000,
                    close: true,
                    gravity: "top",
                    position: 'right',
                    backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
                }).showToast();
                // reset the input field and return
                $imgUpload.val('');
                return;
            }
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        var error = "{{session('error') ?? ''}}";
        if (error) {
            Toastify({
                text: error,
                duration: 3000,
                close: true,
                gravity: "top",
                position: 'right',
                backgroundColor: "linear-gradient(to right, #ff416c, #ff4b2b)",
            }).showToast();
        }

    });
</script>
@endpush