@extends('backend.layout.admin')
@section('admin')
<div class="row">
	<div class="col-md-2">
		
	</div>
	<div class="col-md-8">
		<form action="{{route('admin.products.store')}}" method="POST"  enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<table width="100%" style="padding: 5px; margin: 5px;">
				<thead>
					<th colspan="2" style="text-align: center; color: red; font-weight: bold;">TẠO MỚI SẢN PHẨM</th>
				</thead>
				<tbody>
					<tr>
						<td width="20%">Tên sản phẩm: </td>
						<td width="80%">
							<input type="text" name="name" placeholder="Enter tên sản phẩm " style="width: 100%;">
						</td>
					</tr>
					<tr>
						<td width="20%">Nhà sản xuất: </td>
						<td width="80%">
							<select name="idProducer" id="producers" style="width: 100%;">
								@foreach($producers as $row)
								<option value="{{$row->id}}">{{$row->name}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td width="20%">Loại sản phẩm: </td>
						<td width="80%">
							<select name="idCatalog" id="idCatalogs" style="width: 100%;">
							</select>
						</td>
					</tr>
					<tr>
						<td width="20%">Chất lượng: </td>
						<td width="80%">
							<select name="idQuality" id="idQuality" style="width: 100%;">
								@foreach($qualities as $row)
								<option value="{{$row->id}}">{{$row->code}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td width="20%">Giới tính: </td>
						<td width="80%">
							<select name="idSex" id="idSex" style="width: 100%;">
								@foreach($sexes as $row)
								<option value="{{$row->id}}">{{$row->code}}</option>
								@endforeach
							</select>
						</td>
					</tr>
					<tr>
						<td width="20%">Giá: </td>
						<td width="80%">
							<input type="text" name="price" style="width: 100%;">
						</td>
					</tr>
					<tr>
						<td width="20%">Mô tả: </td>
						<td width="80%">
							<textarea name="detail" id="" cols="30" rows="5" style="width: 100%;"></textarea>
						</td>
					</tr>
					<tr>
						<td width="20%">Ảnh: </td>
						<td width="80%">
							<input type="file" name="imgProduct">
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
<script>
$(document).ready(function(){
 $('#producers').change(function(){
 	var idProducers = $(this).val();
	//alert(idProducers);
	$.get("http://localhost/xukashop/admin/products/ajax-catalog/"+idProducers, function(data){
				// lấy đữ liệu từ đường dẫn --> trả về trong data . 
					//alert(data);
					$("#idCatalogs").html(data);   // trả về data cho thẻ id = Loaitin
	});

 });
});
</script>

@stop