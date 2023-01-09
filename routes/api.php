<?php

use App\Models\Job;
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

Route::get('/jobs', function () {
    return Job::all();
});

Route::post('/jobs', function () {
    return Job::create([
        'name' => 'Job One',
        'description' => 'description',
        'location' => 'location',

    ]);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
