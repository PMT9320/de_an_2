@extends('layer.master')

@section('body')
<body>
<a href="{{ route('giao_vien.view_all') }}">BACK</a>
<form action="{{ route('giao_vien.process_insert') }}" method="post">
	{{csrf_field()}}
	Tên giáo viên
	<input type="text" name="ten_giao_vien">
	<br>
	Giới tính
	<input type="radio" name="gioi_tinh" value="1" checked="">Nữ
	<input type="radio" name="gioi_tinh" value="0">Nam
	<br>
	Tuổi
	<input type="text" name="tuoi">
	<br>
	Email
	<input type="text" name="email">
	<br>
	Mật khẩu
	<input type="password" name="mat_khau">
	<br>
	Sđt
	<input type="number" name="sdt">
	<br>
	Địa chỉ
	<input type="text" name="dia_chi">
	<br>
	<button>Thêm</button>
</form>
@endsection