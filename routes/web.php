<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


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

Route::get('/homepageuser', [EventController::class, 'showAllEvent'])->name('HomepageUser');
Route::get('/eventdetailuser/{id}', [EventController::class, 'showDetailEvent'])->name('DetailEventUser');
Route::get('/', [EventController::class, 'showAllEventGuest'])->name('HomepageGuest');

Route::get('/registeraccount', [Controller::class, 'register'])->name('RegisterAccount');
Route::post('/addAccount', [UserController::class, 'addAccount'])->name('AddAccount');

Route::get('/login', [LoginController::class, 'login'])->name('LoginAccount');
Route::post('/loginaccount', [LoginController::class, 'loginlogic'])->name('LoginLogic');
Route::get('/logout', [LoginController::class, 'logout'])->name('Logout');

Route::post('/pushtransaction', [TransactionController::class, 'pushTransaction'])->name('pushTransaction');
Route::get('/transaction', [TransactionController::class, 'showAllTransaction'])->name('transactionHistory');
Route::delete('/deleteitem/{id}', [TransactionController::class, 'deleteLogic'])->name('DeleteItem');
Route::post('/checkout/{id}', [TransactionController::class, 'checkout'])->name('CheckoutItem');

