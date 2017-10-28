@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.qualities.store')}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">TẠO MỚI CHẤT LƯỢNG</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tên chất lượng: </td>
						<td width="80%"><input type="text" name="code" placeholder="Enter tên chất lượng" style="width: 100%;">
						</td>
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