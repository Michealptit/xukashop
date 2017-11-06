<div id="menubar" style=" margin-top: 0px; width: 100%; text-align: center; align-items: center; ">
<div class="container" style="width: 100%;">
<div class="row" style="padding: 0px; margin: 0px; background-color: #088A08;">
	<div class="col-md-2" style="margin: 0px; padding: 0px;">
				<a href="{{route('begin')}}" style="color: white!important;"><img src="{{asset('public/img_icon/logo-bingbow.png')}}" alt="" height="40px"></a>
	</div>
	<div class="col-md-5" style="margin: 0px; padding: 0px;" ">
			<div style=" padding: 0px; margin: 0px; width: 100%; padding-top: 5px;">
				<form action="#">
					<table>
						<tr>
							<td style="width: 90%;"><input placeholder="Tìm kiếm sản phẩm" id="key" type="text" style="width: 100%;" ></td>
							<td style="width: 10%;"><input type="submit" value="Search"  id="key" style="width: 100%;"></td>
						</tr>
					</table>                
	        	</form>
			</div>
	</div>
	<div class="col-md-5" style="margin: 0px; padding: 0px;">
			<div class="row" style="padding-top: 10px;">
				<div class="col-md-6">
					
										@if (Route::has('login'))
							                    @auth
							                      @if((Auth::user()->role)=="ctv")
							                      	<b style="color: white;">Đối tác chiến lược</b><b style="color: #FFFF00;"> <?php echo (number_format((Auth::user()->coin) , 0)); ?> </b><b style="color: white;">Coin</b>
							                      @elseif((Auth::user()->role)=="member"))
													<b style="color: white;">Thành viên </b><b style="color: #FFFF00;"> <?php echo (number_format((Auth::user()->coin) , 0)); ?> </b><b style="color: white;">Coin</b>
												  @endif
							                    @else
							                      <b style="color: white;">Lãng khách</b><b style="color: #FFFF00;"> 000,000</b> <b style="color: white;"> Coin</b>
							                    @endauth
							            @endif
				</div>
				@if (Route::has('login'))
						@auth
						<div class="col-md-6" style="color: white; text-align: left;">
												<!-- <b><a href="{{ route('logout') }}" style="color: white!important;" >Đăng xuất</a></b> -->
												@if((Auth::user()->level) ==1)
													Cấp <b style="color: #ffcc00;">Hoàng tử</b>
												@elseif ((Auth::user()->level) ==2)
													Cấp <b style="color: #ffcc00;">Thái tử</b>
												@elseif ((Auth::user()->level) ==3)
													Cấp <b style="color: #ffcc00;">Hoàng đế</b>
												@elseif ((Auth::user()->level) ==4)
													Cấp <b style="color: #ffcc00;">Thượng đế</b>
												@else
													Cấp Vô hạng 
												@endif					
						</div>
						@else
						<div class="col-md-3">
							<b style="background-color: green;"><a href="{{ route('login') }}" style="color: white!important;" >Đăng nhập</a></b>
						</div>
						<div class="col-md-3">
							<b style="background-color: green;"><a href="{{ route('register') }}" style="color: white!important;" >Đăng ký</a></b>
						</div>
						@endauth
				@endif
			</div>
	</div>
</div>
</div>
</div>	