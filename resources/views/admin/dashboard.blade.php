@extends('admin.admin_app')
@push('styles')
@endpush
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-12 col-sm-12 col-xs-12">
		<h2>Dashboard</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Dashboard</a>
			</li>
		</ol>
	</div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<span class="label label-success pull-right">Total</span>
					<h5>Client Users</h5>
				</div>
				<div class="ibox-content">
					<h1 class="no-margins">{{count_total_clients()}}</h1>
					<div class="stat-percent font-bold text-primary"><a href="{{ url('admin/users') }}"><span class="label label-primary">View</span></a></div>
					<small>Users</small>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<span class="label label-success pull-right">Total</span>
					<h5>Designers</h5>
				</div>
				<div class="ibox-content">
					<h1 class="no-margins">{{count_total_designers()}}</h1>
					<div class="stat-percent font-bold text-primary"><a href="{{ url('admin/designers') }}"><span class="label label-primary">View</span></a></div>
					<small>Designers</small>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<span class="label label-success pull-right">Total</span>
					<h5>Projects</h5>
				</div>
				<div class="ibox-content">
					<h1 class="no-margins">{{count_total_projects()}}</h1>
					<div class="stat-percent font-bold text-primary"><a href="{{ url('admin/projects') }}"><span class="label label-primary">View</span></a></div>
					<small>Projects</small>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
@push('scripts')
<script>

</script>
@endpush