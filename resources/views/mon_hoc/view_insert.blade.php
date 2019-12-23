<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('mon_hoc.process_insert') }}" method="post">
	{{csrf_field()}}
	Tên môn học
	<input type="text" name="ten_mon_hoc">
	<br>
	<button>Thêm</button>
</form>
</body>
</html>