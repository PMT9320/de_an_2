@extends('layer.master')

@section('body')
<body>
<a href="{{ route('lop.view_all') }}">BACK</a>
<form action="{{ route('lop.process_insert') }}" method="post">
	{{csrf_field()}}
	Tên lớp
	<input type="text" name="ten_lop">
	<br>
	<button>Thêm</button>
</form>
@endsection