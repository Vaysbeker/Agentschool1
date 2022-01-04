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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Route::get('/admin/newagency', function () {
    return view('admin.newagency');
})->name('new-agency');
Route::get('/user/course1/lesson1', function () {
    return view('course.lesson1');
})->name('lesson1');

Route::post('/admin/agency/submit','AgencyController@submit' )->name('agency-contact-form');
Route::get('/admin/agency/agencies','AgencyController@allAgency' )->name('agency');
Route::get('/admin/agencies','AgencyController@index')->name('agency-all');

