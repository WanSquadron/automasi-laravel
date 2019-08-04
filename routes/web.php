<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

### Global access routes
Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/e-bilik', function () {
    return view('pages.coming-soon');
});

Route::get('/e-agenda', function () {
    return view('pages.coming-soon');
});

Route::get('/e-dokumen', function () {
    return view('pages.coming-soon');
});

Route::get('/home', 'HomeController@index')->name('home');

#-------------------------------------------------------------------------------------------------------------------

### Middleware Group for user
Route::group(['middleware' => ['role:user']], function()
{
	# E-Aduan Module
		## GET Routes
		Route::get('/e-aduan/success-page/{stat}','AduanController@SenaraiAduan');
		Route::get('/e-aduan', 'AduanController@SenaraiAduan');
		Route::get('/e-aduan/baru', 'AduanController@FormAduan');
		Route::get('/e-aduan/view/{idaduan}', 'AduanController@ViewAduan');
		Route::get('/e-aduan/view/{idaduan}/{stat}', 'AduanController@ViewAduan');

		## POST Routes
		Route::post('/e-aduan/simpan', 'AduanController@SaveAduan');
		Route::post('/e-aduan/view/sah', 'AduanController@SahAduanSelesai');
	# End of E-Aduan Module

});

#-------------------------------------------------------------------------------------------------------------------

###Middleware Group for admin

Route::group(['middleware' => ['role:admin']], function()
{
	# E-Aduan Module
		## GET Routes
		Route::get('/admin/e-aduan', 'AdminController@SenaraiAduan');
		Route::get('/e-aduan/admin/view/{idaduan}', 'AdminController@ViewAduan');

});



