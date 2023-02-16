<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'indexPage']);
Route::get('/login', [MainController::class, 'loginPage']);
Route::get('/forgot', [MainController::class, 'forgotPage']);
Route::get('/register', [MainController::class, 'registerPage']);
Route::get('/home', [MainController::class, 'homePage']);
Route::get('/termofservice', [MainController::class, 'termofservicePage']);
Route::get('/privacypolicy', [MainController::class, 'privacypolicyPage']);
Route::get('/wash&dry', [MainController::class, 'washNdryPage']);
Route::get('/map', [MainController::class, 'mapPage']);
Route::get('/wash&dry/washing', [MainController::class, 'washingPage']);
Route::get('/wash&dry/drying', [MainController::class, 'dryingPage']);
Route::get('/wash&dry/cart', [MainController::class, 'washNdrycartPage']);
Route::get('/wash&dry/payment', [MainController::class, 'washNdrypaymentPage']);
Route::get('/vending&cafe', [MainController::class, 'vendingNcafePage']);
Route::get('/vending&cafe/food&drink', [MainController::class, 'foodNdrinkPage']);
Route::get('/vending&cafe/food&drink/food', [MainController::class, 'foodPage']);
Route::get('/vending&cafe/food&drink/snack', [MainController::class, 'snackPage']);
Route::get('/vending&cafe/food&drink/drink', [MainController::class, 'drinkPage']);
Route::get('/vending&cafe/food&drink/bottle', [MainController::class, 'bottlePage']);
Route::get('/vending&cafe/cart', [MainController::class, 'vendingNcafecartPage']);
Route::get('/vending&cafe/payment', [MainController::class, 'vendingNcafepaymentPage']);
Route::get('/profile', [MainController::class, 'profilePage']);
Route::get('/profile/information', [MainController::class, 'infoPage']);
Route::get('/profile/information/edit', [MainController::class, 'infoeditPage']);
Route::get('/profile/orderhistory', [MainController::class, 'orderhistoryPage']);
Route::get('/profile/orderhistory/orderdetailwash&dry', [MainController::class, 'orderdetailwashNdryPage']);
Route::get('/profile/orderhistory/orderdetailwash&dry/receipt', [MainController::class, 'orderdetailwashNdryreceiptPage']);
Route::get('/profile/orderhistory/orderdetailwash&dry/evidence', [MainController::class, 'orderdetailwashNdryevidencePage']);
Route::get('/profile/orderhistory/orderdetailvending&cafe', [MainController::class, 'orderdetailvendingNcafePage']);
Route::get('/profile/orderhistory/orderdetailvending&cafe/receipt', [MainController::class, 'orderdetailvendingNcafereceiptPage']);
Route::get('/profile/orderhistory/orderdetailvending&cafe/evidence', [MainController::class, 'orderdetailvendingNcafeevidencePage']);
