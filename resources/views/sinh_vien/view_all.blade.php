@extends('layer.master')

@section('body')
<a href="{{ route('sinh_vien.view_insert') }}">
	Thêm
</a>
<table border="1" width="100%">
	<tr>
		<th>Mã sinh viên</th>
		<th>Tên</th>
		<th>Tuổi</th>
		<th>Giới tính</th>
		<th>Mã lớp</th>
		<th>Sửa</th>
	</tr>
	@foreach ($array as $each)
		<tr>
			<td>{{$each->ma_sinh_vien}}</td>
			<td>{{$each->ten}}</td>
			<td>{{$each->tuoi}}</td>
			<td>
				@if ($each->gioi_tinh==1)
					Nam
				@else
					Nu
				@endif
			</td>
			</td>
			<td>{{$each->ma_lop}}</td>
			<td>
				<a href="{{ route('sinh_vien.view_update',['ma_sinh_vien' => $each->ma_sinh_vien]) }}">
					Sửa
				</a>
			</td>
		</tr>
	@endforeach
</table>
@endsection