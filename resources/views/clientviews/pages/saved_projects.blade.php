@extends('clientviews.layouts.panel')
@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<link href="{{asset('designer_assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Saved Projects</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{route('user.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Saved Projects</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Your Saved Projects</h5>
            </div>
            <div class="card-body" style="overflow-x:auto;">
                <table id="zero-config" class="table table-striped responsive nowrap alignmdl-data-table" style="overflow-x:auto;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Designer</th>
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
                            <td><a href="{{ route('project', ['username' => $item->designer->username, 'slug' => $item->slug]) }}" target="_blank" style="text-decoration: none;">{{$item->title}} <i class=" ri-external-link-line "></i></a></td>
                            <td><a href="{{route('designer_profile', $item->designer->username) }}" target="_blank" style="text-decoration: none;"><img src="{{asset('uploads/designers/images/' . $item->designer->image)}}" style="width: 20px; height: 20px; overflow: contain; border-radius: 50%; margin-right: 5px;" alt="">{{$item->designer->name}} <i class=" ri-external-link-line "></i></a></td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('project', ['username' => $item->designer->username, 'slug' => $item->slug]) }}" target="_blank" style="text-decoration: none;">View</a>
                                <a class="btn btn-sm btn-danger" onclick="deleteAlert(this);" data-id="{{$item->id}}">Unsave</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div>
@endsection
@push('scripts')
<script type="text/javascript" src="{{asset('designer_assets/js/toastify.js')}}"></script>
<script type="text/javascript" src="{{asset('designer_assets/js/toastify.js')}}"></script>
<script src="{{asset('designer_assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('designer_assets/js/pages/sweetalerts.init.js')}}"></script>
<script src="{{asset('clientSideAssets/jquery/jquery-3.7.1.min.js')}}"></script>
<script>
    new DataTable('#zero-config');

    function deleteAlert(record) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Unsave it!"
        }).then((result) => {
            if (result.isConfirmed) {
                var id = record.getAttribute('data-id');
                fetch("{{url('user/removesavedproject')}}/" + id)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: "Removed!",
                                text: "Your project has been removed from your save list.",
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