<?php 

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Model\GiaoVuModel;
use Illuminate\Http\Request;
use session;

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
	function view_one(){
		$ma_giao_vu = $rq->session()->get('ma_giao_vu');
		$each = GiaoVuModel::get_one($ma_giao_vu);

		return view('giao_vu.view_chi_tiet_giao_vu',compact('each'));
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

	public function login()
    {
    	return view('login');
    }
	public function process_login(Request $rq)
    {
		$giao_vu = new GiaoVuModel();
		$giao_vu->email = $rq->get('email');
		$giao_vu->mat_khau = $rq->get('mat_khau');
		$array = $giao_vu->get_one_check_login();

		if(count($array)==1){
			$rq->session()->put('ma_giao_vu',$array[0]->ma_giao_vu);
			$rq->session()->put('ten_giao_vu',$array[0]->ten_giao_vu);
			$rq->session()->put('cap_do',0);

			return redirect()->route('giao_vu.view_all');
		}
		else{
			return redirect()->route('view_login')->with('error','Sai tên đăng nhập hoặc tài khoản');
		}
    }
    public function logout(Request $rq)
    {
    	$rq->session()->flush();
		return redirect()->route('view_login')->with('success','Đăng xuất thành công');
    }}