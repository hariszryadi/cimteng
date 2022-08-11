<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\Cms\NewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Cms\VideoController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\Cms\BannerController;
use App\Http\Controllers\Admin\MediaSocialController;
use App\Http\Controllers\Admin\Cms\GreetingController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

/** Admin */
Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    /** CMS */
    Route::group(['prefix' => 'cms'], function () {
        /** Banner */
        Route::group(['prefix' => 'banner'], function () {
            Route::get('/index', [BannerController::class, 'index'])->name('admin.cms.banner.index');
            Route::get('/create', [BannerController::class, 'create'])->name('admin.cms.banner.create');
            Route::post('/store', [BannerController::class, 'store'])->name('admin.cms.banner.store');
            Route::get('/{id}/edit', [BannerController::class, 'edit'])->name('admin.cms.banner.edit');
            Route::post('/update', [BannerController::class, 'update'])->name('admin.cms.banner.update');
            Route::post('/destroy', [BannerController::class, 'destroy'])->name('admin.cms.banner.destroy');
            Route::post('/update-status', [BannerController::class, 'update_status'])->name('admin.cms.banner.status');
        });

        /** News */
        Route::group(['prefix' => 'news'], function () {
            Route::get('/index', [NewsController::class, 'index'])->name('admin.cms.news.index');
            Route::get('/create', [NewsController::class, 'create'])->name('admin.cms.news.create');
            Route::post('/store', [NewsController::class, 'store'])->name('admin.cms.news.store');
            Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('admin.cms.news.edit');
            Route::post('/update', [NewsController::class, 'update'])->name('admin.cms.news.update');
            Route::post('/destroy', [NewsController::class, 'destroy'])->name('admin.cms.news.destroy');
            Route::post('/update-status', [NewsController::class, 'update_status'])->name('admin.cms.news.status');
        });

        /** Video */
        Route::group(['prefix' => 'video'], function () {
            Route::get('/index', [VideoController::class, 'index'])->name('admin.cms.video.index');
            Route::get('/create', [VideoController::class, 'create'])->name('admin.cms.video.create');
            Route::post('/store', [VideoController::class, 'store'])->name('admin.cms.video.store');
            Route::get('/{id}/edit', [VideoController::class, 'edit'])->name('admin.cms.video.edit');
            Route::post('/update', [VideoController::class, 'update'])->name('admin.cms.video.update');
            Route::post('/destroy', [VideoController::class, 'destroy'])->name('admin.cms.video.destroy');
            Route::post('/update-status', [VideoController::class, 'update_status'])->name('admin.cms.video.status');
        });

         /** Greeting */
         Route::group(['prefix' => 'greeting'], function () {
            Route::get('/index', [GreetingController::class, 'index'])->name('admin.cms.greeting.index');
            Route::get('/{id}/edit', [GreetingController::class, 'edit'])->name('admin.cms.greeting.edit');
            Route::post('/update', [GreetingController::class, 'update'])->name('admin.cms.greeting.update');
        });
    });

    /** Media Social */
    Route::get('/media-social/index', [MediaSocialController::class, 'index'])->name('admin.mediaSocial.index');
    Route::post('/media-social/update', [MediaSocialController::class, 'update'])->name('admin.mediaSocial.update');

    /** User Config */
    Route::group(['prefix' => 'role'], function() {
        /** Role */
        Route::get('/index', [RoleController::class, 'index'])->name('admin.role.index');
        Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
        Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store');
        Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('admin.role.edit');
        Route::post('/update', [RoleController::class, 'update'])->name('admin.role.update');
        Route::post('/destroy', [RoleController::class, 'destroy'])->name('admin.role.destroy');
        Route::post('/dataTablePermission', [RoleController::class, 'dataTablePermission'])->name('admin.role.dataTablePermission');
    });

    Route::group(['prefix' => 'user-admin'], function () {
        /** User */
        Route::get('/index', [UserAdminController::class, 'index'])->name('admin.userAdmin.index');
        Route::get('/create', [UserAdminController::class, 'create'])->name('admin.userAdmin.create');
        Route::post('/store', [UserAdminController::class, 'store'])->name('admin.userAdmin.store');
        Route::get('/{id}/edit', [UserAdminController::class, 'edit'])->name('admin.userAdmin.edit');
        Route::post('/update', [UserAdminController::class, 'update'])->name('admin.userAdmin.update');
        Route::post('/destroy', [UserAdminController::class, 'destroy'])->name('admin.userAdmin.destroy');
    });
});
