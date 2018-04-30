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

// Route::get('/cobaweb', function() {
//     return view('webtb.pages_operator.index');
// });


// Route::get('/', 'BlogController@index');
// Route::get('/coba2', 'BlogController@index2');
// Route::get('/calendar', 'BlogController@calendar');
// Route::get('/widgets', 'BlogController@widgets');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/perpus','WebperpusController');
Route::resource('/coba','web2Controller');
Route::resource('/coba2','tabelController');