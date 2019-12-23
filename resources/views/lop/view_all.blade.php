@extends('layer.master')

@section('body')
<body>
<a href="{{ route('lop.view_insert') }}">
	Thêm
</a>
<table border="1" width="100%">
	<tr>
		<th>Mã lớp</th>
		<th>Tên lớp</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>
	@foreach ($array as $each)
		<tr>
			<td>{{$each->ma_lop}}</td>
			<td>{{$each->ten_lop}}</td>
			<td>
				<a href="{{ route('lop.view_update',['ma_lop' => $each->ma_lop]) }}">
					Sửa
				</a>
			</td>
			<td>
				<a href="{{ route('lop.delete',['ma_lop' => $each->ma_lop]) }}">
					Xoá
				</a>
			</td>
		</tr>
	@endforeach
</table>
@endsection