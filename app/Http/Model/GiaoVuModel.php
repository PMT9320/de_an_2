<?php 

namespace App\Http\Model;

use DB;

class GiaoVuModel
{
	public $ma_giao_vu;
	public $ten_giao_vu;
	public $gioi_tinh;
	public $tuoi;
	public $email;
	public $mat_khau;
	public $sdt;
	public $dia_chi;
	static function get_all(){
		$array = DB::select('select * from giao_vu');
		return $array;
	}
	public function insert(){
		DB::insert("insert into giao_vu(ten_giao_vu,gioi_tinh,tuoi,eamil,mat_khau,sdt,dia_chi) values (?,?,?,?,?,?,?)",[
			$this->ten_giao_vu,
			$this->gioi_tinh,
			$this->tuoi,
			$this->email,
			$this->mat_khau,
			$this->sdt,
			$this->dia_chi
		]);
	}
	static function get_one($ma_giao_vu){
		$array = DB::select('select * from giao_vu where ma_giao_vu = ?',[
			$ma_giao_vu
		]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update giao_vu set ten_giao_vu = ? where ma_giao_vu = ?",[
			$this->ten_giao_vu,
			$this->ma_giao_vu,
			$this->gioi_tinh,
			$this->tuoi,
			$this->email,
			$this->mat_khau,
			$this->sdt,
			$this->dia_chi
		]);
	}
}