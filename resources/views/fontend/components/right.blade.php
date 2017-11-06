
<div class="container" style="padding: 0px; margin: 0px; width: 100%; padding-left: 1px;">
			<div class="row" style=" padding: 0px; margin: 0px; background-color: white; font-weight: bold; color: black; width: 100%;">
				<div class="col-md-3" style="margin: 0px; padding: 0px;">
					<a href="{{route('shop.products.products')}}" style="display: box;">Vào cửa hàng</a>
				</div>
			    <div class="col-md-3" style="margin: 0px; padding: 0px; ">
			    	<a href="">Quà tặng</a>
			    </div>
			    <div class="col-md-3" style="margin: 0px; padding: 0px;">
			    	<a href="" >Video Chế</a>
			    </div>
			    <div class="col-md-3" style="margin: 0px; padding: 0px;">
			    	<a href="" >Truyện cười</a>
			    </div>                	
            </div>
            <div class="row" style="margin: 0px; padding: 0px;">
                    <div class="col-md-12" style="margin: 0px; padding: 0px;">
                        <img src="{{asset('public/img_ads/tuyendung.gif')}}" alt="tuyendung" width="100%">
                    </div>   
            </div>
            <div class="row" style="margin: 0px; padding: 0px;">
        		<div class="col-md-12" style="color: #000000; font-weight: bold; text-align: left;">
        			<span>Sản phẩm đề xuất</span>
        		</div>
        	</div>
        <div class="row" style="margin: 0px; padding: 0px;">
        	@foreach($productsramdom as $row)
        		<table style="padding: 0px; margin: 0px">
        			<tr>
        				<td><img src="{{asset('public/img_product_main')}}/{{$row->imgProduct}}" width="151px" height="150px" style="padding: 0px; margin: 0px"></td>
        			</tr>
        			<tr>
        				<td>{{$row->name}}</td>
        			</tr>
        		</table>
        	@endforeach
        </div>
        <div class="row" style="margin: 0px; padding: 0px; text-align: left;">
        		<b>Bài viết đề xuất</b>
        </div>
        <div class="row" style="margin: 0px; padding: 0px;">
            @foreach($postsramdom as $rowpost)
                <table style="padding: 0px; margin: 0px">
                    <tr>
                        <td><a href="{{asset('shop/post/show')}}/{{$row->id}}"><img src="{{asset('public/img_post')}}/{{$rowpost->imgPost}}" width="151px" height="150px" style="padding: 0px; margin: 0px"></a></td>
                    </tr>
                    <tr>
                        <td><a href="{{asset('shop/post/show')}}/{{$row->id}}">{{$rowpost->title}}</a></td>
                    </tr>
                </table>
            @endforeach
        </div>
        
</div>