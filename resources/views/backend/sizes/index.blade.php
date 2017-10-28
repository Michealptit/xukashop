@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">CỠ SẢN PHẨM</h3>	
	</div>
	<div class="row" style="text-align: right;">
		<a href="{{route('admin.sizes.create')}}" class="btn btn-success">Tạo mới</a>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên cỡ</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($sizes as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->code}}</td>
					<td><a href="{{asset('admin/sizes/edit')}}/{{$row->id}}">Edit</a></td>
					<td><a href="{{asset('admin/sizes/destroy')}}/{{$row->id}}" style="color: red;">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop