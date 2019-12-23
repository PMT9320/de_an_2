<?php 

namespace App\Http\Controllers;

use App\Http\Model\LopModel;
use Illuminate\Http\Request;

class LopController
{
	function view_all(){
		$array = LopModel::get_all();

		return view('lop.view_all',compact('array'));
	}
	function view_insert(){
		return view('lop.view_insert');
	}
	function process_insert(Request $rq){
		$lop = new LopModel();
		$lop->ten_lop = $rq->get('ten_lop');
		$lop->insert();

		 return redirect()->route("lop.view_all");
	}
	function view_update($ma_lop)
	{
		$each = LopModel::get_one($ma_lop);

		return view('lop.view_update',compact('each'));
	}
	function process_update($ma_lop, Request $rq)
	{
		$lop = new LopModel();
		$lop->ma_lop = $ma_lop;
		$lop->ten_lop = $rq->get('ten_lop');
		$lop->update();

		return redirect()->route("lop.view_all");
	}
	function delete($ma_lop){
		LopModel::delete($ma_lop);

		 return redirect()->route("lop.view_all");
	}
}