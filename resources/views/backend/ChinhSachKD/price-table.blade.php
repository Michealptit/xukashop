@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">SẢN PHẨM</h3>	
	</div>
	<div class="row" style="margin-bottom: 20px;">
	 <form action="{{route('admin.cskd.search')}}" method="POST">
	 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	 	<div class="col-md-8">
		<input type="text" name="key" placeholder="nhập tên sản phẩm" style="width: 80%;">
	 	</div>
	 	<div class="col-md-4">
	 	<input type="submit" value="Tìm kiếm" style="width: 20%;">	 		
	 	</div>
	 </form>		
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
					<th>giá sỉ</th>
					<th>giá ctv</th>
					<th>giá lẻ</th>
					<th>ảnh</th>
					<th>sửa giá</th>
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
					<td>{{number_format($row->price, 2, '.', ',')}}</td>
					<td>{{number_format($row->price+50000, 2, '.', ',')}}</td>
					<td>{{number_format($row->price+120000, 2, '.', ',')}}</td>
					<td style="padding: 0px!important;"><img src="{{asset('public/img_product_main')}}/{{$row->imgProduct}}" alt="" width="200px" width="200px"></td>
					<td><a href="{{asset('admin/cskd/edit-price')}}/{{$row->id}}">Sửa giá</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop