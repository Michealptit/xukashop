@extends('backend.layout.admin')
@section('admin')
<div class="row" style="margin: 20px;">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.customers.store')}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%" border="1px">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">THÔNG TIN CHI TIẾT KHÁCH HÀNG</th>
				</thead>
				<tbody>
					@foreach($customers as $row)
					<tr>
                	<td width="30%">Họ Và Tên</td>
                	<td>{{$row->name}} </td>
	            	</tr>
		            <tr>
		                <td>Email </td>
		                <td>{{$row->email}}</td>
		            </tr>
		            <tr>
		                <td>Số điện thoại</td>
		                <td>{{$row->phone}}</td>
		            </tr>
		            <tr>
		                <td>Facebook</td>
		                <td><a href="{{$row->url_facebook}}" target="_blank">Link Facebook</a></td>
		            </tr>
		            <tr>
		                <td>Loại tài khoản</td>
		                <td>{{$row->role}}</td>
		            </tr>
		            <tr>
		                <td>Sinh nhật</td>
		                <td>{{$row->birthday}}</td>
		            </tr>
		            <tr>
		                <td>Giới tính</td>
		                <td>{{$row->sex}}</td>
		            </tr>
		            <tr>
		                <td>Địa chỉ</td>
		                <td>{{$row->address}}</td>
		            </tr>
		            <tr>
		                <td>Điểm tích lũy</td>
		                <td>{{$row->money}} Điểm</td>
		            </tr>
		            <tr>
		                <td>Tiền thưởng Coin</td>
		                <td>{{$row->coin}} Coin</td>
		            </tr>
		            <tr>
		                <td>Cấp bậc</td>
		                <td>{{$row->level}}</td>
		            </tr>
		            <tr>
		                <td>Sở thích</td>
		                <td>{{$row->hobby}}</td>
		            </tr>
		            <tr>
		                <td>Tình trạng hôn nhân</td>
		                <td>{{$row->married}}</td>
		            </tr>
		            <tr>
	                <td>Công việc</td>
	                <td>{{$row->office}}</td>
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
		<a href="{{route('admin.customers.index')}}" class="btn btn-success">Quay lại</a>
	</div>
</div>
@stop