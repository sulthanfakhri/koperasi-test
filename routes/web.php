<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//============================= Route Landing ==========================================
Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/berita', [LandingController::class, 'news'])->name('news');
Route::get('/tentang-kami', [LandingController::class, 'about'])->name('about');
Route::get('/kontak-kami', [LandingController::class, 'contact'])->name('contact');
Route::get('/syarat-layanan', [LandingController::class, 'terms'])->name('terms');
Route::get('/kebijakan-kerahasiaan', [LandingController::class, 'policies'])->name('policies');


//============================= Route Login ==========================================
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/do', [AuthController::class, 'loginDo'])->name('login.do');


Route::middleware(['auth'])->group(function () {

    //============================= Route Admin ==========================================
    Route::middleware(['auth.level:superadmin'])->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/admin', 'index')->name('admin.index');
            // ==== MASTER UNIT
            Route::get('/admin/master/unit', 'masterUnit')->name('admin.master.unit');
            Route::post('/admin/master/unit/add/do', 'unitKerjaAddDo')->name('admin.master.unit.add.do');
            Route::post('/admin/master/unit/{id}/edit/do', 'unitKerjaEditDo')->name('admin.master.unit.edit.do');
            Route::get('/admin/master/unit/{id}/delete/do', 'unitKerjaDeleteDo')->name('admin.master.unit.delete.do');

            // ==== MASTER ROLE
            Route::get('/admin/master/role', 'masterRole')->name('admin.master.role');
            Route::post('/admin/master/role/add/do', 'roleAddDo')->name('admin.master.role.add.do');
            Route::post('/admin/master/role/{id}/edit/do', 'roleEditDo')->name('admin.master.role.edit.do');
            Route::get('/admin/master/role/{id}/delete/do', 'roleDeleteDo')->name('admin.master.role.delete.do');

            // ==== MASTER JENIS ANGGOTA
            Route::get('/admin/master/jenis_anggota', 'masterJnsAnggota')->name('admin.master.jenis_anggota');
            Route::post('/admin/master/jenis_anggota/add/do', 'jnsAnggotaAddDo')->name('admin.master.jenis_anggota.add.do');
            Route::post('/admin/master/jenis_anggota/{id}/edit/do', 'jnsAnggotaEditDo')->name('admin.master.jenis_anggota.edit.do');
            Route::get('/admin/master/jenis_anggota/{id}/delete/do', 'jnsAnggotaDeleteDo')->name('admin.master.jenis_anggota.delete.do');

            // ==== JENIS BELANJA
            Route::get('/admin/master/jenis_belanja', 'masterJnsBelanja')->name('admin.master.jenis_belanja');
            Route::post('/admin/master/jenis_belanja/add/do', 'jnsBelanjaAddDo')->name('admin.master.jenis_belanja.add.do');
            Route::post('/admin/master/jenis_belanja/{id}/edit/do', 'jnsBelanjaEditDo')->name('admin.master.jenis_belanja.edit.do');
            Route::get('/admin/master/jenis_belanja/{id}/delete/do', 'jnsBelanjaDeleteDo')->name('admin.master.jenis_belanja.delete.do');

            // ==== JENIS SIMPANAN
            Route::get('/admin/master/jenis_simpanan', 'masterJnsSimpanan')->name('admin.master.jenis_simpanan');
            Route::post('/admin/master/jenis_simpanan/add/do', 'jnsSimpananAddDo')->name('admin.master.jenis_simpanan.add.do');
            Route::post('/admin/master/jenis_simpanan/{id}/edit/do', 'jnsSimpananEditDo')->name('admin.master.jenis_simpanan.edit.do');
            Route::get('/admin/master/jenis_simpanan/{id}/delete/do', 'jnsSimpananDeleteDo')->name('admin.master.jenis_simpanan.delete.do');
        });
    });

    //============================= Route Anggota ========================================
    Route::middleware(['auth.level:anggota'])->group(function () {
        Route::controller(AnggotaController::class)->group(function () {
            Route::get('/anggota', 'index')->name('anggota.index');
        });
    });

    //============================= Route Logout =========================================
    Route::get('/logout/do', [AuthController::class, 'logoutDo'])->name('logout.do');
});
