<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\indexController;
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
Route::get('/',[indexController::class,'index']);
Route::get('/aboutindex', [indexController::class, 'aboutindex']);
Route::get('/register', [indexController::class, 'register']);
Route::get('/login', [indexController::class, 'login']);
Route::get('/gallery', [indexController::class, 'gallery']);
Route::get('/contact', [indexController::class, 'contact']);
Route::post('/regaction', [indexController::class, 'regaction']);
Route::post('/loginaction', [indexController::class, 'loginaction']);
Route::post('/contactaction', [indexController::class, 'contactaction']);





Route::get('/admin',[adminController::class,'index']);
Route::get('/addabout', [adminController::class, 'addabout']);
Route::get('/viewabout', [adminController::class, 'viewabout']);
Route::get('/viewuser', [adminController::class, 'viewuser']);
Route::get('/addproduct', [adminController::class, 'addproduct']);
Route::get('/viewproduct', [adminController::class, 'viewproduct']);
Route::get('/viewcomplaints', [adminController::class, 'viewcomplaints']);
Route::get('/viewprofile', [adminController::class, 'viewprofile']);
Route::get('/vieworder', [adminController::class, 'vieworder']);
Route::get('/viewpayments', [adminController::class, 'viewpayments']);
Route::post('/aboutaction', [adminController::class, 'aboutaction']);
Route::get('/editabout/{id}', [adminController::class, 'editabout']);
Route::post('/editaboutaction/{id}', [adminController::class, 'editaboutaction']);
Route::post('/addproductaction', [adminController::class, 'addproductaction']);
Route::get('/editproduct/{id}', [adminController::class, 'editproduct']);
Route::post('/editproductaction/{id}', [adminController::class, 'editproductaction']);
Route::get('/approved/{id}',[adminController::class,'approved']);
Route::get('/declined/{id}', [adminController::class, 'declined']);










Route::get('/index',[userController::class,'index']);
Route::get('/profile',[userController::class,'profile']);
Route::post('/profileaction/{id}',[userController::class,'profileaction']);
Route::get('/viewcart',[userController::class,'viewcart']);
Route::get('/vieworder',[userController::class,'vieworder']);
Route::get('/about',[userController::class,'about']);
Route::get('/logout',[userController::class,'logout']);
Route::get('/addtocart/{id}',[userController::class,'addtocart']);
Route::post('/addtocartaction/{id}',[userController::class,'addtocartaction']);
Route::get('/removeproduct/{id}',[userController::class,'delete']);
Route::get('/confirm/{id}',[userController::class,'order']);
Route::get('/buyproduct/{total}',[userController::class,'buyproduct']);
Route::get('/proceedtobuy',[userController::class,'proceedtobuy']);
