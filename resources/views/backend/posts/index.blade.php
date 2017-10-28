@extends('backend.layout.admin')
@section('admin')
<div class="container">
	<div class="row">
		<h3 style="text-align: center;">Danh sách bài viết</h3>	
	</div>
	<div class="row" style="margin-bottom: 10px;">
		<div class="col-md-8" style="margin:0px; padding: 0px;">
			<form action="{{route('admin.posts.search')}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="key" placeholder="nhập tên tiêu đề" width="80%" style="width: 80%;">
				<input type="submit" value="Tìm" width="20%">
			</form>
		</div>
		<div class="col-md-4">
			<a href="{{route('admin.posts.create')}}" class="btn btn-primary">Thêm bài viết</a>
		</div>
	</div>
	<div class="row">
		<table class="table table-hover" border="1" style="background-color: white!important;">
			<thead>
				<tr>
					<th>ID</th>
					<th>tiêu đề</th>
					<th>Nội dung</th>
					<th>Thời gian</th>
					<th>Tác giả</th>
					<th>ảnh</th>
					<th>xóa</th>
					<th>sửa</th>
					<th>chi tiết</th>
				</tr>
			</thead>
			<tbody>
				@foreach($posts as $row)
				<tr style="padding: 0px;">
					<td>{{$row->id}}</td>
					<td>{{$row->title}}</td>
					<td>{{$row->content}}</td>
					<td>{{$row->timePost}}</td>
					<td>{{$row->author}}</td>
					<td style="padding: 0px!important;"><img src="{{asset('public/img_post')}}/{{$row->imgPost}}" alt="" height="200"></td>
					<td><a href="{{asset('admin/posts/destroy')}}/{{$row->id}}" class="btn btn-danger">Xóa</a></td>
					<td><a href="" class="btn btn-warning">Sửa</a></td>
					<td><a href="" class="btn btn-info">Chi tiết</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop