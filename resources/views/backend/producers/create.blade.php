@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.producers.store')}}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">TẠO NHÀ CUNG CẤP</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tên nhà cung cấp: </td>
						<td width="80%"><input type="text" name="name" placeholder="Enter tên nhà cung cấp" style="width: 100%;"></td>
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