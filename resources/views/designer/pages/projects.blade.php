@extends('designer.layouts.app')
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link href="{{asset('designer_assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

<style>
    thead th {
        border-top: 1px solid rgba(0, 0, 0, 0.15) !important;
        border-right: 1px solid rgba(0, 0, 0, 0.15) !important;
    }

    thead th:first-child {
        border-left: 1px solid rgba(0, 0, 0, 0.15) !important;
    }

    tbody td {
        border-right: 1px solid rgba(0, 0, 0, 0.15) !important;
    }

    tbody td:first-child {
        border-left: 1px solid rgba(0, 0, 0, 0.15) !important;
    }

    .btn-success,
    .btn-warning {
        width: 100px;
    }
</style>
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Manage Projects</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('designer.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage Projects</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- <div class="alert alert-danger" role="alert">
    This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!
</div> -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Your Projects</h5>
                <div>
                    <a id="addRow" href="{{route('designer.add-projects')}}" class="btn btn-sm btn-primary"><i data-feather="plus-circle"></i> Add New Project</a>
                </div>
            </div>
            <div class="card-body" style="overflow-x:auto;">
                <table id="zero-config" class="table table-striped responsive nowrap alignmdl-data-table" style="overflow-x:auto;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Views</th>
                            <th>Saves</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($projects as $item)
                        <tr>
                            <td>{{$i++}}</td>
                            <td><a href="{{ route('project', ['username' => $designer->username, 'slug' => $item->slug]) }}" target="_blank" style="text-decoration: none;">{{$item->title}} <i class=" ri-external-link-line "></i></a></td>
                            <td>{{$item->views}}</td>
                            <td>{{$item->saves}}</td>
                            <td>
                                @if($item->is_published == 1)
                                <span class=" badge w-100 bg-success text-white">Published</span>
                                @else
                                <span class=" badge w-100 bg-dark text-white">Draft</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('designer.projectDetails', $item->slug)}}" class="btn btn-sm btn-primary"> <i class=" ri-edit-line "></i> Edit</a>
                                @if($item->is_published == 1)
                                <a class="btn btn-sm btn-warning" onclick="unpublishAlert(this);" data-id="{{$item->id}}">Unpublish</a>
                                @else
                                <a class="btn btn-sm btn-success" onclick="publishAlert(this);" data-id="{{$item->id}}">Publish</a>
                                @endif
                                <a class="btn btn-sm btn-danger" onclick="deleteAlert(this);" data-id="{{$item->id}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('designer_assets/js/toastify.js')}}"></script>
<script src="{{asset('designer_assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('designer_assets/js/pages/sweetalerts.init.js')}}"></script>
<script>
    new DataTable('#zero-config');

    document.addEventListener('DOMContentLoaded', function() {
        var success = '{{session("success") ?? ""}}';
        if (success) {
            Toastify({
                text: success,
                duration: 5000,
                close: true,
                gravity: "top",
                position: 'right',
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            }).showToast();
        }
    });

    function publishAlert(record) {
        Swal.fire({
            title: "Are you sure?",
            text: "You want to publish this project!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, publish it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var id = record.getAttribute('data-id');
                fetch("{{url('designer/projects/publish')}}/" + id)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: "Published!",
                                text: "Your project has been published.",
                                icon: "success"
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong.",
                                icon: "error"
                            });
                        }
                    });
            }
        });
    }

    function unpublishAlert(record) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, unpublish it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var id = record.getAttribute('data-id');
                fetch("{{url('designer/projects/unpublish')}}/" + id)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: "Unpublished!",
                                text: "Your project has been unpublished.",
                                icon: "success"
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong.",
                                icon: "error"
                            });
                        }
                    });
            }
        });
    }

    function deleteAlert(record) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var id = record.getAttribute('data-id');
                fetch("{{url('designer/projects/delete')}}/" + id)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: "Deleted!",
                                text: "Your project has been deleted.",
                                icon: "success"
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong.",
                                icon: "error"
                            });
                        }
                    });
            }
        });
    }
</script>
@endpush