<?php 

namespace App\Http\Model;

use DB;

class AdminModel
{
	public $ma;
	public $ten;
	public $email;
	public $mat_khau;
	public function get_one(){
		$array = DB::select('select * from admin where email = ? and mat_khau = ?',[
			$this->email,
			$this->mat_khau
		]);
		return $array;
	}
}