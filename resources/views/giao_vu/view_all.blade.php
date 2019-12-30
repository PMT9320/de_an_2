@extends('layer.master')

@section('body')

<a href="{{ route('giao_vu.view_insert') }}">
	Thêm
</a>
<table border="1" width="100%">
	<tr>
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
			<td>{{$each->ten_giao_vu}}</td>
			<td>{{$each->gioi_tinh}}</td>
			<td>{{$each->tuoi}}</td>
			<td>{{$each->email}}</td>
			<td>{{$each->mat_khau}}</td>
			<td>{{$each->sdt}}</td>
			<td>{{$each->dia_chi}}</td>
		</tr>
	@endforeach
</table>
@endsection