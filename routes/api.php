<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PhonesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('telefones', [PhonesController::class, 'index']);
Route::get('telefones/{phone}', [PhonesController::class, 'show']);
Route::post('telefones', [PhonesController::class, 'store']);
Route::put('telefones/{phone}', [PhonesController::class, 'update']);
Route::delete('telefones/{phone}', [PhonesController::class, 'destroy']);
