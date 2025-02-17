<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuperAdminController;

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

// Public Routes
Route::get('/', function () {
    return view('homepage');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/about', function () {
    return view('about');
});

// Authentication Routes
Auth::routes();

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/superadmin/login', [LoginController::class, 'showSuperAdminLoginForm'])->name('superadmin.login');
Route::post('/superadmin/login', [LoginController::class, 'superAdminLogin']);
Route::group(['middleware' => ['superadmin']], function() {
    // Route untuk halaman Super Admin
    Route::get('/superadmin', [SuperAdminController::class, 'index'])->name('superadmin.index');
});
// Mengakses data pengguna untuk superadmin
Route::get('/superadmin/users', [UserController::class, 'index'])->name('users.index');


// Authenticated Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ProductController::class, 'index'])->name('dashboard');

    // Product Resource Controller
    Route::resource('products', ProductController::class);

    // Logout Route
    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});

// Redirect to Home after Login
Route::get('/home', [HomeController::class, 'index'])->name('home');
