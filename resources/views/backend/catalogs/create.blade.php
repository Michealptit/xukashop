@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.catalogs.store')}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">Tạo loại sản phẩm</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tên nhà sản xuất: </td>
						<td width="80%">
						 <select name="idProducer" id="">
						 	@foreach($producers as $row)
						 	<option value="{{$row->id}}">{{$row->name}}</option>
						 	@endforeach
						 </select>
						</td>
					</tr>
					<tr>
						<td width="20%">Tên loại sản phẩm: </td>
						<td width="80%"><input type="text" name="name" placeholder="Enter tên loại sản phẩm" style="width: 100%;"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Thêm mới"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<div class="col-md-2">
		
	</div>
</div>
@stop