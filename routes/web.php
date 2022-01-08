<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;


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
    Route::resource('admin/roles', RoleController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/products', ProductController::class);
    Route::resource('courses','CoursesController',['except'=>['create','store']]);
    Route::get('courses/{course}','CoursesController@course')
        ->name('courses.course');
    Route::get('courses/enable/{course}', 'CoursesController@enable')
        ->name('course.enable');
    // доп.маршрут, чтобы запретить публикацию поста
    Route::get('Courses/disable/{course}', 'CoursesController@disable')
        ->name('course.disable');
});


Route::get('/admin/newagency', function () {
    return view('admin.newagency');
})->name('new-agency');
Route::get('/user/course1/lesson1', function () {
    return view('course.lesson1');
})->name('lesson1');
Route::get('/users/profile', function () {
    return view('users.profile');
})->name('profile');

Route::post('/admin/agency/submit','App\Http\Controllers\AgencyController@submit' )->name('agency-contact-form');
Route::get('/admin/agency/agencies','App\Http\Controllers\AgencyController@allAgency' )->name('agency');
Route::get('/admin/agencies','App\Http\Controllers\AgencyController@index')->name('agency-all');

Route::group([
    'as' => 'courses.', // имя маршрута, например blog.index
    'prefix' => 'courses', // префикс маршрута, например blog/index
], function () {
    // главная страница (все курсы)
    Route::get('index', [\App\Http\Controllers\CoursesController::class, 'index'])->name('index');
    // категория курсов (посты категории)
    Route::get('courses/{category:slug}', [App\Http\Controllers\CoursesController::class, 'category'])->name('category');
    // автор курсов (посты этого автора)
    Route::get('author/{user}', [App\Http\Controllers\CoursesController::class, 'author'])->name('author');
    // страница просмотра отдельного курса
    Route::get('courses/{course:slug}', [App\Http\Controllers\CoursesController::class, 'course'])->name('course');
});
