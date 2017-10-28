@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">Danh sách loại sản phẩm</h3>	
	</div>
	<div class="row" style="text-align: right;">
		<a href="{{route('admin.catalogs.create')}}" class="btn btn-success">Tạo mới</a>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nhà sản xuất</th>
					<th>Loại sản phẩm</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($catalogs as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->producer_name}}</td>
					<td>{{$row->name}}</td>
					<td><a href="#">Edit</a></td>
					<td><a href="{{asset('admin/catalogs/destroy')}}/{{$row->id}}" style="color: red;">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop