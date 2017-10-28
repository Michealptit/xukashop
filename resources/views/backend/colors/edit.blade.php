@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
		@foreach($colors as $row)
		<form action="{{asset('admin/colors/update')}}/{{$row->id}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="id" value="{{$row->id}}" hidden="true">
			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">TẠO MỚI MÀU SẢN PHẨM</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tên màu sắc: </td>
						<td width="80%"><input type="text" name="code" value="{{$row->code}}" style="width: 100%;">
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