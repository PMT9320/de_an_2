<?php  
Route::group(['middleware' => 'CheckGiaoVu'],function(){
	Route::group(['prefix' => 'giao_vu', 'as' => 'giao_vu.'],function(){
		Route::get('','GiaoVuController@view_all')->name('view_all');
		Route::get('view_one','GiaoVuController@view_one')->name('view_one');
		Route::get('view_insert','GiaoVuController@view_insert')->name('view_insert');
		Route::post('process_insert','GiaoVuController@process_insert')->name('process_insert');

		Route::get('view_update/{ma_giao_vu}','GiaoVuController@view_update')->name('view_update');
		Route::post('process_update/{ma_giao_vu}','GiaoVuController@process_update')->name('process_update');
	});
	Route::group(['prefix' => 'lop', 'as' => 'lop.'],function(){
		Route::get('','LopController@view_all')->name('view_all');
		Route::get('view_insert','LopController@view_insert')->name('view_insert');
		Route::post('process_insert','LopController@process_insert')->name('process_insert');

		Route::get('view_update/{ma_lop}','LopController@view_update')->name('view_update');
		Route::post('process_update/{ma_lop}','LopController@process_update')->name('process_update');
		Route::get('delete/{ma_lop}','LopController@delete')->name('delete');
	});
	Route::group(['prefix' => 'mon_hoc', 'as' => 'mon_hoc.'],function(){
		Route::get('','MonHocController@view_all')->name('view_all');
		Route::get('view_insert','MonHocController@view_insert')->name('view_insert');
		Route::post('process_insert','MonHocController@process_insert')->name('process_insert');

		Route::get('view_update/{ma_mon_hoc}','MonHocController@view_update')->name('view_update');
		Route::post('process_update/{ma_mon_hoc}','MonHocController@process_update')->name('process_update');
		Route::get('delete/{ma_mon_hoc}','MonHocController@delete')->name('delete');
	});
	Route::group(['prefix' => 'giao_vien', 'as' => 'giao_vien.'],function(){
		Route::get('','GiaoVienController@view_all')->name('view_all');
		Route::get('view_insert','GiaoVienController@view_insert')->name('view_insert');
		Route::post('process_insert','GiaoVienController@process_insert')->name('process_insert');

		Route::get('view_update/{ma_giao_vien}','GiaoVienController@view_update')->name('view_update');
		Route::post('process_update/{ma_giao_vien}','GiaoVienController@process_update')->name('process_update');
		Route::get('delete/{ma_giao_vien}','GiaoVienController@delete')->name('delete');
	});
});
Route::get('login','GiaoVuController@login')->name('view_login');
Route::post('process_login','GiaoVuController@process_login')->name('process_login');

Route::get('logout','GiaoVuController@logout')->name('logout');