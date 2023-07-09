<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SolicitationController,
    LoanController,
    WalletController,
    HomeController
};

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.pages.home');
    })->name('app.dashboard');

    /*
    * Resource Wallet
    */
    Route::resource('wallet', WalletController::class);

    /*
    * Resource Solicitation
    */
    Route::resource('solicitation', SolicitationController::class);


    /*
     *  Contact Us
     */
    Route::get('contact-us', [HomeController::class, 'ContactUs'])->name('app.contactus');

    /*
     *  Send Message When Contact to us
     */
    Route::match(["post","get"],'sendmessage', [HomeController::class, 'SendMessageWhenContactUs'])->name('app.sendmessage');

});
