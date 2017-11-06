@extends('fontend.layout.layoutfontend')
@section('content')
<div class="container">
<h3>Chỉnh sửa thông tin cá nhân</h3>
@foreach($user as $row)
<form action="{{route('shop.member.update')}}" method="POST">
<div class="row" style="background-color: white; text-align: left;">
    <div class="col-md-12">
        <table class="table table-hover" width="100%">
        	<tr>
        		<td colspan="2">
        			<input type="hidden" name="_token" value="{{ csrf_token() }}">
        			<input type="text" name="id" value="{{$row->id}}" hidden="true">
        		</td>
        	</tr>
            <tr>
                <td colspan="2">Thông tin là căn cứ khi cộng điểm, trao tặng các phần thưởng,.. yêu cầu cung cấp thông tin chính xác!</td>
            </tr>
            <tr>
                <td width="30%">Họ Và Tên</td>
                <td><input type="text" name="name" value="{{$row->name}}" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>Email </td>
                <td><input type="text" name="email" value="{{$row->email}}" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td>{{$row->phone}}</td>
            </tr>
            <tr>
                <td>Link Facebook</td>
                <td><input type="text" name="url_facebook" value="{{$row->url_facebook}}" placeholder="Dán link facebook vào đây" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>Sinh nhật</td>
                <td><input type="date" name="birthday" value="{{$row->birthday}}" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                	<select name="sex" id="">
                	<option value="">--Chọn giới tính--</option>
                	@foreach($sexs as $a)
					<option value="{{$a->id}}">{{$a->code}}</option>
                	@endforeach
                	</select>
               	</td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><textarea name="address" id="" rows="3" value="{{$row->address}}" style="width: 100%;"></textarea></td>
            </tr>
            <tr>
                <td>Sở thích</td>
                <td><textarea name="hobby" id="" rows="3" value="{{$row->hobby}}" style="width: 100%;"></textarea></td>
            </tr>
            <tr>
                <td>Tình trạng hôn nhân</td>
                <td><input type="text" name="married" value="{{$row->married}}" style="width: 100%;"></td>
            </tr>
            <tr>
                <td>Công việc</td>
                <td><textarea name="office" id="" rows="3" value="{{$row->office}}" style="width: 100%;"></textarea></td>
            </tr>
            <tr>
            	<td>
					<input type="reset" value="reset" class="btn btn-success">            		
            	</td>
            	<td>
            		<input type="submit" value="submit" class="btn btn-success">
            	</td>
            </tr>
            <tr>
            	<td colspan="22">
            		Xin chân thành cảm ơn!
            	</td>
            </tr>
        </table>
    </div>
</div>
</form>
@endforeach
</div>
@stop