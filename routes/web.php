<?php

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



use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\FrontController;

Route::get('/welcome', function () {
    return view('welcome');
});
//front
Route::get('/', [FrontController::class, 'home'])->name('front-home');
Route::get('/about', [FrontController::class, 'about'])->name('front-about');
Route::get('/front-ppa', [FrontController::class, 'ppa'])->name('front-ppa');
Route::get('/front-plb3', [FrontController::class, 'plb3'])->name('front-plb3');
Route::get('/front-legal', [FrontController::class, 'legalCompliance'])->name('front-legal');




// Route::get('/', function () {return redirect('/home');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/home', [PageController::class, 'index'])->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');

    // new feature dashboard legal compliance
    Route::get('/dashboard', [FrontController::class, 'dashboard'])->name('dashboard');
    Route::get('/acc-report', [FrontController::class, 'acc_report'])->name('acc-report');
    Route::post('/acc-report',[FrontController::class, 'post_acc_report'])->name('post-acc-report');
    Route::get('/repository', [FrontController::class, 'repository'])->name('repository');
    Route::get('/licence-report', [FrontController::class, 'licence_report'])->name('licence-report');
    Route::get('/licence-report/add', [FrontController::class, 'add_licence_report'])->name('add-licence-report');
    Route::post('/licence-report/post', [FrontController::class, 'post_licence_report'])->name('post-licence-report');
    Route::get('/licence-report/edit/{id}', [FrontController::class, 'edit_licence_report'])->name('edit-licence-report');
    Route::post('/licence-report/edit-post', [FrontController::class, 'post_edit_licence_report'])->name('post-edit-licence-report');
    Route::get('/licence-report/delete/{id}', [FrontController::class, 'delete_licence_report'])->name('delete-licence-report');

    // fitur Home
    // route kerja
    Route::get('/home/kerja-add', [PageController::class, 'kerja_add'])->name('home.kerja-add');
    Route::post('/home/kerja-add-post', [PageController::class, 'kerja_post'])->name('home.kerja-post');
    Route::get('/home/kerja-edit/{id}', [PageController::class, 'kerja_edit'])->name('home.kerja-edit');
    Route::post('/home/kerja-edit-post', [PageController::class, 'kerja_edit_post'])->name('home.kerja-edit-post');
    Route::get('/home/kerja-delete/{id}', [PageController::class, 'kerja_delete'])->name('home.kerja-delete');
    // route ruang media
    Route::get('/home/ruang-media-add', [PageController::class, 'ruang_media_add'])->name('home.ruang-media-add');
    Route::post('/home/ruang-media-add-post', [PageController::class, 'ruang_media_post'])->name('home.ruang-media-post');
    Route::get('/home/ruang-media-edit/{id}', [PageController::class, 'ruang_media_edit'])->name('home.ruang-media-edit');
    Route::post('/home/ruang-media-edit-post', [PageController::class, 'ruang_media_edit_post'])->name('home.ruang-media-edit-post');
    Route::get('/home/ruang-media-delete/{id}', [PageController::class, 'ruang_media_delete'])->name('home.ruang-media-delete');
    // route penghargaan
    Route::get('/home/penghargaan-add', [PageController::class, 'penghargaan_add'])->name('home.penghargaan-add');
    Route::post('/home/penghargaan-add-post', [PageController::class, 'penghargaan_post'])->name('home.penghargaan-post');
    Route::get('/home/penghargaan-edit/{id}', [PageController::class, 'penghargaan_edit'])->name('home.penghargaan-edit');
    Route::post('/home/penghargaan-edit-post', [PageController::class, 'penghargaan_edit_post'])->name('home.penghargaan-edit-post');
    Route::get('/home/penghargaan-delete/{id}', [PageController::class, 'penghargaan_delete'])->name('home.penghargaan-delete');

    // route environment facility
    Route::get('/home/facility-add', [PageController::class, 'facility_add'])->name('home.facility-add');
    Route::post('/home/facility-add-post', [PageController::class, 'facility_post'])->name('home.facility-post');
    Route::get('/home/facility-edit/{id}', [PageController::class, 'facility_edit'])->name('home.facility-edit');
    Route::post('/home/facility-edit-post', [PageController::class, 'facility_edit_post'])->name('home.facility-edit-post');
    Route::get('/home/facility-delete/{id}', [PageController::class, 'facility_delete'])->name('home.facility-delete');



    // fitur PLB3
    Route::get('/plb3', [PageController::class, 'plb3'])->name('plb3');
     // route plb3
    Route::get('/plb3/plb3-add', [PageController::class, 'plb3_add'])->name('plb3.add');
    Route::post('/plb3/plb3-post', [PageController::class, 'plb3_post'])->name('plb3.proses-add');
    Route::get('/plb3/plb3-edit/{id}', [PageController::class, 'plb3_edit'])->name('plb3.plb3-edit');
    Route::post('/plb3/plb3-edit-post', [PageController::class, 'plb3_edit_post'])->name('plb3.plb3-edit-post');
    Route::get('/plb3/plb3-delete/{id}', [PageController::class, 'plb3_delete'])->name('plb3.plb3-delete');
    // route third party
    Route::get('/plb3/third-add', [PageController::class, 'third_add'])->name('plb3.third-add');
    Route::post('/plb3/third-post', [PageController::class, 'third_post'])->name('plb3.third-proses-add');
    Route::get('/plb3/third-edit/{id}', [PageController::class, 'third_edit'])->name('plb3.third-edit');
    Route::post('/plb3/third-edit-post', [PageController::class, 'third_edit_post'])->name('plb3.third-edit-post');
    Route::get('/plb3/third-delete/{id}', [PageController::class, 'third_delete'])->name('plb3.third-delete');
    // waste journey
    Route::get('/plb3/waste-add', [PageController::class, 'waste_add'])->name('plb3.waste-add');
    Route::post('/plb3/waste-post', [PageController::class, 'waste_post'])->name('plb3.waste-proses_add');
    Route::get('/plb3/waste-edit/{id}', [PageController::class, 'waste_edit'])->name('plb3.waste-edit');
    Route::post('/plb3/waste-edit-post', [PageController::class, 'waste_edit_post'])->name('plb3.waste-edit-post');
    Route::get('/plb3/waste-delete/{id}', [PageController::class, 'waste_delete'])->name('plb3.waste-delete');
    // plb3 media
    Route::get('/plb3/media-add', [PageController::class, 'media_add'])->name('plb3.media-add');
    Route::post('/plb3/media-post', [PageController::class, 'media_post'])->name('plb3.media-proses_add');
    Route::get('/plb3/media-edit/{id}', [PageController::class, 'media_edit'])->name('plb3.media-edit');
    Route::post('/plb3/media-edit-post', [PageController::class, 'media_edit_post'])->name('plb3.media-edit-post');
    Route::get('/plb3/media-delete/{id}', [PageController::class, 'media_delete'])->name('plb3.media-delete');


    // fitur PPA
    Route::get('/ppa', [PageController::class, 'ppa'])->name('ppa');
    // route air limbah
    Route::get('/ppa/air-limbah-add', [PageController::class, 'air_limbah_add'])->name('ppa.air-limbah-add');
    Route::post('/ppa/air-limbah-post', [PageController::class, 'air_limbah_post'])->name('ppa.air-limbah-proses_add');
    Route::get('/ppa/air-limbah-edit/{id}', [PageController::class, 'air_limbah_edit'])->name('ppa.air-limbah-edit');
    Route::post('/ppa/air-limbah-edit-post', [PageController::class, 'air_limbah_edit_post'])->name('ppa.air-limbah-edit-post');
    Route::get('/ppa/air-limbah-delete/{id}', [PageController::class, 'air_limbah_delete'])->name('ppa.air-limbah-delete');
    // route pemantauan air
    Route::get('/ppa/pemantauan-air-add', [PageController::class, 'pemantauan-air_add'])->name('ppa.pemantauan-air-add');
    Route::post('/ppa/pemantauan-air-post', [PageController::class, 'pemantauan-air_post'])->name('ppa.pemantauan-air-proses_add');
    Route::get('/ppa/pemantauan-air-edit/{id}', [PageController::class, 'pemantauan-air_edit'])->name('ppa.pemantauan-air-edit');
    Route::post('/ppa/pemantauan-air-edit-post', [PageController::class, 'pemantauan-air_edit_post'])->name('ppa.pemantauan-air-edit-post');
    Route::get('/ppa/pemantauan-air-delete/{id}', [PageController::class, 'pemantauan-air_delete'])->name('ppa.pemantauan-air-delete');
    // route air bersih
    Route::get('/ppa/air-bersih-add', [PageController::class, 'air-bersih_add'])->name('ppa.air-bersih-add');
    Route::post('/ppa/air-bersih-post', [PageController::class, 'air-bersih_post'])->name('ppa.air-bersih-proses_add');
    Route::get('/ppa/air-bersih-edit/{id}', [PageController::class, 'air-bersih_edit'])->name('ppa.air-bersih-edit');
    Route::post('/ppa/air-bersih-edit-post', [PageController::class, 'air-bersih_edit_post'])->name('ppa.air-bersih-edit-post');
    Route::get('/ppa/air-bersih-delete/{id}', [PageController::class, 'air-bersih_delete'])->name('ppa.air-bersih-delete');


    // fitur legal compliance
    Route::get('/legal-compliance', [PageController::class, 'legalCompliance'])->name('legal-compliance');
    Route::get('/ppa/legal-add', [PageController::class, 'legal_add'])->name('ppa.legal-add');
    Route::post('/ppa/legal-post', [PageController::class, 'legal_post'])->name('ppa.legal-proses_add');
    Route::get('/ppa/legal-edit/{id}', [PageController::class, 'legal_edit'])->name('ppa.legal-edit');
    Route::post('/ppa/legal-edit-post', [PageController::class, 'legal_edit_post'])->name('ppa.legal-edit-post');
    Route::get('/ppa/legal-delete/{id}', [PageController::class, 'legal_delete'])->name('ppa.legal-delete');




	// Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
