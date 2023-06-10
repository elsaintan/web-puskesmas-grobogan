<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DokumenConteroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PengaduanSaranController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ShowLayanan;
use App\Models\Dokumen;
use App\Models\Layanan;
use App\Models\Pemeriksaan;
use App\Models\Post;

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
    return view('welcome',[
        'title' => "Home",
        'active' => "home",
        'posts' => Post::latest()->paginate(3)->withQueryString()
    ]);
})->name('home');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/dashboard/categories/checkSlug', [CategoryController::class, 'checkSlug']);
Route::resource('/dashboard/categories', CategoryController::class)->except('show');

Route::get('/dashboard/posts/checkSlug', [PostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', PostController::class);
Route::resource('/dashboard/layanan', LayananController::class);
Route::resource('/dashboard/dokumen', DokumenConteroller::class);

Route::get('/dashboard/pengaduan-dan-saran',[ProfilController::class, 'aduan']);
Route::get('/dashboard/profil/{type}',[ProfilController::class, 'show']);
Route::post('/dashboard/updateImage', [ProfilController::class, 'updateImage']);

Route::get('/visi-misi', [HomeController::class, 'visimisi']);
Route::get('/tata-nilai', [HomeController::class, 'tatanilai']);
Route::get('/motto', [HomeController::class, 'motto']);
Route::get('/maklumat-pelayanan', [HomeController::class, 'maklumatpelayanan']);
Route::get('/struktur-organisasi', [HomeController::class, 'strukturorganisasi']);
Route::get('/tentang-puskesmas', [HomeController::class, 'about']);
Route::get('/galeri', [HomeController::class, 'galeri']);
Route::get('/posts/{post:slug}', [PostController::class, 'showSinglePost']);

Route::get('/layanan-pengaduan-saran', function () {
    return view('pages.pengaduansaran',[
        'active' => "contact"
    ]);
})->name('survey');

Route::get('/survey-kepuasan-masyarakat', function () {
    return view('pages.skm',[
        'active' => "contact"
    ]);
});

Route::get('/layanan/dokumen', function () {
    return view('pages.dokumen',[
        'active' => "dokumen",
        'data' => Dokumen::all()
    ]);
});



Route::post('/pengaduan-dan-saran/send',[PengaduanSaranController::class, 'store']);
Route::get('/layanan/ugd',[ShowLayanan::class, 'ugd']);

Route::get('/display_pdf','PdfController@index');







