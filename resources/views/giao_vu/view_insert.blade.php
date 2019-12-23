<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('giao_vu.process_insert') }}" method="post">
	{{csrf_field()}}
	Tên giáo vụ
	<input type="text" name="ten_giao_vu">
	<br>
	Giới tính
	<input type="radio" name="gioi_tinh" value="1">Nữ
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
</body>
</html>