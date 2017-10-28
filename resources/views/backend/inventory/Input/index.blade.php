@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">Danh sách nhập kho</h3>	
	</div>
	<div class="row" style="text-align: right;">
		<a href="{{route('admin.inventory.create')}}" class="btn btn-success" target="_blank">Tạo mới</a>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Time</th>
					<th>Price</th>
					<th>Ship</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				@foreach($inventory as $row)
				<tr>
					<td>{{$row->id}}</td>
					<td>{{$row->timeInput}}</td>
					<td>{{$row->priceProduct}}</td>
					<td>{{$row->priceShip}}</td>
					<td>{{$row->total}}</td>
					<td><a href="{{asset('admin/inventory/edit')}}/{{$row->id}}">Edit</a></td>
					<td><a href="{{asset('admin/inventory/destroy')}}/{{$row->id}}" style="color: red;">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop