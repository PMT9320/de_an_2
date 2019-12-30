@extends('layer.master')

@section('body')
	<title></title>
</head>
<body>
<a href="{{ route('mon_hoc.view_all') }}">BACK</a>
<form action="{{ route('mon_hoc.process_insert') }}" method="post">
	{{csrf_field()}}
	Tên môn học
	<input type="text" name="ten_mon_hoc">
	<br>
	<button>Thêm</button>
</form>
@endsection