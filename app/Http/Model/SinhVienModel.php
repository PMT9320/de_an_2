<?php 

namespace App\Http\Model;

use DB;

class SinhVienModel
{
	public $ma_sinh_vien;
	public $ten;
	public $tuoi;
	public $gioi_tinh;
	public $ma_lop;
	
	static function get_all(){
		$array = DB::select('select * from sinh_vien');
		return $array;
	}
	public function insert(){
		DB::insert("insert into sinh_vien(ten,tuoi,gioi_tinh,ma_lop) values (?,?,?,?)",[
			$this->ten,
			$this->tuoi,
			$this->gioi_tinh,
			$this->ma_lop
		]);
	}
	static function get_one($ma_sinh_vien){
		$array = DB::select('select * from sinh_vien where ma_sinh_vien = ?',[
			$ma_sinh_vien
		]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update sinh_vien set 
			ten = ?,
			tuoi= ?,
			gioi_tinh=?,
			ma_lop= ?
			where ma_sinh_vien =?",[
			$this->ten,
			$this->tuoi,
			$this->gioi_tinh,
			$this->ma_lop,
			$this->ma_sinh_vien
		]);
	}
	
}