<?php 



Route::get('/',function()
{
	return view('welcome');

});


Route::group(['prefix' => 'admin'],function){

	Route::resource('users','UsersController')
});


