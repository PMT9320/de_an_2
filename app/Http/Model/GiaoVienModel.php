<?php 

namespace App\Http\Model;

use DB;

class GiaoVienModel
{
	public $ma_giao_vien;
	public $ten_giao_vien;
	public $gioi_tinh;
	public $tuoi;
	public $email;
	public $mat_khau;
	public $sdt;
	public $dia_chi;
	static function get_all(){
		$array = DB::select('select * from giao_vien');
		return $array;
	}
	public function insert(){
		DB::insert("insert into giao_vien(ten_giao_vien,gioi_tinh,tuoi,eamil,mat_khau,sdt,dia_chi) values (?,?,?,?,?,?,?)",[
			$this->ten_giao_vien,
			$this->gioi_tinh,
			$this->tuoi,
			$this->email,
			$this->mat_khau,
			$this->sdt,
			$this->dia_chi
		]);
	}
	static function get_one($ma_giao_vien){
		$array = DB::select('select * from giao_vien where ma_giao_vien = ?',[
			$ma_giao_vien
		]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update giao_vien set 
			ten_giao_vien = ?,
			gioi_tinh = ?,
			tuoi = ?,
			email = ?,
			mat_khau = ?,
			sdt = ?,
			dia_chi = ?
			where ma_giao_vien = ?",[
			$this->ten_giao_vien,
			$this->gioi_tinh,
			$this->tuoi,
			$this->email,
			$this->mat_khau,
			$this->sdt,
			$this->dia_chi,
			$this->ma_giao_vien
		]);
	}
}