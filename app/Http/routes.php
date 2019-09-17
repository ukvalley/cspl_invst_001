<?php

Route::group(['middleware'=>['api']],function()
{

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


	/* -------------------------------------------------------------------------------------
	 Admin Routes Group :: Main group all route of admin will in this Group 
	---------------------------------------------------------------------------------------*/


	/*-------------------------------------------
		Admin Route starts Here
	--------------------------------------------*/



	
	
		Route::get('/profile_creator_new',						['as'=>'profile_creator_new',					'uses'=>'Admin\AdminController@profile_creator_new']);


	Route::post('/new_profile_creator',						['as'=>'new_profile_creator',					'uses'=>'Admin\AdminController@new_profile_creator']);

	Route::get('/export',						['as'=>'export',					'uses'=>'Admin\AdminController@export']);
Route::get('/importExportView',						['as'=>'importExportView',					'uses'=>'Admin\AdminController@importExportView']);
Route::post('/import',						['as'=>'import',					'uses'=>'Admin\AdminController@import']);


  
});


