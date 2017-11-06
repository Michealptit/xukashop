
<form action="{{route('shop.member.infor.avatar')}}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" name="id" value="{{$id}}" hidden="true">
	<input type="file" name="img_avatar">
	<input type="submit" value="tải ảnh">
</form>