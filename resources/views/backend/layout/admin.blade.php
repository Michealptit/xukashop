<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Quản lý SHOP ONLINE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/admin.css')}}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/icon-font.min.css')}}" type='text/css' />
<!-- //lined-icons -->
<!--animate-->
<link href="{{asset('public/backend/css/animate.css')}}}" rel="stylesheet" type="text/css" media="all">
<script src="{{asset('public/backend/js/wow.min.js')}}"></script>
    <script>
         new WOW().init();
    </script>
<script src="{{asset('public/backend/js/jquery-1.10.2.min.js')}}"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
        <div class="left-side sticky-left-side">

            <!--logo and iconic logo start-->
            <div class="logo">
                <h1><a href="index.html">XukaStore <span>Admin</span></a></h1>
            </div>
            <div class="logo-icon text-center">
                <a href="backend/index.html"><i class="lnr lnr-home"></i> </a>
            </div>

            <!--logo and iconic logo end-->
            <div class="left-side-inner">

                <!--sidebar nav start-->
                    <ul class="nav nav-pills nav-stacked custom-nav">
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-send"></i>
                                <span>Chính sách KD</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="{{route('admin.cskd.index')}}">Bảng giá</a></li>
                                    <li><a href="">nguồn hàng</a></li>
                                </ul>
                        </li>                       
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-user"></i>
                                <span>Quản lý con người</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="grids.html">Nhân viên</a> </li>
                                    <li><a href="">Shipper</a></li>
                                    <li><a href="widgets.html">Cộng tác viên</a></li>
                                    <li><a href="{{route('admin.customers.index')}}">Khách hàng</a></li>
                                </ul>
                        </li>
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i>
                                <span>Quản lý đơn hàng</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="grids.html">Đơn hàng tạm</a> </li>
                                    <li><a href="widgets.html">Đơn hàng mới tạo</a></li>
                                    <li><a href="widgets.html">Đơn hàng đang xử lý</a></li>
                                    <li><a href="widgets.html">Đơn hàng đã xử lý</a></li>
                                    <li><a href="widgets.html">Đơn hàng bị hủy</a></li>
                                </ul>
                        </li>
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-apple"></i>
                                <span>Quản lý hàng hóa</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="{{route('admin.producers.index')}}">Nhà sản xuất</a> </li>
                                    <li><a href="{{route('admin.catalogs.index')}}">Loại sản phẩm</a></li>
                                    <li><a href="{{route('admin.products.index')}}">Sản phẩm</a></li>
                                    <li><a href="{{route('admin.products.hide')}}">Sản phẩm ẩn</a></li>
                                </ul>
                        </li>
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-check"></i>
                                <span>Quản lý thuộc tính</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="{{route('admin.sexes.index')}}">Giới tính</a></li>
                                    <li><a href="{{route('admin.qualities.index')}}">chất lượng</a></li>
                                    <li><a href="{{route('admin.sizes.index')}}">Size</a></li>
                                    <li><a href="{{route('admin.colors.index')}}">Color</a></li>
                                </ul>
                        </li>
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-piggy-bank"></i>
                                <span>Quản lý kho</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="{{route('admin.inventory.index')}}">Thống kê nhập hàng</a> </li>
                                    <li><a href="widgets.html">Thống kê dung lượng kho</a></li>
                                    <li><a href="widgets.html">Thống kê đầu mối nhập hàng</a></li>
                                </ul>
                        </li>        
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-bullhorn"></i>
                                <span>Quản lý truyền thông</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="grids.html">Danh sách quà tặng</a> </li>
                                    <li><a href="widgets.html">Danh sách các </a></li>
                                </ul>
                        </li>
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-pencil"></i>
                                <span>Quản lý Nội dung</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="{{route('admin.posts.index')}}">Hài Vê Lờ</a> </li>
                                </ul>
                        </li>
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-briefcase"></i>
                                <span>Báo cáo kinh doanh</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="widgets.html">Ngày- Tổng hợp</a></li>
                                    <li><a href="grids.html">Ngày- Địa điểm</a> </li>
                                    <li><a href="grids.html">Ngày- Chi tiết</a> </li>
                                    <li><a href="grids.html">Tháng- Tổng hợp</a> </li>  
                                    <li><a href="grids.html">Tháng- Địa điểm</a> </li>  
                                    <li><a href="grids.html">Tháng- Chi tiết</a> </li>
                                </ul>
                        </li>
                        <li class="menu-list">
                            <a href="#"><i class="glyphicon glyphicon-signal"></i>
                                <span>Báo cáo xu hướng</span></a>
                                <ul class="sub-menu-list">
                                    <li><a href="widgets.html">Tổng hợp</a></li>
                                    <li><a href="grids.html">Báo cáo KD ngày</a> </li>
                                    <li><a href="grids.html">Báo cáo KD tháng</a> </li>
                                    <li><a href="grids.html">Báo cáo xu hướng</a> </li>                                 
                                </ul>
                        </li>
                    </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- left side end-->
    
        <!-- main content start-->
        <div class="main-content">
            <!-- header-starts -->
            <div class="header-section">
             
            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                <div class="user-panel-top">    
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                            </li>   
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
                            </li>                                           
                            <div class="clearfix"></div>    
                        </ul>
                    </div>
                    <div class="profile_details">       
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">   
                                        <span style="background:url(images/1.jpg) no-repeat center"> </span> 
                                         <div class="user-name">
                                            <p>zzzsssssssssss<span>Administrator</span></p>
                                         </div>
                                         <i class="lnr lnr-chevron-down"></i>
                                         <i class="lnr lnr-chevron-up"></i>
                                        <div class="clearfix"></div>    
                                    </div>  
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
                                    <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li> 
                                    <li> <a href="backend/sign-up.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>          
                    <div class="clearfix"></div>
                </div>
              </div>
            <!--notification menu end -->
            </div>
        <!-- //header-ends -->
<!-- ============= CONTENT OWR DDAAY -->
<div class="contentAdmin">
@yield('admin')
</div>
<!-- ============= KET THUC CONTENT -->
        <!--footer section start-->
<footer>
<p>XukaStore.com | Thiết kế bởi <a href="http://chimshop.com/" target="_blank">Hà Chiêm</a></p>
</footer>
        <!--footer section end-->

      <!-- main content end-->
</section>
  
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="{{asset('public/backend/js/bootstrap.min.js')}}"></script>
</body>
</html>