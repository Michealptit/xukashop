<div class="menuLeft">
		<ul>
			<li>
				@if (Route::has('login'))
		            @auth
				<img src="{{asset('public/img_avatar')}}/{{ Auth::user()->img_avatar }}" alt="" width="50" height="50" style="border-radius:50%;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;">
                	@else
                	<img src="{{asset('public/img_icon/user.png')}}" alt="">
                	@endauth
                @endif
				<b style="color: #993300;"> 
				@if (Route::has('login'))
		            @auth
		                <?php 
		                 if(strlen(Auth::user()->name) >12){
		                    echo substr(Auth::user()->name, 0, 12); 
		                 }else{
		                    echo Auth::user()->name;
		                 }
		                ?>
		            @else
		                <span>KHÁCH LẺ</span>
		            @endauth
		         @endif
				</b>
			</li>
			<li>
				@if(Route::has('login'))
					@auth
					<a href="{{asset('shop/member/infor')}}/{{Auth::user()->id}}"><img src="{{asset('public/img_icon/infor.png')}}" alt="" width="20px" height="20px">Thông tin</a>
					@else
					<a href="{{route('login')}}"><img src="{{asset('public/img_icon/infor.png')}}" alt="" width="20px" height="20px"> Thông tin</a>
					@endauth
				@endif
			</li>
			<li>
				@if(Route::has('login'))
					@auth
					<a href="{{asset('shop/member/infor')}}/{{Auth::user()->id}}"><img src="{{asset('public/img_icon/email.png')}}" alt="" width="20px" height="20px">  Hòm thư</a>
					@else
					<a href="{{route('login')}}"><img src="{{asset('public/img_icon/email.png')}}" alt="" width="20px" height="20px">  Hòm thư <i style="font-size: 12px; color: red;">(2)</i></a>
					@endauth
				@endif
				
			</li>
			<li>
				@if(Route::has('login'))
					@auth
					<a href="{{asset('shop/coin/index')}}/{{Auth::user()->id}}"><img src="{{asset('public/img_icon/poins.png')}}" alt="" width="20px" height="20px"> Điểm thưởng</a>
					@else
					<a href="{{route('login')}}"><img src="{{asset('public/img_icon/poins.png')}}" alt="" width="20px" height="20px"> Điểm thưởng<i style="font-size: 12px; color: red;">(2)</i></a>
					@endauth
				@endif
				
			</li>
			<li>
				@if(Route::has('login'))
					@auth
					<a href="{{asset('shop/member/infor')}}/{{Auth::user()->id}}"><img src="{{asset('public/img_icon/gift.png')}}" alt="" width="20px" height="20px"> Quà tặng</a>
					@else
					<a href="{{route('login')}}"><img src="{{asset('public/img_icon/gift.png')}}" alt="" width="20px" height="20px"> Quà tặng<i style="font-size: 12px; color: red;">(2)</i></a>
					@endauth
				@endif
				
			</li>
			<li>
				@if(Route::has('login'))
					@auth
					<a href="{{asset('shop/member/infor')}}/{{Auth::user()->id}}"><img src="{{asset('public/img_icon/transection.png')}}" alt="" width="20px" height="20px"> Giao dịch</a>
					@else
					<a href="{{route('login')}}"><img src="{{asset('public/img_icon/transection.png')}}" alt="" width="20px" height="20px"> Giao dịch<i style="font-size: 12px; color: red;">(2)</i></a>
					@endauth
				@endif
				
			</li>
			<li>
			<a href="{{route('shop.products.index')}}"><img src="{{asset('public/img_icon/Shoesprofi.png')}}" alt="" width="20px" height="20px"> Sản phẩm cho bạn
			</a>
			</li>
			<li>
				@if(Route::has('login'))
					@auth
						@if((Auth::user()->role)=="ctv")
							<a href="{{route('shop.priceagent.index')}}"><img src="{{asset('public/img_icon/doitac.png')}}" alt="" width="20px" height="20px"> Bảng giá Đối tác</a></a>
						@endif
					@else
					@endauth
				@endif
			</li>
		</ul>
		<br>
		<ul>
			<li><span><b style="font-size: 14px;"><a href="{{route('shop.post.index')}}"><img src="{{asset('public/img_icon/comedy.png')}}" alt="" width="20px" height="20px"> Góc Showbiz </a></b></span>
			</li>
			<!-- Share tài liệu Tiếng anh-->
			<!-- Share tài liệu MS OS -->  
			<li>
				@if(Route::has('login'))
					@auth
					<a href="{{route('shop.post.create')}}"><img src="{{asset('public/img_icon/write.png')}}" alt="" width="20px" height="20px"> Đăng bài viết</a>
					@else
					<a href="{{route('login')}}"><img src="{{asset('public/img_icon/write.png')}}" alt="" width="20px" height="20px"> Đăng bài viết</a>
					@endauth
				@endif
			</li>
		</ul>
		<br>
		<ul>
			<li>
				<span><b style="font-size: 14px;"><a href="{{route('shop.products.products')}}"><img src="{{asset('public/img_icon/shop.png')}}" alt="" width="20px" height="20px"> Cửa hàng</a></b></span>
			</li>
			<li><a href=""><img src="{{asset('public/img_icon/giay.png')}}" alt=""> giày Adidas</a></li>
			<li><a href=""><img src="{{asset('public/img_icon/giay.png')}}" alt=""> giày Nike</a></li>
			<li><a href=""><img src="{{asset('public/img_icon/giay.png')}}" alt=""> giày New Blance</a></li>
			<li><a href=""><img src="{{asset('public/img_icon/giay.png')}}" alt=""> giày Vans</a></li>
			<li><a href=""><img src="{{asset('public/img_icon/giay.png')}}" alt=""> giày Converse</a></li>
			<li><a href=""><img src="{{asset('public/img_icon/giay.png')}}" alt=""> giày Palladium</a></li>
		</ul>
		<br>
		<ul style="font-style: italic;">
			<li> </li>
			<li><a href="{{route('shop.more.infor')}}">Thông tin</a></li>
			<li><a href="{{route('shop.more.rule')}}">Điều khoản</a></li>
			<li><a href="{{route('shop.more.scurity')}}">Tuyển dụng</a></li>
			<li><a href="{{route('shop.more.guide')}}">Hướng dẫn mua hàng</a></li>
		</ul>
		<br>
		<ul>
			<li><a href="{{route('shop.more.infor')}}">Hóa đơn điện tử Vinaphone</a></li>
			<li><a href="https://www.facebook.com/bingbow.com.vn/" target="_bank">Fanpage Bingbow</a></li>
			<li><a href="https://www.facebook.com/groups/giaychimshop/"  target="_bank">Group giày thể thao HN</a></li>
		</ul>
</div>