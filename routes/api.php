<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('jobs', JobController::class);
Route::resource('users', UserController::class);
Route::resource('companies', CompanyController::class);

// Route::get('/jobs', [JobController::class, 'index']);

// Route::get('/users', [UserController::class, 'index']);

// Route::get('/companies', [CompanyController::class, 'index']);

// Route::post('/jobs', [JobController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
