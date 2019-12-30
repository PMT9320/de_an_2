<?php 

namespace App\Http\Controllers;

use App\Http\Model\MonHocModel;
use Illuminate\Http\Request;

class MonHocController
{
	function view_all(){
		$array = MonHocModel::get_all();

		return view('mon_hoc.view_all',compact('array'));
	}
	function view_insert(){
		return view('mon_hoc.view_insert');
	}
	function process_insert(Request $rq){
		$mon_hoc = new MonHocModel();
		$mon_hoc->ten_mon_hoc = $rq->get('ten_mon_hoc');
		$mon_hoc->insert();

		 return redirect()->route("mon_hoc.view_all");
	}
	function view_update($ma_mon_hoc)
	{
		$each = MonHocModel::get_one($ma_mon_hoc);

		return view('mon_hoc.view_update',compact('each'));
	}
	function process_update($ma_mon_hoc, Request $rq)
	{
		$mon_hoc = new MonHocModel();
		$mon_hoc->ma_mon_hoc = $ma_mon_hoc;
		$mon_hoc->ten_mon_hoc = $rq->get('ten_mon_hoc');
		$mon_hoc->update();

		return redirect()->route("mon_hoc.view_all");
	}
	
}