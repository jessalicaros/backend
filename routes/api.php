<?php

use App\Http\Controllers\Api\CarouselItemsController;
use App\Http\Controllers\API\usercontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/carouselItems', [CarouselItemsController::class, 'index']);
Route::get('/carousel/{id}', [CarouselItemsController::class, 'show']);
Route::post('/carousel', [CarouselItemsController::class, 'store']);
Route::delete('/carousel/{id}', [CarouselItemsController::class, 'destroy']);

Route::get('/user', [usercontroller::class, 'index']);
Route::delete('/user/{id}', [usercontroller::class, 'destroy']);
Route::get('/user/{id}', [usercontroller::class, 'show']);
Route::post('/user', [usercontroller::class, 'store'])->name('user.store');
Route::put('/user/{id}', [usercontroller::class, 'update'])->name('user.update');
Route::put('/user/email/{id}', [usercontroller::class, 'email'])->name('user.email');
Route::put('/user/password/{id}', [usercontroller::class, 'password'])->name('user.password');
