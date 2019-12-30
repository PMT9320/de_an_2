@extends('layer.master')

@section('body')
<body>
<a href="{{ route('sinh_vien.view_all') }}">BACK</a>
<form action="{{ route('sinh_vien.process_update',['ma_sinh_vien' => $each->ma_sinh_vien]) }}" method="post">
	{{csrf_field()}}
	Tên 
	<input type="text" name="ten" value="{{$each->ten}}">
	<br>
	Tuổi
	<input type="text" name="tuoi" value="{{$each->tuoi}}">
	<br>
	Giới tính
	<input type="boolean" name="gioi_tinh" value="{{$each->gioi_tinh}}">
	<br>
	Mã lớp
	<input type="int" name="ma_lop" value="{{$each->ma_lop}}">
	<br>
	<button>Sửa</button>
</form>
@endsection