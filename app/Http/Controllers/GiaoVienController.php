<?php 

namespace App\Http\Controllers;

use App\Http\Model\GiaoVienModel;
use Illuminate\Http\Request;

class GiaoVienController
{
	function view_all(){
		$array = GiaoVienModel::get_all();

		return view('giao_vien.view_all',compact('array'));
	}
	function view_insert(){
		return view('giao_vien.view_insert');
	}
	function process_insert(Request $rq){
		$giao_vien = new GiaoVienModel();
		$giao_vien->ten_giao_vien = $rq->get('ten_giao_vien');
		$giao_vien->gioi_tinh = $rq->get('gioi_tinh');
		$giao_vien->tuoi = $rq->get('tuoi');
		$giao_vien->email = $rq->get('email');
		$giao_vien->mat_khau = $rq->get('mat_khau');
		$giao_vien->sdt = $rq->get('sdt');
		$giao_vien->dia_chi = $rq->get('dia_chi');
		$giao_vien->insert();

		 return redirect()->route("giao_vien.view_all");
	}
	function view_update($ma_giao_vien)
	{
		$each = GiaoVienModel::get_one($ma_giao_vien);

		return view('giao_vien.view_update',compact('each'));
	}
	function process_update($ma_giao_vien, Request $rq)
	{
		$giao_vien = new GiaoVienModel();
		$giao_vien->ma_giao_vien = $ma_giao_vien;
		$giao_vien->ten_giao_vien = $rq->get('ten_giao_vien');
		$giao_vien->gioi_tinh = $rq->get('gioi_tinh');
		$giao_vien->tuoi = $rq->get('tuoi');
		$giao_vien->email = $rq->get('email');
		$giao_vien->mat_khau = $rq->get('mat_khau');
		$giao_vien->sdt = $rq->get('sdt');
		$giao_vien->dia_chi = $rq->get('dia_chi');
		$giao_vien->update();

		return redirect()->route("giao_vien.view_all");
	}
	static function ten_gioi_tinh()
	{
		if($gioi_tinh==0){
			return "Nam";
		}
		else{
			return "Nu";
		}
	}
	function test()
	{
		return view('layer.master');
	}
}