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
    return view('welcome');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});


Route::get('/enregistrer','ProfileController@enregistrer');
Route::get('/listprofil','ProfileController@listprofil');
Route::post('/edit/{id}','ProfileController@edit')->name('edit');
Route::put('/update/{id}','ProfileController@update')->name('update');
Route::put('/update/{id}','UserController@update')->name('update');
Route::put('/update_photo/{id}','UserController@update_photo')->name('update_photo');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
