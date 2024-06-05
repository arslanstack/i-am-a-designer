@extends('admin.admin_app')
@push('styles')
@endpush
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8 col-sm-8 col-xs-8">
        <h2> Featured Projects </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('admin') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <strong> Featured Projects </strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="manage_tbl" class="table table-striped table-bordered dt-responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Title</th>
                                    <th>Designer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach($projects as $item)
                                <tr class="gradeX">
                                    <td>{{ $i++ }}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->designer->username}}</td>
                                    <td>
                                        <a href="{{ url('admin/projects/detail') }}/{{ $item->id }}" class="btn btn-primary btn-sm" data-placement="top" title="Details"> Details </a>
                                        @if ($item->is_featured==1)
                                        <button class="btn btn-danger btn-sm btn_update_featured" data-id="{{$item->id}}" data-featured="0" data-text="You want to unfeature this project!" type="button" data-placement="top" title="Unfeature">Unfeature</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <p>Showing {{ $projects->firstItem() }} to {{ $projects->lastItem() }} of {{ $projects->total() }} entries</p>
                        </div>
                        <div class="col-md-3 text-right">
                            {{ $projects->links('pagination::bootstrap-4') }}
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
    $('#manage_tbl').dataTable({
        "paging": false,
        "searching": false,
        "bInfo": false,
        "responsive": true,
        "columnDefs": [{
                "responsivePriority": 1,
                "targets": 0
            },
            {
                "responsivePriority": 2,
                "targets": -1
            },
        ]
    });
    $(document).on("click", ".btn_update_featured", function() {
        var id = $(this).attr('data-id');
        var featured = $(this).attr('data-featured');
        var show_text = $(this).attr('data-text');
        swal({
                title: "Are you sure?",
                text: show_text,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, please!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    $(".confirm").prop("disabled", true);
                    $.ajax({
                        url: "{{ url('admin/projects/update_featured') }}",
                        type: 'post',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            'id': id,
                            'featured': featured
                        },
                        dataType: 'json',
                        success: function(status) {
                            $(".confirm").prop("disabled", false);
                            if (status.msg == 'success') {
                                swal({
                                        title: "Success!",
                                        text: status.response,
                                        type: "success"
                                    },
                                    function(data) {
                                        location.reload();
                                    });
                            } else if (status.msg == 'error') {
                                swal("Error", status.response, "error");
                            }
                        }
                    });
                } else {
                    swal("Cancelled", "", "error");
                }
            });
    });
</script>
@endpush