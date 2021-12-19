<?php

use App\Http\Controllers\Admin\AboutsusController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CantactsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\ShowroomsController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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
Route::group(
    ['prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/', [HomeController::class, 'index'])->name('home');

    require __DIR__.'/auth.php';
}); 

Route::post('/contact/sendToTg', [HomeController::class, 'sendToTg'])->name('contact.send');


require __DIR__.'/auth.php';

Route::get('/logout', function () {
    return view('site.index');
})->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [AdminController::class,'index'])->name('admin');
    Route::resources([
   
        'admin/banners' => BannersController::class,
        'admin/aboutsus' => AboutsusController::class,
        'admin/services' => ServicesController::class,
        'admin/projects' => ProjectsController::class,
        'admin/posts' => PostsController::class,
        'admin/blogs' => BlogsController::class,
        'admin/contacts' => CantactsController::class,
        'admin/showrooms' => ShowroomsController::class,
    ]); 
    Route::post('/admin/aboutsus/upload', [AboutsusController::class, 'upload'])->name('admin.aboutsus.upload');
    Route::post('/admin/services/upload', [ServicesController::class, 'upload'])->name('admin.services.upload');

    
}); 
