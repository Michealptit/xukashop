@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">DANH SÁCH CỘNG TÁC VIÊN</h3>	
	</div>
	<div class="row" style="text-align: right;">
		<a href="{{route('admin.ctvs.create')}}" class="btn btn-success" target="_blank">Tạo mới</a>
	</div>
	<div class="row">
		<form action="{{route('admin.customers.search')}}" method="POST">
			<div class="col-md-2">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>
			<div class="col-md-6">
				<input type="text" name="key" placeholder="Nhập số điện thoại" style="width: 100%;">
			</div>
			<div class="col-md-2">
				<input type="submit" value="Tìm kiếm">
			</div>
			<div class="col-md-2">
			</div>
		</form>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Phone</th>
					<th>Tên</th>
					<th>Coin</th>
					<th>Mail</th>
					<th>Birthday</th>
					<th>Status</th>
					<th>Level</th>
					<th>Edit</th>
					<th>Delete</th>
					<th>Show</th>
				</tr>
			</thead>
			<tbody>
				@foreach($ctvs as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->phone}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->coin}}</td>
					<td>{{$row->email}}</td>
					<td>{{$row->birthday}}</td>
					<td>{{$row->actived}}</td>
					<td>{{$row->level}}</td>
					<td><a href="{{asset('admin/ctvs/edit')}}/{{$row->id}}">Edit</a></td>
					<td><a href="{{asset('admin/ctvs/destroy')}}/{{$row->id}}" style="color: red;">Delete</a></td>
					<td><a href="{{asset('admin/ctvs/show')}}/{{$row->id}}" style="color: blue;"><b>Show</b></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop