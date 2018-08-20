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


Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware','auth'], function(){



Route::get('/create_conf', 'admin\AdminController@create_confirmation')->name('create-confirmations');
Route::get('/confirmations','admin\AdminController@lister_confirmations')->name('list-all-confirmations');
Route::get('/conf-details/{id}','admin\AdminController@conf_details')->name('conf-details');
Route::get('/delete_conf/{id}','admin\AdminController@delete_booking')->name('delete_booking');
Route::get('/generatepdf/{id}','admin\AdminController@generate_pdf')->name('generate_pdf');
Route::get('/generatepdfvoucher/{id}','admin\AdminController@generate_pdf_voucher')->name('generate_pdf_voucher');
Route::get('create-voucher/{id}', 'admin\AdminController@create_voucher')->name('create_voucher');

Route::post('/validate_confirmation', 'admin\AdminController@validate_confirmation')->name('validate_confirmation');
Route::post('/save_voucher','admin\AdminController@save_voucher')->name('save_voucher');



Route::get('/clone-conf/{id}','admin\AdminController@clone_conf')->name('clone-conf');


});





Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});


