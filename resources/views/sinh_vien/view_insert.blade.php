@extends('layer.master')

@section('body')
<body>
<a href="{{ route('sinh_vien.view_all') }}">BACK</a>
<form action="{{ route('sinh_vien.process_insert') }}" method="post">
	{{csrf_field()}}
	Tên 
	<input type="text" name="ten">
	<br>
	Tuổi
	<input type="text" name="tuoi">
	<br>
	Giới tính
	<input type="radio" name="gioi_tinh" value="1" checked="">Nữ
	<input type="radio" name="gioi_tinh" value="0">Nam
	<br>
	Mã lớp
	<input type="number" name="ma_lop">
	<br>
	<button>Thêm</button>
</form>
@endsection