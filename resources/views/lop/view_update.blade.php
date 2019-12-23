@extends('layer.master')

@section('body')
<body>
<a href="{{ route('lop.view_all') }}">BACK</a>
<form action="{{ route('lop.process_update',['ma_lop' => $each->ma_lop]) }}" method="post">
	{{csrf_field()}}
	Tên lớp
	<input type="text" name="ten_lop" value="{{$each->ten_lop}}">
	<br>
	<button>Sửa</button>
</form>
@endsection