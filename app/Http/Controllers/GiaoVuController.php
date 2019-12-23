<?php 

namespace App\Http\Controllers;

use App\Http\Model\GiaoVuModel;
use Illuminate\Http\Request;

class GiaoVuController
{
	function view_all(){
		$array = GiaoVuModel::get_all();

		return view('giao_vu.view_all',compact('array'));
	}
	function view_insert(){
		return view('giao_vu.view_insert');
	}
	function process_insert(Request $rq){
		$giao_vu = new GiaoVuModel();
		$giao_vu->ten_giao_vu = $rq->get('ten_giao_vu');
		$giao_vu->gioi_tinh = $rq->get('gioi_tinh');
		$giao_vu->tuoi = $rq->get('tuoi');
		$giao_vu->email = $rq->get('email');
		$giao_vu->mat_khau = $rq->get('mat_khau');
		$giao_vu->sdt = $rq->get('sdt');
		$giao_vu->dia_chi = $rq->get('dia_chi');
		$giao_vu->insert();

		 return redirect()->route("giao_vu.view_all");
	}
	function view_update($ma_giao_vu)
	{
		$each = GiaoVuModel::get_one($ma_giao_vu);

		return view('giao_vu.view_update',compact('each'));
	}
	function process_update($ma_giao_vu, Request $rq)
	{
		$giao_vu = new GiaoVuModel();
		$giao_vu->ma_giao_vu = $ma_giao_vu;
		$giao_vu->ten_giao_vu = $rq->get('ten_giao_vu');
		$giao_vu->gioi_tinh = $rq->get('gioi_tinh');
		$giao_vu->tuoi = $rq->get('tuoi');
		$giao_vu->email = $rq->get('email');
		$giao_vu->mat_khau = $rq->get('mat_khau');
		$giao_vu->sdt = $rq->get('sdt');
		$giao_vu->dia_chi = $rq->get('dia_chi');
		$giao_vu->update();

		return redirect()->route("giao_vu.view_all");
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
	
}