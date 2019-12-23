<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('lop.process_update',['ma_lop' => $each->ma_lop]) }}" method="post">
	{{csrf_field()}}
	Tên lớp
	<input type="text" name="ten_lop" value="{{$each->ten_lop}}">
	<br>
	<button>Sửa</button>
</form>
</body>
</html>