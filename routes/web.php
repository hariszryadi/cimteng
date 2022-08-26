<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IumkController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\LakipController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\Cms\NewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Cms\VideoController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\Cms\BannerController;
use App\Http\Controllers\Admin\MediaSocialController;
use App\Http\Controllers\Admin\TypePotencyController;
use App\Http\Controllers\Admin\Cms\GreetingController;
use App\Http\Controllers\Admin\VisionMissionController;
use App\Http\Controllers\Admin\DistrictEmployeeController;
use App\Http\Controllers\Admin\DistrictMonographController;
use App\Http\Controllers\Admin\UrbanVillagePotencyController;
use App\Http\Controllers\Admin\UrbanVillageEmployeeController;
use App\Http\Controllers\Admin\UrbanVillageMonographController;
use App\Http\Controllers\Admin\OrganizationalStructureController;

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
Route::get('/profil/lakip', [HomeController::class, 'lakip'])->name('profil.lakip');
Route::get('/profil/monografi', [HomeController::class, 'monograph'])->name('profil.monograph');
Route::get('/profil/visi-misi', [HomeController::class, 'vision_mission'])->name('profil.visionMission');
Route::get('/profil/struktur-organisasi', [HomeController::class, 'organizational_structure'])->name('profil.organizationalStructure');
Route::get('/profil/kepegawaian', [HomeController::class, 'employee'])->name('profil.employee');
Route::get('/kelurahan/{kelurahan}', [HomeController::class, 'urban_village'])->name('urban-village');
Route::get('/e-layanan', [HomeController::class, 'e_layanan'])->name('e-layanan');
Route::get('/iumk', [HomeController::class, 'iumk'])->name('iumk');
Route::get('/komentar-saran', [HomeController::class, 'comment'])->name('comment');
Route::post('/komentar-saran', [HomeController::class, 'post_comment'])->name('post.comment');
/** Layanan */
Route::prefix('layanan')->group(function () {
    Route::get('/surat-keterangan-domisili-perusahaan', [HomeController::class, 'surat_keterangan_domisili_perusahaan'])->name('surat-keterangan-domisili-perusahaan');
    Route::get('/surat-keterangan-domisili-yayasan', [HomeController::class, 'surat_keterangan_domisili_yayasan'])->name('surat-keterangan-domisili-yayasan');
    Route::get('/surat-pengantar-pindah-ke-luar-negeri', [HomeController::class, 'surat_pengantar_pindah_ke_luar_negeri'])->name('surat-pengantar-pindah-ke-luar-negeri');
    Route::get('/pelayanan-rekomendasi-imb', [HomeController::class, 'pelayanan_rekomendasi_imb'])->name('pelayanan-rekomendasi-imb');
    Route::get('/surat-keterangan_tidak-mampu', [HomeController::class, 'surat_keterangan_tidak_mampu'])->name('surat-keterangan_tidak-mampu');
    Route::get('/surat-pengantar-perubahan-data-kependudukan', [HomeController::class, 'surat_pengantar_perubahan_data_kependudukan'])->name('surat-pengantar-perubahan-data-kependudukan');
});

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

    /** District */
    Route::group(['prefix' => 'district'], function () {
        /** Lakip */
        Route::group(['prefix' => 'lakip'], function () {
            Route::get('/index', [LakipController::class, 'index'])->name('admin.district.lakip.index');
            Route::get('/create', [LakipController::class, 'create'])->name('admin.district.lakip.create');
            Route::post('/store', [LakipController::class, 'store'])->name('admin.district.lakip.store');
            Route::get('/{id}/edit', [LakipController::class, 'edit'])->name('admin.district.lakip.edit');
            Route::post('/update', [LakipController::class, 'update'])->name('admin.district.lakip.update');
            Route::post('/destroy', [LakipController::class, 'destroy'])->name('admin.district.lakip.destroy');
        });

        /** Monograph */
        Route::get('/index', [DistrictMonographController::class, 'index'])->name('admin.district.monograph.index');
        Route::post('/update', [DistrictMonographController::class, 'update'])->name('admin.district.monograph.update');

        /** Vision Mission */
        Route::group(['prefix' => 'vision-mission'], function () {
            Route::get('/index', [VisionMissionController::class, 'index'])->name('admin.district.visionMission.index');
            Route::get('/{id}/edit', [VisionMissionController::class, 'edit'])->name('admin.district.visionMission.edit');
            Route::post('/update', [VisionMissionController::class, 'update'])->name('admin.district.visionMission.update');
        });

        /** Organizational Structure */
        Route::group(['prefix' => 'organizational-structure'], function () {
            Route::get('/index', [OrganizationalStructureController::class, 'index'])->name('admin.district.organizationalStructure.index');
            Route::get('/{id}/edit', [OrganizationalStructureController::class, 'edit'])->name('admin.district.organizationalStructure.edit');
            Route::post('/update', [OrganizationalStructureController::class, 'update'])->name('admin.district.organizationalStructure.update');
        });

        /** Employee */
        Route::group(['prefix' => 'employee'], function () {
            Route::get('/index', [DistrictEmployeeController::class, 'index'])->name('admin.district.employee.index');
            Route::get('/create', [DistrictEmployeeController::class, 'create'])->name('admin.district.employee.create');
            Route::post('/store', [DistrictEmployeeController::class, 'store'])->name('admin.district.employee.store');
            Route::get('/{id}/edit', [DistrictEmployeeController::class, 'edit'])->name('admin.district.employee.edit');
            Route::post('/update', [DistrictEmployeeController::class, 'update'])->name('admin.district.employee.update');
            Route::post('/destroy', [DistrictEmployeeController::class, 'destroy'])->name('admin.district.employee.destroy');
        });
    });

    /** Urban Village */
    Route::group(['prefix' => 'urban-village'], function () {
        /** Monograph */
        Route::group(['prefix' => 'monograph'], function () {
            Route::get('/index', [UrbanVillageMonographController::class, 'index'])->name('admin.urbanVillage.monograph.index');
            Route::get('/{id}/edit', [UrbanVillageMonographController::class, 'edit'])->name('admin.urbanVillage.monograph.edit');
            Route::post('/update', [UrbanVillageMonographController::class, 'update'])->name('admin.urbanVillage.monograph.update');
        });

        /** Employee */
        Route::group(['prefix' => 'employee'], function () {
            Route::get('/index', [UrbanVillageEmployeeController::class, 'index'])->name('admin.urbanVillage.employee.index');
            Route::get('/create', [UrbanVillageEmployeeController::class, 'create'])->name('admin.urbanVillage.employee.create');
            Route::post('/store', [UrbanVillageEmployeeController::class, 'store'])->name('admin.urbanVillage.employee.store');
            Route::get('/{id}/edit', [UrbanVillageEmployeeController::class, 'edit'])->name('admin.urbanVillage.employee.edit');
            Route::post('/update', [UrbanVillageEmployeeController::class, 'update'])->name('admin.urbanVillage.employee.update');
            Route::post('/destroy', [UrbanVillageEmployeeController::class, 'destroy'])->name('admin.urbanVillage.employee.destroy');
        });

        /** Potency */
        Route::group(['prefix' => 'potency'], function () {
            Route::get('/index', [UrbanVillagePotencyController::class, 'index'])->name('admin.urbanVillage.potency.index');
            Route::get('/create', [UrbanVillagePotencyController::class, 'create'])->name('admin.urbanVillage.potency.create');
            Route::post('/store', [UrbanVillagePotencyController::class, 'store'])->name('admin.urbanVillage.potency.store');
            Route::get('/{id}/edit', [UrbanVillagePotencyController::class, 'edit'])->name('admin.urbanVillage.potency.edit');
            Route::post('/update', [UrbanVillagePotencyController::class, 'update'])->name('admin.urbanVillage.potency.update');
            Route::post('/destroy', [UrbanVillagePotencyController::class, 'destroy'])->name('admin.urbanVillage.potency.destroy');
        });
    });

    /** Media Social */
    Route::get('/media-social/index', [MediaSocialController::class, 'index'])->name('admin.mediaSocial.index');
    Route::post('/media-social/update', [MediaSocialController::class, 'update'])->name('admin.mediaSocial.update');

     /** Master */
     Route::group(['prefix' => 'master'], function () {
        /** Type Potency */
        Route::group(['prefix' => 'type-potency'], function () {
            Route::get('/index', [TypePotencyController::class, 'index'])->name('admin.master.typePotency.index');
            Route::get('/create', [TypePotencyController::class, 'create'])->name('admin.master.typePotency.create');
            Route::post('/store', [TypePotencyController::class, 'store'])->name('admin.master.typePotency.store');
            Route::get('/{id}/edit', [TypePotencyController::class, 'edit'])->name('admin.master.typePotency.edit');
            Route::post('/update', [TypePotencyController::class, 'update'])->name('admin.master.typePotency.update');
            Route::post('/destroy', [TypePotencyController::class, 'destroy'])->name('admin.master.typePotency.destroy');
        });
    });

    /** IUMK */
    Route::group(['prefix' => 'iumk'], function () {
        Route::get('/index', [IumkController::class, 'index'])->name('admin.iumk.index');
        Route::get('/create', [IumkController::class, 'create'])->name('admin.iumk.create');
        Route::post('/store', [IumkController::class, 'store'])->name('admin.iumk.store');
        Route::get('/{id}/edit', [IumkController::class, 'edit'])->name('admin.iumk.edit');
        Route::post('/update', [IumkController::class, 'update'])->name('admin.iumk.update');
        Route::post('/destroy', [IumkController::class, 'destroy'])->name('admin.iumk.destroy');
    });

    /** Comment */
    Route::get('/comment/index', [CommentController::class, 'index'])->name('admin.comment.index');

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
