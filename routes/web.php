<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\authController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//products admin
Route::get('/admin/add-product',[ProductController::class, 'addProduct']);
Route::post('/admin/add-product',[ProductController::class, 'store']);
Route::get('/admin/manage-products',[ProductController::class, 'manageProduct']);
Route::delete('/admin/delete-product',[ProductController::class, 'delete']);
Route::get('/admin/edit-product/{id}',[ProductController::class, 'edit']);
Route::put('/admin/update-product',[ProductController::class, 'update']);

//All product page
Route::get('/products',[ProductController::class, 'allProducts']);

// Register page 
Route::get('/sign-up',[authController::class, 'registerPage']);
Route::post('/sign-up',[authController::class, 'register']);

//Login Page
Route::get('/sign-in',[authController::class, 'loginPage']);
Route::post('/sign-in',[authController::class, 'login']);
//  Home page 
Route::get('/',[Controller::class, 'index']);