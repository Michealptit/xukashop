@extends('fontend.layout.haivl')
@section('content')
<div class="infinite-scroll" style="padding: 0px; margin: 0px; width: 100%; border: 1px; font-family: Lucida Grande, Lucida Sans, Arial, sans-serif; font-size: 1.1em;">
@foreach($posts as $row)
<div class="container">
			<div class="row" style="font-size: 12px; font-weight: bold; text-align: left; background-color: white;">
					<div class="col-md-4"><a href="{{route('begin')}}"><img src="{{asset('public/img_icon/home.png')}}" alt="Home" width="50px" height="50px"></a></div>
					<div class="col-md-4"><a href="{{asset('shop/post/show')}}/{{$row->id -1}}"><img src="{{asset('public/img_icon/back.png')}}" alt="Back" width="50px" height="50px"></b></a></div>
					<div class="col-md-4"><a href="{{asset('shop/post/show')}}/{{$row->id +1}}"><img src="{{asset('public/img_icon/next.png')}}" alt="Next" width="50px" height="50px"></a></div>
			</div>
			<div class="row" style="font-size: 16px; font-weight: bold; text-align: left; background-color: white;">
					<div class="col-md-12">{{$row->title}}</div>
			</div>
			<div class="row" style="background-color: white; text-align: left;">
				<div class="col-md-12">
					<img src="{{asset('public/img_icon/global.png')}}" alt="">{{$row->timePost}}
				</div>
			</div>
			<div class="row" style="background-color: white; padding-top: 5px;">
				<div class="col-md-12" style="margin: 0px; padding: 0px;">
					<img src="{{asset('public/img_post')}}/{{$row->imgPost}}" style="width: 100%; border: 0px;">		
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: left;">
					<div class="fb-share-button" data-href="{{asset('shop/post/show')}}/{{$row->id}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fchimshop.com%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
				</div>		
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align: left;">
					<div class="fb-comments" data-href="{{asset('shop/post/show')}}/{{$row->id}}" data-width=100% data-numposts="5" order_by="reverse_time"></div>

				</div>		
			</div>
</div>
@endforeach
</div>
@stop
