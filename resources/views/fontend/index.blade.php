<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/index.css')}}">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body style="align-content: center; background-color: #EEEEEE;">
<center>
<nav  id="menuBar">
<div style="background-color: #009966; height: 50px; margin-top: -8px; margin-left: -5px; margin-right: -5px; padding: 15px;">
	<div class="row">
	<div class="col-md-1">		
	</div>
	<div class="col-md-2">
		<img src="public/img_icon/vnedulogo.png" alt="">
	</div>
	<div class="col-md-5" style="text-align: left; border-radius: 25px;">
		<form class="searchBar" action="#">
                <input placeholder="Tìm kiếm sản phẩm" id="key" type="text">
                <button style="padding: 0px;">Search</button>
        </form>
	</div>
<script type="text/javascript">
$(document).ready(function()
{  
    //sử dụng autocomplete với input có id = key
    $( "input#key" ).autocomplete({
        source:'{{asset('shop/search')}}', 
    })
});
</script>

	<div class="col-md-4">
		<div class="loginList" >
			<span class="barLogin">
				<a href=""><b style="color: #FFCC00;">2,000,000</b> coin<img src="public/img_icon/coin.png" alt="" width="40px" height="30px"></a>
			</span>
			<span class="barLogin">
				<img src="public/img_icon/login.png" alt="">
			</span>
		</div>
	</div>
	</div>
</div>
</nav>
<div class="container" style=" margin-left: 50px; margin-right: 50px; margin-top: 55px;">
	<div class="row">
			<div class="col-sm-2">
				<div class="menuLeft">
						<ul>
							<li>
								<img src="public/img_icon/user.png" alt=""><b style="color: #993300;">HÀ VĂN CHIÊM	</b>
							</li>
							<li>
								<a href="">Thông tin TK </a>
							</li>
							<li>
								<a href="">Hòm thư <i style="font-size: 12px; color: red;">(2)</i></a>
							</li>
							<li>
								<a href="">Quà tặng <i style="font-size: 12px; color: red;">(2)</i></a>
							</li>
							<li>
								<a href="">Lịch sử giao dịch <i style="font-size: 12px; color: red;">(2)</i></a>
							</li>
							<li>
								<span><b>Diễn đàn</b></span>
							</li>
							<li><a href=""><img src="public/img_icon/comedy.png" alt="">Hài vl-bóc phốt</a></li>
							<li><a href=""><img src="public/img_icon/comedy.png" alt="">Truyện cười</a></li>
							<li>
								<span><b>Shop giày thể thao</b></span>
							</li>
							<li><a href=""><img src="public/img_icon/shoes.png" alt="">tất cả</a></li>
							<li><a href=""><img src="public/img_icon/shoes.png" alt="">giày Adidas</a></li>
							<li><a href=""><img src="public/img_icon/shoes.png" alt="">giày Nike</a></li>
							<li><a href=""><img src="public/img_icon/shoes.png" alt="">giày New Blance</a></li>
							<li><a href=""><img src="public/img_icon/shoes.png" alt="">giày Vans</a></li>
							<li><a href=""><img src="public/img_icon/shoes.png" alt="">giày Converse</a></li>
							<li><a href=""><img src="public/img_icon/shoes.png" alt="">giày Palladium</a></li>
						</ul>	
				</div>
		</div>
		<div class="col-sm-7" style="margin: 0px; padding: 3px; border: 1px;">
			<div class="row">
				
			</div>
		</div>
		<div class="col-sm-3">
			<div id="navRight">
			<div class="rightPanel">
	            <div class="panelHeader">
	                <h4>Liên hệ mua nhanh: </h4>
	            </div>
	            <div class="panelContent">
	                <ul>
	                	<li>Zalo1: <a href="#">0918 023 196</a> (Nobita)</li>
	                	<li>Zalo2: <a href="#">0989 686 392</a> (Tiểu bảo)</li>
	                </ul>
	            </div>
	        </div>
	        <div id="rightSpace">
	        </div>
	        <div class="rightAds1">
	           <a href="#"><span style="color:#C95B55; font-size:15px;">Hỗ trợ hóa đơn điện tử Vinaphone</span></a>
	        </div>
	        <div class="rightAds">
	            NOI DUNG QUẢNG CÁO
	        </div>
			</div>
		</div>
	</div>
</div>
</center>
<script src="js/bootstrap.min.js"></script>
</body>
</html>