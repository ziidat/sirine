<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('login');
});

Auth::routes();
//** Route Login */
Route::get('/home', 'DashboardController@index')->name('home');
Route::get('admin/home', 'DashboardController@adminHome')->name('admin.home')->middleware('privillege');

//**Route Group */
Route::group(['middleware' => 'auth'], function () {


    //** Route Profile & Password */
    Route::resource('Profile','ProfileController');
    Route::get('editpassword', ['as' => 'user.edit_password', 'uses' => 'ProfileController@edit_password']);
    Route::put('editpassword', ['as' => 'user.password', 'uses' => 'ProfileController@password']);

    //** Route Andon */
    Route::get('andon','Andon\PikaiController@index');
    Route::get('andon_verifikasi','Andon\PikaiController@verifikasi');
    Route::get('andon_cetak','Andon\PikaiController@cetak');
    Route::get('andon_khazkhir','Andon\PikaiController@khazkhir');

    //** Route Menu Sidebar */
    Route::resource('defect','DefectController');                       //** Controller Untuk Kelolosan */
    Route::get('stat-defect','DefectController@stat_defect');
    Route::resource('data-verifikasi','Admin\VerifikasiController');    //** Controller Untuk Data Verifikasi*/
    Route::resource('input-verifikasi', 'Admin\InputHvhController');    //** Controller Untuk Input Data Verifikasi*/
    Route::resource('manage-user', 'Admin\ManageuserController');       //** Controller Untuk Manage & Buat User*/
    Route::resource('input-defect', 'InputDefectController');           //** Controller Untuk Input Kelolosan*/
    Route::resource('performance', 'PerformanceController');            //** Controller Untuk Statistik Performa Kinerja*/
    Route::get('verif-ind', 'PerformanceController@chart');
    Route::get('info-retur','EvaluationController@info');
    Route::resource('evaluasi', 'EvaluationController');                //** Controller Untuk Membuat Pesan Evaluasi*/
    
    
});

