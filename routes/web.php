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

Route::group(['middleware' => 'prevent-back-history'], function () {

    Route::get('/', 'App\Http\Controllers\ContentController@home')->name('home');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

});

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/page1', function () {
    return view('registration.page1');
});
Route::get('/page2', function () {
    return view('registration.page2');
});
Route::get('/page3', function () {
    return view('registration.page3');
});

