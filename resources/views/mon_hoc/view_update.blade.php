<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{ route('mon_hoc.process_update',['ma_mon_hoc' => $each->ma_mon_hoc]) }}" method="post">
	{{csrf_field()}}
	Tên môn học
	<input type="text" name="ten_mon_hoc" value="{{$each->ten_mon_hoc}}">
	<br>
	<button>Sửa</button>
</form>
</body>
</html>