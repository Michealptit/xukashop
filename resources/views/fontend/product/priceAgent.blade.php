@extends('fontend.layout.getPriceAgent')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12" style="height: 10px;">
			
		</div>		
	</div>
	<div class="row">
		<div class="col-md-12">
					<h3 style="text-align: center;">BẢNG GIÁ SỈ CHO CÁC ĐỐI TÁC</h3>	
		</div>
	</div>
	<div class="row" style="margin: 0px; padding: 0px; width: 100%;">
		<div class="col-md-12">
	 	<form action="{{route('admin.cskd.search')}}" method="POST">
	 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="text" name="key" placeholder="nhập tên sản phẩm để tìm kiếm" size="100px;">
	 	<input type="submit" value="Tìm kiếm">	 		
	 	</div>
	 </form>		
	</div>
	<div class="row" style="margin: 0px; padding: 0px;">
		<div class="col-md-12" style="background-color: white; text-align: left;">
			<p>Bingbow không kiểm soát giá bán lẻ của bạn, bạn có thể bán với giá tùy ý! <br>
			Mọi thắc mắc về sản phẩm xin liên hệ zalo: 0918. 023. 196 (Anh Chiêm)</p>
		</div>		
	</div>
	<div class="row"  style="margin: 0px; padding: 0px;">
		<div class="col-md-12" style="margin: 0px; padding: 0px;">
					<table class="table table-hover" border="1" style="background-color: white!important;">
			<thead>
				<tr style="background-color: #FFCC99;">
					<th>ID</th>
					<th>Nhà SX</th>
					<th>Loại SP</th>
					<th>Tên SP</th>
					<th>Quality</th>
					<th>Sex</th>
					<th>giá ctv</th>
					<th>giá lẻ đề xuất</th>
					<th>ảnh</th>
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
					<td>{{number_format($row->price+50000, 2, '.', ',')}}</td>
					<td>{{number_format($row->price+120000, 2, '.', ',')}}</td>
					<td style="padding: 0px!important;"><img src="{{asset('public/img_product_main')}}/{{$row->imgProduct}}" alt="" width="80px" height="60px;"></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
	</div>
</div>
@stop