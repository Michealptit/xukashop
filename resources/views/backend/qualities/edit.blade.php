@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		@foreach($qualities as $row)
		<form action="{{asset('admin/qualities/update')}}/{{$row->id}}" method="POST">
			<input type="text" name="id" value="{{$row->id}}" hidden="true">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">Cập nhật lại chất lượng</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tên chất lượng: </td>
						<td width="80%"><input type="text" name="code" value="{{$row->code}}" style="width: 100%;">
						</td>
					</tr>
					<tr>
						<td><a href="{{route('admin.qualities.index')}}" class="btn btn-success">Quay lại</a></td>
						<td style="text-align: center;"><input type="submit" value="Cập nhật" class="btn btn-warning"></td>
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