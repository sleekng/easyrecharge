<?php

use App\Http\Controllers\Auth\AuthOtpController;
use App\Http\Controllers\Auth\VTU\AirtimeTopUpController;
use App\Http\Controllers\Auth\VTU\CableTVController;
use App\Http\Controllers\Auth\VTU\DataTopUpController;
use App\Http\Controllers\Auth\VTU\ElectricityController;
use App\Http\Controllers\Auth\Wallet\AddFundsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/sms', [SmsController::class, 'index']);
Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/sidebar', function () {
    return Inertia::render('Sidebard');
})->name('airtime');


Route::get('/sidebar', function () {
    return Inertia::render('Sidebard');
})->name('airtime');



Route::get('/overview', function () {
    return Inertia::render('Dashboard/Overview');
})->middleware(['auth', 'verified'])->name('overview');


// VTU pages
Route::get('vtu/airtime-topup', [AirtimeTopUpController::class,'index'])->name('vtu.airtime-topup');
Route::get('vtu/data-topup', [DataTopUpController::class,'index'])->name('vtu.data-topup');
Route::get('vtu/cable-tv',  [CableTVController::class,'index'])->name('vtu.cable-tv');
Route::get('vtu/electricity', [ElectricityController::class,'index'])->name('vtu.electricity');




// Wallet pages
Route::get('wallet/balance', 'Wallet\BalanceController@index')->name('wallet.balance');
Route::get('wallet/transactions', 'Wallet\TransactionsController@index')->name('wallet.transactions');
Route::get('wallet/add-funds', [AddFundsController::class,'index'])->name('wallet.add-funds');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(AuthOtpController::class)->group(function () {
    Route::get('/otp/register', 'register')->name('otp.register');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    /*   Route::get('/otp/verification/{user_id}','verification')->name( 'otp.verification' ); */
});





require __DIR__ . '/auth.php';
