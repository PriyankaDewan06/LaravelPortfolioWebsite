<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\admin\ProfileImageController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', '\App\Http\Controllers\front\HomeController@index')->name('home');
Route::post('/contact-message', '\App\Http\Controllers\front\ContactController@new')->name('contact-msg');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
    return view('admin.home.home');
})->name('dashboard');
Route::get('/manage-contact', '\App\Http\Controllers\front\ContactController@mng')->name('manage-contact');
Route::get('/delete-contact/{id}', '\App\Http\Controllers\front\ContactController@del')->name('delete-contact');
Route::get('/contact-status/{id}', '\App\Http\Controllers\front\ContactController@status')->name('contact-status');
Route::get('/manage-Profile-images', '\App\Http\Controllers\admin\ProfileImageController@mng')->name('mng-img');
Route::post('/new-Profile-images', '\App\Http\Controllers\admin\ProfileImageController@new')->name('new-img');
Route::get('/delete-image/{id}', '\App\Http\Controllers\admin\ProfileImageController@del')->name('del-img');
Route::get('/manage-recent-projects', '\App\Http\Controllers\admin\ProjectController@mng')->name('mng-project');
Route::get('/project-status/{id}', '\App\Http\Controllers\admin\ProjectController@status')->name('project-status');
Route::get('/delete-project/{id}', '\App\Http\Controllers\admin\ProjectController@del')->name('del-project');
Route::post('/new-project', '\App\Http\Controllers\admin\ProjectController@new')->name('new-project');
Route::get('/manage-CMS', '\App\Http\Controllers\admin\CmsController@mng')->name('mng-cms');
Route::get('/CMS-status/{id}', '\App\Http\Controllers\admin\CmsController@status')->name('cms-status');
Route::get('/delete-CMS/{id}', '\App\Http\Controllers\admin\CmsController@del')->name('del-cms');
Route::post('/new-CMS', '\App\Http\Controllers\admin\CmsController@new')->name('new-cms');
