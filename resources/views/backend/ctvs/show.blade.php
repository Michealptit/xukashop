@extends('backend.layout.admin')
@section('admin')
<div class="row" style="margin: 20px;">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.ctvs.store')}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%" border="1px">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">THÔNG TIN CHI TIẾT CTV</th>
				</thead>
				<tbody>
					@foreach($ctvs as $row)
					<tr>
						<td width="20%">Avatar: </td>
						<td width="80%"><img src="{{$row->img_avatar}}" alt="" width="200" height="300"></td>
					</tr>
					<tr>
						<td width="20%">Phone: </td>
						<td width="80%">{{$row->phone}}</td>
					</tr>
					<tr>
						<td width="20%">Email: </td>
						<td width="80%">{{$row->email}}</td>
					</tr>
					<tr>
					<tr>
						<td width="20%">Facebook: </td>
						<td width="80%"><a href="{{$row->url_facebook}}">Link</a></td>
					</tr>
					<tr>
						<td width="20%">Level: </td>
						<td width="80%">{{$row->level}}</td>
					</tr>
					<tr>
						<td width="20%">Role: </td>
						<td width="80%">{{$row->role}}</td>
					</tr>
					<tr>
						<td width="20%">Coin: </td>
						<td width="80%">{{$row->coin}}</td>
					</tr>
					<tr>
						<td width="20%">Birthday: </td>
						<td width="80%">{{$row->birthday}}</td>
					</tr>
					<tr>
						<td width="20%">Sex: </td>
						<td width="80%">{{$row->sex}}</td>
					</tr>
					<tr>
						<td width="20%">married: </td>
						<td width="80%">{{$row->married}}</td>
					</tr>
					<tr>
						<td width="20%">Office: </td>
						<td width="80%">{{$row->coin}}</td>
					</tr>
					<tr>
						<td width="20%">Address: </td>
						<td width="80%">{{$row->address}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</form>
	</div>
	<div class="col-md-1">
		<a href="#" class="btn btn-success">Sửa</a>
	</div>
	<div class="col-md-1">
		<a href="{{route('admin.ctvs.index')}}" class="btn btn-success">Quay lại</a>
	</div>
</div>
@stop