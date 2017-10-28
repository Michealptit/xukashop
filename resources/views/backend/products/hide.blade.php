@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">SẢN PHẨM</h3>	
	</div>
	<div class="row" style="text-align: right;">
		<a href="{{route('admin.products.create')}}" class="btn btn-success">Tạo mới</a>
	</div>
	<div class="row">
		<table class="table table-hover" border="1" style="background-color: white!important;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nhà SX</th>
					<th>Loại SP</th>
					<th>Tên SP</th>
					<th>Quality</th>
					<th>Sex</th>
					<th>Price</th>
					<th>Sl Còn</th>
					<th>Sl Bán</th>
					<th>Mô Tả</th>
					<th>ảnh</th>
					<th>Edit</th>
					<th>Show</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $row)
				<tr style="padding: 0px;">
					<td>{{$row->id}}</td>
					<td>{{$row->producers_name}}</td>
					<td>{{$row->catalogs_name}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->qualities_code}}</td>
					<td>{{$row->sexes_code}}</td>
					<td>{{$row->price}}</td>
					<td>{{$row->slCon}}</td>
					<td>{{$row->slBan}}</td>
					<td>{{$row->detail}}</td>
					<td style="padding: 0px!important;"><img src="{{asset('public/img_product_main')}}/{{$row->imgProduct}}" alt="" width="200px" width="200px"></td>
					<td><a href="{{asset('admin/sizes/edit')}}/{{$row->id}}">Edit</a></td>
					<td><td><a href="{{asset('admin/products/clickshow')}}/{{$row->id}}">Show</a></td></td>
					<td><a href="{{asset('admin/sizes/destroy')}}/{{$row->id}}" style="color: red;">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop