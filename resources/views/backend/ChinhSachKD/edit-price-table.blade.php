@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		@foreach($products as $row)
		<form action="{{asset('admin/cskd/update-price')}}/{{$row->id}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="id" value="{{$row->id}}" hidden="true">
			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">Sửa lại giá gốc</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tên sản phẩm: </td>
						<td width="80%"><input type="text" name="name" value="{{$row->name}}" style="width: 100%;" readonly="true">
						</td>
					</tr>
					<tr>
						<td width="20%">giá: </td>
						<td width="80%"><input type="text" name="price" value="{{$row->price}}" style="width: 100%;">
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Cập nhật"></td>
					</tr>
				</tbody>
			</table>
		</form>
		@endforeach
	</div>
	<div class="col-md-2">
		
	</div>
</div>
@stop