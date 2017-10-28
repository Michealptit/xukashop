@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">Danh Sách nhà cung cấp</h3>	
	</div>
	<div class="row" style="text-align: right;">
		<a href="{{route('admin.producers.create')}}" class="btn btn-success">Tạo mới</a>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên nhà cung cấp</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($producers as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->name}}</td>
					<td><a href="#">Edit</a></td>
					<td><a href="{{asset('admin/producers/destroy')}}/{{$row->id}}" style="color: red;">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop