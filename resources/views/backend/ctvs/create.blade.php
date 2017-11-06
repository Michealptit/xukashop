@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.ctvs.store')}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">TẠO KHÁCH CTV</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Số điện thoại: </td>
						<td width="80%"><input type="text" name="phone" placeholder="Enter số điện thoại" style="width: 100%;"></td>
					</tr>
					<tr>
						<td>Họ và tên: </td>
						<td><input type="text" name="name" placeholder="Enter họ và tên" style="width: 100%;"></td>
					</tr>
					<tr>
						<td>Địa chỉ nhận hàng: </td>
						<td><textarea name="address" id="" style="width: 100%;" rows="5" placeholder="nhập địa chỉ nhận hàng"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Tạo khách hàng"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<div class="col-md-2">
		
	</div>
</div>
@stop