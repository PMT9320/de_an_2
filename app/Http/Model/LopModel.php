<?php 

namespace App\Http\Model;

use DB;

class LopModel
{
	public $ma_lop;
	public $ten_lop;
	static function get_all(){
		$array = DB::select('select * from lop');
		return $array;
	}
	public function insert(){
		DB::insert("insert into lop(ten_lop) values (?)",[
			$this->ten_lop
		]);
	}
	static function get_one($ma_lop){
		$array = DB::select('select * from lop where ma_lop = ?',[
			$ma_lop
		]);
		return $array[0];
	}
	public function update()
	{
		DB::update("update lop set ten_lop = ? where ma_lop = ?",[
			$this->ten_lop,
			$this->ma_lop
		]);
	}
	static function delete($ma_lop){
		DB::delete("delete from lop where ma_lop = ?",[
			$ma_lop
		]);
	}
}