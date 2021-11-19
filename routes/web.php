<?php

use App\Http\Controllers\UserController;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/discount', function () {
//    return view('discount');
//});
//
//Route::post('/discount', function (\Illuminate\Http\Request $request) {
//    $productDescription = $request->input('description');
//    $productPrice = $request->input('price');
//    $discountPercent = $request->input('percent');
//    $discountAmount = $productPrice * $discountPercent / 100;
//    $realPrice = $productPrice - $discountAmount;
//
//    return view('show', compact('productDescription', 'productPrice', 'discountPercent', 'discountAmount', 'realPrice'));
//});
Route::prefix('users')->group(function (){
    Route::get('/',[UserController::class,'index'])->name("users.index");
    Route::get('/user/{id}',[UserController::class,'show'])->name("users.show");
    Route::get('/create',[UserController::class,'showFormCreate'])->name("users.create");
    Route::post('/create',[UserController::class,'store'])->name("users.store");
    Route::get('/delete/{id}',[UserController::class,'delete'])->name("users.delete");
    Route::get('/edit/{id}',[UserController::class,'showFormEdit'])->name("users.showFormEdit");
    Route::post('/edit/{id}',[UserController::class,'update'])->name("users.update");

});



