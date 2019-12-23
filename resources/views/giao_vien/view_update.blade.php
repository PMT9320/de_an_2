@extends('layer.master')

@section('body')
<body>
<a href="{{ route('giao_vien.view_all') }}">BACK</a>
<form action="{{ route('giao_vien.process_update',['ma_giao_vien' => $each->ma_giao_vien]) }}" method="post">
	{{csrf_field()}}
	Tên giáo viên
	<input type="text" name="ten_giao_vien" value="{{$each->ten_giao_vien}}">
	<br>
	Giới tính
	<input type="boolean" name="gioi_tinh" value="{{$each->gioi_tinh}}">
	<br>
	Tuổi
	<input type="text" name="tuoi" value="{{$each->tuoi}}">
	<br>
	Email
	<input type="text" name="email" value="{{$each->email}}">
	<br>
	Mật khẩu
	<input type="password" name="mat_khau" value="{{$each->mat_khau}}">
	<br>
	Sđt
	<input type="number" name="sdt" value="{{$each->sdt}}">
	<br>
	Địa chỉ
	<input type="text" name="dia_chi" value="{{$each->dia_chi}}">
	<br>
	<button>Sửa</button>
</form>
@endsection