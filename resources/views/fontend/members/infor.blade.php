@extends('fontend.layout.layoutfontend')
@section('content')
<div class="membersInfor">
<div class="container">
<div class="row">
        <div class="col-md-12" style="text-align: center; font-size: 16px; font-weight: bold;">
            THÔNG TIN CÁ NHÂN           
        </div>
</div>
@foreach($members as $row)
<div class="row">
    <div class="col-md-12">
        <img src="{{asset('public/img_avatar')}}/{{$row->img_avatar}}" alt="" height="300">
    </div>    
</div>
<div class="row">
    <div class="col-md-6">
        <a href="{{asset('shop/member/infor/avatar')}}/{{$row->id}}" class="btn btn-warning btn-xs">Thay đổi avatar</a>
    </div>
    <div class="col-md-6">
        <a href="{{asset('shop/member/edit')}}/{{$row->id}}" class="btn btn-warning btn-xs">Chỉnh sửa thông tin</a>
    </div>
</div>
<div class="row" style="background-color: white; text-align: left;">
    <div class="col-md-12">
        <table class="table table-hover" width="100%">
            <tr>
                <td width="30%">Họ Và Tên</td>
                <td>{{$row->name}} </td>
            </tr>
            <tr>
                <td>Email </td>
                <td>{{$row->email}}</td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td>{{$row->phone}}</td>
            </tr>
            <tr>
                <td>Facebook</td>
                <td><a href="{{$row->url_facebook}}" target="_blank">Link Facebook</a></td>
            </tr>
            <tr>
                <td>Loại tài khoản</td>
                <td>{{$row->role}}</td>
            </tr>
            <tr>
                <td>Sinh nhật</td>
                <td>{{$row->birthday}}</td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>{{$row->sex}}</td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td>{{$row->address}}</td>
            </tr>
            <tr>
                <td>Điểm tích lũy</td>
                <td>{{$row->money}} Điểm</td>
            </tr>
            <tr>
                <td>Tiền thưởng Coin</td>
                <td>{{$row->coin}} Coin</td>
            </tr>
            <tr>
                <td>Cấp bậc</td>
                <td>{{$row->level}}</td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td>{{$row->hobby}}</td>
            </tr>
            <tr>
                <td>Tình trạng hôn nhân</td>
                <td>{{$row->married}}</td>
            </tr>
            <tr>
                <td>Công việc</td>
                <td>{{$row->office}}</td>
            </tr>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <b>Nếu có thông tin gì sai sót! xin vui lòng cập nhật thông tin!</b>   
    </div>    
</div>
@endforeach
</div>   
</div>
@stop