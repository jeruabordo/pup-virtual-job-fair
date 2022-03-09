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

    Route::get('/', [App\Http\Controllers\ContentController::class, 'home'])->name('home');

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

});

// Test Views

// Route::get('/routename', function () { //type localhost:8001/routename on your browser
//     return view('view.path'); //use "." instead of "/"
// });

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/editstudentprofile', function () {
    return view('dashboard.editstudentprofile');
});

Route::get('/viewstudentprofile', function () {
    return view('dashboard.viewstudentprofile');
});

Route::get('/page0', function () {
    return view('registration.page0');
});

Route::get('/page1', function () {
    return view('registration.page1');
});

Route::get('/page2', function () {
    return view('registration.page2');
});

Route::get('/page3', function () {
    return view('registration.page3');
});

Route::get('/page4', function () {
    return view('registration.page4');
});

Route::get('/page5', function () {
    return view('registration.page5');
});

Route::get('/page6', function () {
    return view('registration.page6');
});

Route::get('/page7', function () {
    return view('registration.page7');
});

Route::get('/page8', function () {
    return view('registration.page8');
});

Route::get('/loginpage', function () {
    return view('layouts.loginpage');
});

Route::get('/companyprofile', function () {
    return view('layouts.company.companyprofileOne');
});
