<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Langkah5Controller;
use App\Http\Controllers\LaporkanController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminPetugasController;
use App\Http\Controllers\AdminPengaduanController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;
use App\Models\category;
use App\Models\User;
use App\Models\CalenderEvent;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\PetugasMiddleware;
use App\Http\Middleware\checkTrackingCode;

Route::get('/homecoba', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Silviani Vanesha",
        "email" => "silviani@gmail.com",
        "image" => "silvi.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});

// Landingpage

Route::get('/', [HomeController::class, 'index']);
Route::get('/pengantar', [HomeController::class, 'pengantar']);
Route::get('/filosofi', [HomeController::class, 'filosofi']);
Route::get('/struktur', [HomeController::class, 'struktur']);
Route::get('/sop', [HomeController::class, 'sop']);
Route::get('/hubungi', [HomeController::class, 'hubungi']);

Route::get('/program', [ProgramController::class, 'program']);
Route::get('/program/{id}', [ProgramController::class, 'showDetail'])->name('program.detail');

Route::get('/laporkan', [LaporkanController::class, 'storeStep1'])->name('langkah1');
Route::post('/laporkan', [LaporkanController::class, 'processStep1']);
Route::get('/langkah2', [LaporkanController::class, 'storeStep2'])->name('langkah2');
Route::post('/langkah2', [LaporkanController::class, 'processStep2']);
Route::get('/langkah3', [LaporkanController::class, 'storeStep3'])->name('langkah3');
Route::post('/langkah3', [LaporkanController::class, 'processStep3']);
Route::get('/langkah4', [LaporkanController::class, 'storeStep4'])->name('langkah4');
Route::post('/langkah4', [LaporkanController::class, 'processStep4']);
Route::get('/langkah5', [LaporkanController::class, 'storeStep5'])->name('langkah5');
Route::post('/langkah5', [LaporkanController::class, 'processStep5']);
Route::get('/langkah6', [LaporkanController::class, 'storeStep6'])->name('langkah6');
Route::post('/submit-all', [LaporkanController::class, 'processStep6']);

Route::post('/send-otp', [LaporkanController::class, 'sendOtp'])->name('send_otp');
Route::post('/verify-otp', [LaporkanController::class, 'verifyOTP'])->name('verify_otp');


// Route::get('send-email', [Langkah5Controller::class, 'process']);
// Route::get('/step-5', 'FormController@step5');
// Route::post('/send-otp', 'FormController@sendOtp');
// Route::post('/verify-otp', 'FormController@verifyOtp');


Route::get('/tracking', [TrackingController::class, 'tracking']);
// Route::get('/tracking-aduan', [TrackingController::class, 'index'])->name('trackingAduan'); 
// Route::get('/tracking-aduan', [TrackingController::class, 'index'])->middleware(checkTrackingCode::class);

Route::get('/tracking-aduan', [TrackingController::class, 'index'])->name('trackingAduan')->middleware(checkTrackingCode::class); 
Route::get('/detailtracking', [TrackingController::class, 'detailtracking'])->name('detailTracking')->middleware(checkTrackingCode::class); 
Route::get('/tracking/detailtracking', [TrackingController::class, 'detailtracking'])->name('detailTracking')->middleware(checkTrackingCode::class);

Route::get('/materi', [MateriController::class, 'materi']);
Route::get('/materi/detailmateri', [MateriController::class, 'detailmateri']);

Route::get('/open-pdf/{filename}', function ($filename) {
  $path = public_path('pdf/' . $filename);
  return response()->file($path);
})->name('openPdf');

Route::get('/artikel', [PostController::class, 'artikel']);
Route::get('/artikel/{detailartikel:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
        return view('main.categories', [
            "title" => "Post Categories",
            'active' => 'Artikel Satgas PPKS',
            "categories" => Category::all()
        ]);
});

Route::get('/categories/{category:slug}', function(category $category) {
  return view('main.artikel', [
    'title' => "Post By Category : $category->name",
    'active' => 'Artikel Satgas PPKS',
    'artikel' => $category->artikel->load('category', 'author')
  ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('main.artikel', [
      'title' => "Post By Author : $author->name",
      'active' => 'Artikel Satgas PPKS',
      'artikel' => $author->artikel->load('category', 'author'),
    ]);
});

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
  Route::post('users/{user}/approve', [AdminController::class, 'approveUser'])->name('admin.users.approve');
  Route::post('users/{user}/reject', [AdminController::class, 'rejectUser'])->name('admin.users.reject');
});


Route::get('/dashboard', function() {
  return view('dashboard.dashboard');
})->middleware('auth');

Route::get('/dashboard', [AdminPengaduanController::class, 'dashboard'])->middleware('auth');

Route::get('/dashboard/artikel/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/artikel', DashboardPostController::class)->middleware('auth');

// Route::middleware(['auth', 'pending'])->group(function () {
//   Route::resource('/dashboard/artikel', DashboardPostController::class);
// });

Route::resource('/dashboard/petugas', AdminPetugasController::class)->except('show')->middleware(['web', PetugasMiddleware::class, IsAdmin::class])->middleware('auth');
Route::get('/dashboard/petugas/toggle-status/{id}', [AdminPetugasController::class, 'toggleStatus'])->name('petugas.toggleStatus')->middleware(IsAdmin::class)->middleware('auth');
Route::post('/dashboard/petugas/{id}/reset-password', [AdminPetugasController::class, 'resetPassword'])->middleware(['web', PetugasMiddleware::class, IsAdmin::class])->middleware('auth');

// Route::middleware([IsAdmin::class, PetugasMiddleware::class])->group(function () {
//   Route::resource('/dashboard/petugas', AdminPetugasController::class)->except('show');
// });Auth::user()->id
// Route::middleware(['auth'])->group(function () {
//   Route::get('/dashboard/petugas/{id}/toggle-status', [AdminPetugasController::class, 'toggleStatus'])->name('petugas.toggleStatus');
// });

Route::resource('/dashboard/pengaduan', AdminPengaduanController::class)->middleware('auth');
Route::get('/dashboard/pengaduan/{id}', [AdminPengaduanController::class, 'show'])->name('dashboard.pengaduan.show')->middleware('auth');
Route::post('/petugas/statusOnchange/{id}', [AdminPengaduanController::class, 'statusOnchange'])->name('petugas.statusOnchange')->middleware('auth');
// Route::post('/dashboard/pengaduan/reject/{id}', [AdminPengaduanController::class, 'reject'])->name('pengaduan.reject')->middleware('auth');

Route::get('/dashboard/pengaduan/{pengaduan}/tanggapi', [TanggapanController::class, 'create'])->name('tanggapan.create')->middleware('auth');
Route::post('/tanggapan', [TanggapanController::class, 'store'])->name('tanggapan.store')->middleware('auth');

// Route::get('/dashboard/pengaduan/{id}', [AdminPengaduanController::class, 'show']);
// Route::get('/dashboard/pengaduan/export-pdf', [AdminPengaduanController::class, 'exportPDF'])
//     ->middleware(['auth', 'IsAdmin'])
//     ->name('pengaduan.exportPDF');

Route::patch('/dashboard/pengaduan/{id}/update-status', [AdminPengaduanController::class, 'updateStatus'])->name('admin.updateStatus');


Route::get('/dashboard/export-pdf', function() {
  return view('dashboard.exportPDF.index');
})->middleware(IsAdmin::class)->middleware('auth');


// Route::get('/dashboard/pengaduan/{id}/tanggapi', [TanggapanController::class, 'create'])->name('tanggapan.create');
// Route::get('/dashboard/tanggapan', [TanggapanController::class, 'index'])->name('tanggapan.index');
// Rute untuk index tanggapan dengan ID pengaduan
// Route::get('/dashboard/tanggapan/{pengaduan_id}', [TanggapanController::class, 'index'])->name('tanggapan.index');
// Route::get('/dashboard/tanggapan/index', [TanggapanController::class, 'index'])->name('tanggapan.index');