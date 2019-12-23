@extends('layer.master')

@section('body')
<body>
<a href="{{ route('mon_hoc.view_all') }}">BACK</a>
<form action="{{ route('mon_hoc.process_update',['ma_mon_hoc' => $each->ma_mon_hoc]) }}" method="post">
	{{csrf_field()}}
	Tên môn học
	<input type="text" name="ten_mon_hoc" value="{{$each->ten_mon_hoc}}">
	<br>
	<button>Sửa</button>
</form>
@endsection