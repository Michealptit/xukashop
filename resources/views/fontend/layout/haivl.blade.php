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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.3.7/jquery.jscroll.js"></script>
</head>
<body style="align-content: center; background-color: #CCCCCC; margin: 0px; padding: 0px; text-align: center; width: 100%;">
<!-- Phan menu tren cung -->

	@include('fontend.components.navbar')

<div class="container" style="width: 100%; padding-top: 40px;">
	<div class="row" style="margin: 0px; padding: 0px;">
		<div class="col-sm-2" style="margin: 0px; padding: 0px;">
			@include('fontend.components.menuleft')
		</div>
		<div class="col-sm-5" style="margin: 0px; padding: 0px;">
				@yield('content')
		</div>
		<div class="col-sm-5" style="margin: 0px; padding: 0px;">
				@include('fontend.components.right')
		</div>
	</div>
</div>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!--- comment fb --> 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1955394374673360';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--- share fb --> 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=1955394374673360';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>