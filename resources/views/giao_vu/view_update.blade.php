<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('giao_vu.process_update',['ma_giao_vu' => $each->ma_giao_vu]) }}" method="post">
	{{csrf_field()}}
	Tên giáo vụ
	<input type="text" name="ten_giao_vu" value="{{$each->ten_giao_vu}}">
	<br>
	Giới tính
	<input type="boolean" name="gioi_tinh" value="{{$each->gioi_tinh}}">
	<br>
	Tuổi
	<input type="text" name="tuoi" value="{{$each->tuoi}}">
	<br>
	Email
	<input type="text" name="eamil" value="{{$each->email}}">
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
</body>
</html>