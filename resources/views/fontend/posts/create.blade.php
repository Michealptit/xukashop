@extends('fontend.layout.haivl')
@section('content')
<div class="row" style="height: 10px;">
	
</div>
<div class="row" style="padding: 0px; margin: 0px;">
	<div class="col-md-12" style="padding: 0px; margin: 0px; text-align: left;">
		<form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; font-weight: bold;">TẠO MỚI BÀI VIẾT</th>
				</thead>
				<tbody>
					<tr>
						<td width="15%">Tiêu đề: </td>
						<td width="85%"><input type="text" name="title" placeholder="Tiêu đề bài viết" style="width: 100%;">
						</td>
					</tr>
					<tr>
						<td width="15%">Ảnh: </td>
						<td width="85%"><input type="file" name="imgPost">
						</td>
					</tr>
					<tr>
						<td width="15%">Nội dung: </td>
						<td width="85%">
							<textarea name="content" id="content" cols="30" rows="5" placeholder="Nội dung" style="width: 100%;"></textarea>
						</td>
					</tr>
					<tr>
						<td width="15%">Tác giả: </td>
						<td width="85%"><input type="text" name="author" value="{{Auth::user()->name}}" style="width: 100%;">
						</td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="submit" value="Thêm mới"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<div class="col-md-2">
		
	</div>
</div>
@stop