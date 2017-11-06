@extends('fontend.layout.shopfull')
@section('content')
<div class="container" style="margin: 0px; padding: 0px;">
	<div class="row" style="margin: 0px; padding: 0px; color: #110000; font-weight: bold;">
		<div class="col-md-12" style="margin: 0px; padding: 0px; text-align: left; ">
			quà tặng
		</div>
	</div>
	<div class="row">
		@foreach($products as $row)
		<table style="padding: 0px; margin: 2px; text-align: left; background-color: white;">
			<tr>
				<td>
					<img src="{{asset('public/img_product_main')}}/{{$row->imgProduct}}" style="width: 230px; height: 230px; padding: 0px; margin: 0px;">
				</td>
			</tr>
			<tr>
				<td>id{{$row->id}}. <b>{{$row->name}}</b></td>
			</tr>
			<tr>
				<td><img src="{{asset('public/img_icon/global.png')}}" alt="">{{$row->producers_name}}
				 @if(Route::has('login'))
                        @auth
                            @if((Auth::user()->role)=="ctv")
                            <b><?php echo (number_format(($row->price+50000), 0)); ?>đ </b>
                            @else
                            <b><?php echo (number_format(($row->price), 0)); ?>đ </b>
                            @endif
                        @else
                        <span><b><?php echo (number_format(($row->price+120000), 0)); ?>đ </b></span>
                        @endauth
                    @endif
                    <button id="orderProduct" style="border-style: solid;font-weight: bold; background-color: #00FF33; ">Đặt hàng</button>
                </td>
			</tr>
		</table>
		@endforeach
		{{$products->links()}}
	</div>
</div>
@stop