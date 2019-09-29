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

Auth::routes();

//backend
Route::get('/admin', 'HomeController@index')->name('adminDahsboard');

Route::get('/admin/create', 'DataTarian@create')->name('createInformasi');
Route::post('/admin/create', 'DataTarian@store')->name('storeInformasi');
Route::get('/admin/index', 'DataTarian@index')->name('indexInformasi');
Route::get('/admin/show/{id_tarian}', 'DataTarian@show')->name('showInformasi');
Route::get('/admin/destroy/{id_informasi}', 'DataTarian@destroy')->name('destroyInformasi');
Route::post('/admin/show/', 'DataTarian@update')->name('updateInformasi');

//frontend
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/', 'FrontendController@home')->name('home');
Route::get('/frontend/contact', 'FrontendController@contact')->name('contact');
Route::get('/dance/list', 'FrontendController@tarian')->name('tarian');
Route::get('/dance/provinsi', 'FrontendController@provinsi')->name('provinsi');
Route::get('/frontend/show/{id_tarian}', 'FrontendController@show')->name('showData');
Route::get('/frontend/shows/{provinsi}', 'FrontendController@shows1');
Route::get('/frontend/shows2/{provinsi}', 'FrontendController@shows2');
Route::get('/frontend/shows3/{provinsi}', 'FrontendController@shows3');
Route::get('/frontend/shows4/{provinsi}', 'FrontendController@shows4');
Route::get('/frontend/shows5/{provinsi}', 'FrontendController@shows5');
Route::get('/frontend/shows6/{provinsi}', 'FrontendController@shows6');
Route::get('/frontend/shows7/{provinsi}', 'FrontendController@shows7');
Route::get('/frontend/shows8/{provinsi}', 'FrontendController@shows8');