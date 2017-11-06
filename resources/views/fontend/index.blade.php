
@extends('fontend.layout.layoutfontend')
@section('content')
<div class="infinite-scroll" style="font-family: Lucida Grande, Lucida Sans, Arial, sans-serif;">
@foreach($products as $row)
<div class="container">
            <div class="row" style=" text-align: left; background-color: white;">
            <div class="col-md-1" style="text-align: left; padding-top: 5px;">Id={{$row->id}}.</div>
            <div class="col-md-8" style="font-weight: bold; text-align: left; font-size: 16px;"> {{$row->name}}</div>
            <div class="col-md-3" style="text-align: right; padding-top: 5px;">
                    @if (Route::has('login'))
                        @auth
                            @if((Auth::user()->role)=="ctv")
                            <?php echo (number_format(($row->price+50000), 0)); ?>
                            @else
                            <?php echo (number_format(($row->price), 0)); ?>
                            @endif
                        @else
                        <span><?php echo (number_format(($row->price+120000), 0)); ?></span>
                        @endauth
                    @endif
                <i>đ</i></div>
        </div>
        <div class="row" style="background-color: white; text-align: left; padding: 0px;">
            <div class="col-md-6" style="text-align: left;">
            <img src="{{asset('public/img_icon/global.png')}}" alt=""> {{$row->producers_name}} | {{$row->catalogs_name}}
            </div>
            <div class="col-md-3" style="text-align: left;">
                <a href=""><button>Đặt mua</button></a>
            </div>
            <div class="col-md-3" style="text-align: left;">
                <a href="">Chi tiết ..</a>
            </div>
        </div>
        <div class="row" style="background-color: white; padding: 0px;">
            <div class="col-md-12" style="padding: 2px;">
                <img src="{{asset('public/img_product_main')}}/{{$row->imgProduct}}" style="width: 100%; height: 300px; padding: 0px; margin: 0px;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="height: 10px;"></div>  
        </div>   
</div>
@endforeach
{{$products->links()}}
 </div>
 <script type="text/javascript">
        $('ul.pagination').hide();
       // alert("ac");
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="public/images/loading.gif" alt="Loading..." />',
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