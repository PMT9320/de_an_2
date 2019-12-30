@extends('layer.master')

@section('body')
<a href="{{ route('giao_vien.view_insert') }}">
	Thêm
</a>
<table border="1" width="100%">
	<tr>
		<th>Tên giáo viên</th>
		<th>Giới tính</th>
		<th>Tuổi</th>
		<th>Email</th>
		<th>Sđt</th>
		<th>Địa chỉ</th>
		<th>Sửa</th>
	</tr>
	@foreach ($array as $each)
		<tr>
			<td>{{$each->ten_giao_vien}}</td>
			<td>
				@if ($each->gioi_tinh==1)
					Nam
				@else
					Nu
				@endif
			</td>
			<td>{{$each->tuoi}}</td>
			<td>{{$each->email}}</td>
			<td>{{$each->sdt}}</td>
			<td>{{$each->dia_chi}}</td>
			<td>
				<a href="{{ route('giao_vien.view_update',['ma_giao_vien' => $each->ma_giao_vien]) }}">
					Sửa
				</a>
			</td>
		</tr>
	@endforeach
</table>
@endsection