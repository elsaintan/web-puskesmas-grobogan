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
use App\Models\Home;
use App\Models\Layanan;
use App\Models\Pemeriksaan;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

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
    /*try{
        DB::connection()->getDatabaseName();
     }catch(Exception $e){
        return $e->getMessage();
     }*/

    return view('welcome',[
        'title' => "Home",
        'active' => "home",
        'posts' => Post::latest()->paginate(3)->withQueryString(),
        'akreditasi' => Home::find('7'),
        'sertifikasi' => Home::find('8'),
    ]);
})->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
    Route::get('/dashboard/categories/checkSlug', [CategoryController::class, 'checkSlug']);
    Route::resource('/dashboard/categories', CategoryController::class)->except('show');

    Route::get('/dashboard/posts/checkSlug', [PostController::class, 'checkSlug']);
    Route::resource('/dashboard/posts', PostController::class);
    Route::resource('/dashboard/layanan', LayananController::class);
    Route::resource('/dashboard/dokumen', DokumenConteroller::class);

    Route::get('/dashboard/pengaduan-dan-saran',[ProfilController::class, 'aduan']);
    Route::get('/dashboard/profil/{type}',[ProfilController::class, 'show']);
    Route::post('/dashboard/updateImage', [ProfilController::class, 'updateImage']);
    Route::post('/dashboard/update', [ProfilController::class, 'update']);

    Route::get('/dashboard/galeri', function () {
        return view('admin.galeri');
    });

    Route::post('/dashboard/addImage',[ProfilController::class, 'addImage']);

    Route::post('/dashboard/layanan/update', [LayananController::class, 'update']);

});


Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::post('signout', [CustomAuthController::class, 'signOut'])->name('signout');



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
        'active' => "aduan"
    ]);
})->name('survey');

Route::get('/dokumen/{type}', [DokumenConteroller::class, 'show']);
Route::get('/dokumen/{type}', [DokumenConteroller::class, 'show']);

Route::get('/survey-kepuasan-masyarakat', function () {
    return view('pages.skm',[
        'active' => "aduan"
    ]);
});


Route::post('/pengaduan-dan-saran/send',[PengaduanSaranController::class, 'store']);
Route::get('/layanan/{type}',[ShowLayanan::class, 'ugd']);

Route::get('/display_pdf','PdfController@index');

Route::get('/contact', function (){
    return view('pages.contact', [
        'active' => "contact",
    ]);

});







