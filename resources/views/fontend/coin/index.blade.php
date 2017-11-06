@extends('fontend.layout.layoutfontend')
@section('content')
<div class="container">
<div class="row">
	<div class="col-md-12">
	<b style="font-size: 16px;">THỐNG KÊ ĐIỂM THƯỞNG!</b>
	</div>	
</div>
<div class="row">
	<div class="col-md-12" style="text-align: left;">
	Chú ý: Điểm thưởng 1 coin đương đương với 1 đồng tiền VND, điểm thưởng có thể quy đổi thành quà tặng. <br>
	<b>Cách để nhận điểm thưởng: </b><br>
	- Mua sản phẩm của shop <br>
	- Đăng bài trên Showbiz.
	</div>	
</div>
<div class="row" style="background-color: white; font-weight: bold; font-size: 12px;">
	<div class="col-md-4">
	Số điểm hiện tại		
	</div>
	<div class="col-md-8" >
		@foreach($coin as $c)
			<b style="color: red;">{{$c->coin}} </b> Điểm
		@endforeach
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<b>Lịch sử thay đổi</b>		
	</div>	
</div>
@foreach($history as $row)
<div class="row" style="background-color: white; font-weight: bold; font-size: 12px;">
	<div class="col-md-3" style="color: red;">
		<?php 
			if($row->valueChange >0){
				echo "+".$row->valueChange." coin";
			}else{
				echo "-".$row->valueChange." coin";
			}
		?>
	</div>
	<div class="col-md-3">
		{{$row->timeChange}}
	</div>
	<div class="col-md-6">
		{{$row->message}}
	</div>
</div>
@endforeach
</div>
@stop