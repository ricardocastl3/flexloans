<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    SolicitationController,
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

Route::redirect('/', 'register', 301);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    /*
    * Dashboard Page
    */
    Route::get('/dashboard', [HomeController::class, 'home'])->name('app.dashboard');

    /*
    * Resource Wallet
    */
    Route::resource('wallet', WalletController::class);

    /*
    * Resource Solicitation
    */
    Route::resource('solicitation', SolicitationController::class);

    /*
    * Finalizing Solicitation
    */
    Route::match(['get','post'],'finalizing', [SolicitationController::class, 'finalSolicitation'])->name('sol.finalizing');

    /*
     *  Contact Us - Page
     */
    Route::get('contact-us', [HomeController::class, 'contactUs'])->name('app.contactus');

    /*
     *  Send Message When Contact to us
     */
    Route::match(["post","get"],'sendmessage', [HomeController::class, 'sendMessageWhenContactUs'])->name('app.sendmessage');

});
