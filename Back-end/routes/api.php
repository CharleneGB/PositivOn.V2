<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotationsController;

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

Route::get('BDD', [QuotationsController::class, 'index']);
Route::get('citation/{id}',[QuotationsController::class, 'show']);
Route::get('thème/{id}',[QuotationsController::class, 'type_show ']);
Route::post('création_citation',[QuotationsController::class, 'store']);