<?php



use Illuminate\Support\Facades\Route;
use App\Models\Anggota;
use App\Models\Bisnis;


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
    return view('index');
})->name('index');;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('anggota/index', [App\Http\Controllers\AnggotaController::class, 'index'])->name('anggota.index');
    Route::get('/tambahanggota', [App\Http\Controllers\AnggotaController::class, 'create'])->name('tambahanggota');
    Route::post('/insertanggota', 'App\Http\Controllers\AnggotaController@store')->name('insertanggota');
    Route::delete('/hapusanggota/{anggota}', [App\Http\Controllers\AnggotaController::class, 'destroy'])->name('hapusanggota');
    Route::get('/editanggota/{anggota}', [App\Http\Controllers\AnggotaController::class, 'edit'])->name('editanggota');
    Route::post('/updateanggota', [App\Http\Controllers\AnggotaController::class, 'update'])->name('updateanggota');
    
    Route::get('bisnis/index', [App\Http\Controllers\BisnisController::class, 'index'])->name('bisnis.index');
    Route::get('/tambahbisnis', [App\Http\Controllers\BisnisController::class, 'create'])->name('tambahbisnis');
    Route::post('/insertbisnis', 'App\Http\Controllers\BisnisController@store')->name('insertbisnis');
    Route::get('/editbisnis/{bisnis}', [App\Http\Controllers\BisnisController::class, 'edit'])->name('editbisnis');
    Route::post('/updatebisnis', [App\Http\Controllers\BisnisController::class, 'update'])->name('updatebisnis');
    Route::delete('/hapusbisnis/{bisnis}', [App\Http\Controllers\BisnisController::class, 'destroy'])->name('hapusbisnis'); 
    
    Route::get('kegiatan/index', [App\Http\Controllers\KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::get('/tambahkegiatan', [App\Http\Controllers\KegiatanController::class, 'create'])->name('tambahkegiatan');
    Route::post('/insertkegiatan', 'App\Http\Controllers\KegiatanController@store')->name('insertkegiatan');
    Route::delete('/hapuskegiatan/{kegiatan}', [App\Http\Controllers\KegiatanController::class, 'destroy'])->name('hapuskegiatan');
    Route::get('/editkegiatan/{kegiatan}', [App\Http\Controllers\KegiatanController::class, 'edit'])->name('editkegiatan');
    Route::post('/updatekegiatan', [App\Http\Controllers\KegiatanController::class, 'update'])->name('updatkegiatan');
   
    Route::get('berita/index', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
    Route::get('/tambahberita', [App\Http\Controllers\BeritaController::class, 'create'])->name('tambahberita');
    Route::post('/insertberita', 'App\Http\Controllers\BeritaController@store')->name('insertberita');
    Route::get('/editberita/{berita}', [App\Http\Controllers\BeritaController::class, 'edit'])->name('editberita');
    Route::post('/updateberita', [App\Http\Controllers\BeritaController::class, 'update'])->name('updateberita');
    Route::delete('/hapusberita/{berita}', [App\Http\Controllers\BeritaController::class, 'destroy'])->name('hapusberita'); 
});


Route::get('/export-data', [ExportController::class, 'index']);

Route::get('/kegiatan', [App\Http\Controllers\PengunjungController::class, 'kegiatan'])->name('kegiatan');

Route::get('/bisnis', [App\Http\Controllers\PengunjungController::class, 'bisnis'])->name('bisnis');

Route::get('/video', function () {
    return view('video');
})->name('video');

Route::get('/daftaranggota', function () {
        return view('daftaranggota');
})->name('daftaranggota');

Route::get('/berita', function () {
    return view('berita');
})->name('berita');


Route::post('/daftaranggota/store', 'App\Http\Controllers\AnggotaController@store')->name('daftaranggota.store');

Route::get('/exportexcel',[App\Http\Controllers\AnggotaController::class, 'exportexcel'])->name('exportexcel');
