<?php 

namespace App\Http\Controllers;

use App\Http\Model\SinhVienModel;
use Illuminate\Http\Request;

class SinhVienController
{
	function view_all(){
		$array = SinhVienModel::get_all();

		return view('sinh_vien.view_all',compact('array'));
	}
	function view_insert(){
		return view('sinh_vien.view_insert');
	}
	function process_insert(Request $rq){
		$sinh_vien = new SinhVienModel();
		$sinh_vien->ten = $rq->get('ten');
		$sinh_vien->tuoi = $rq->get('tuoi');
		$sinh_vien->gioi_tinh = $rq->get('gioi_tinh');
		$sinh_vien->ma_lop = $rq->get('ma_lop');
		$sinh_vien->insert();

		 return redirect()->route("sinh_vien.view_all");
	}
	function view_update($ma_sinh_vien)
	{
		$each = SinhVienModel::get_one($ma_sinh_vien);

		return view('sinh_vien.view_update',compact('each'));
	}
	function process_update($ma_sinh_vien, Request $rq)
	{
		$sinh_vien = new SinhVienModel();
		$sinh_vien->ma_sinh_vien = $ma_sinh_vien;
		$sinh_vien->ten = $rq->get('ten');
		$sinh_vien->tuoi = $rq->get('tuoi');
		$sinh_vien->gioi_tinh = $rq->get('gioi_tinh');
		$sinh_vien->ma_lop = $rq->get('ma_lop');
		$sinh_vien->update();

		return redirect()->route("sinh_vien.view_all");
	}
	
}