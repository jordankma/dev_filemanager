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

Route::get('/', function () {
    return view('welcome');
});
// Route::group(['prefix' => 'laravel-filemanager'], function () {
//      \UniSharp\LaravelFilemanager\Lfm::routes();
//  });
Route::get('/fm', function () {
    return view('fm');
});
Route::get('login2', function () {
    dd(Auth::attempt(['email' => 'tuan@gmail.com','password' => '123456']));
});
// Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\controllers\LfmController@show');
// Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\controllers\UploadController@upload');
Route::group(['prefix' => 'laravel-filemanager'], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
