@extends('fontend.layout.haivl')
@section('content')
<div class="infinite-scroll" style="padding: 0px; margin: 0px; width: 100%; border: 1px; font-family: Lucida Grande, Lucida Sans, Arial, sans-serif; font-size: 1.1em;">
@foreach($posts as $row)
<div class="container">
			<div class="row" style="font-size: 16px; font-weight: bold; text-align: left; background-color: white;">
					<div class="col-md-12"><a href="{{asset('shop/post/show')}}/{{$row->id}}">{{$row->title}}</a></div>
			</div>
			<div class="row" style="background-color: white; text-align: left;">
				<div class="col-md-12">
					<img src="{{asset('public/img_icon/global.png')}}" alt="">{{$row->timePost}}  
					<div class="fb-share-button" data-href="{{asset('shop/post/show')}}/{{$row->id}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fchimshop.com%2F&amp;src=sdkpreparse">Chia sẻ</a></div>
					<a href="{{asset('shop/post/show')}}/{{$row->id}}"><b>Bình luận ...</b></a>
				</div>
			</div>
			<div class="row" style="background-color: white; padding-top: 5px;">
				<div class="col-md-12" style="margin: 0px; padding: 0px;">
					<img src="{{asset('public/img_post')}}/{{$row->imgPost}}" style="width: 100%; border: 0px;">		
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="height: 10px;">
				</div>		
			</div>
</div>

@endforeach
{{ $posts->links()}}
</div>
 <script type="text/javascript">
        $('ul.pagination').hide();
        
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>
@stop
