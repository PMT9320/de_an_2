@extends('layer.master')
@section('body')
<a href="{{ route('giao_vu.view_insert') }}">
	Thêm
</a>
<table border="1" width="100%">
	<tr>
		<th>Mã giáo vụ</th>
		<th>Tên giáo vụ</th>
		<th>Giới tính</th>
		<th>Tuổi</th>
		<th>Email</th>
		<th>Mật khẩu</th>
		<th>Sđt</th>
		<th>Địa chỉ</th>
	</tr>
	@foreach ($array as $each)
		<tr>
			<td>{{$each->ma_giao_vu}}</td>
			<td>{{$each->ten_giao_vu}}</td>
			<td>{{$each->gioi_tinh}}</td>
			<td>{{$each->tuoi}}</td>
			<td>{{$each->email}}</td>
			<td>{{$each->mat_khau}}</td>
			<td>{{$each->sdt}}</td>
			<td>{{$each->dia_chi}}</td>
			<td>
				<a href="{{ route('giao_vu.view_update',['ma_giao_vu' => $each->ma_giao_vu]) }}">
					Sửa
				</a>
			</td>
		</tr>
	@endforeach
</table>
@endsection
