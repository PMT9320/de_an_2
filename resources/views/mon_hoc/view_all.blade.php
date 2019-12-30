@extends('layer.master')
@section('body')<a href="{{ route('mon_hoc.view_insert') }}">
	Thêm
</a>
<table border="1" width="100%">
	<tr>
		<th>Mã môn học</th>
		<th>Tên môn học</th>
		<th>Sửa</th>
		<th>Xoá</th>
	</tr>
	@foreach ($array as $each)
		<tr>
			<td>{{$each->ma_mon_hoc}}</td>
			<td>{{$each->ten_mon_hoc}}</td>
			<td>
				<a href="{{ route('mon_hoc.view_update',['ma_mon_hoc' => $each->ma_mon_hoc]) }}">
					Sửa
				</a>
			</td>
			<td>
				<a href="{{ route('mon_hoc.delete',['ma_mon_hoc' => $each->ma_mon_hoc]) }}">
					Xoá
				</a>
			</td>
		</tr>
	@endforeach
</table>
@endsection