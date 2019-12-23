<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('lop.process_insert') }}" method="post">
	{{csrf_field()}}
	Tên lớp
	<input type="text" name="ten_lop">
	<br>
	<button>Thêm</button>
</form>
</body>
</html>