@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">TẠO MỚI BÀI VIẾT</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tiêu đề: </td>
						<td width="80%"><input type="text" name="title" placeholder="Tiêu đề bài viết" style="width: 100%;">
						</td>
					</tr>
					<tr>
						<td width="20%">Ảnh: </td>
						<td width="80%"><input type="file" name="imgPost">
						</td>
					</tr>
					<tr>
						<td width="20%">Nội dung: </td>
						<td width="80%">
							<textarea name="content" id="content" cols="30" rows="5" placeholder="Nội dung" style="width: 100%;"></textarea>
						</td>
					</tr>
					<tr>
						<td width="20%">Tác giả: </td>
						<td width="80%"><input type="text" name="author" placeholder="Tác giả" style="width: 100%;">
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