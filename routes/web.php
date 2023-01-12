<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\CheckoutController as AdminCheckout;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SchoolfeeController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
})->name('welcome');


Route::middleware(['auth'])->group(function(){
    //checkout
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success')->middleware('ensureUserRole:user');
    Route::get('/checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('checkout.create')->middleware('ensureUserRole:user');
    Route::post('/checkout/{camp}', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('ensureUserRole:user');
    //dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    // Route::get('dashboard/checkout/invoice/{checkout}', [CheckoutController::class, 'invoice'])->name('user.checkout.invoice');
    // User dashboard
    Route::prefix('user/dashboard')->namespace('User')->name('user.')->middleware('ensureUserRole:user')->group(function(){
        route::get('/', [UserDashboard::class, 'index'])->name('dashboard');
    });
    // Admin dashboard
    Route::prefix('admin/dashboard')->namespace('Admin')->name('admin.')->middleware('ensureUserRole:admin')->group(function(){
        route::get('/', [AdminDashboard::class, 'index'])->name('dashboard');

        //checkout is paid
        route::post('checkout/{checkout}', [AdminCheckout::class, 'update'])->name('checkout.update');
    });
});

//Profil Siswa
Route::get('student/{user}', [StudentController::class, 'index'])->name('student.index');
Route::get('student/{user}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::get('student/{user}/edit', [StudentController::class, 'update']);

//jadwal dan biaya
Route::get('schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('schoolfee', [SchoolfeeController::class, 'index'])->name('fee');

// socialite routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.login.callback');

//midtrans route
route::get('payment/success', [CheckoutController::class, 'midtransCallback']);
route::post('payment/success', [CheckoutController::class, 'midtransCallback']);

require __DIR__.'/auth.php';
