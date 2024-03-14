<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;
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

Route::get("/jarmuvek",[AutoController::class,"index"]);
Route::post("/jarmuvek",[AutoController::class,"create"]);
Route::put("/jarmuvek/{id}",[AutoController::class,"update"]);
Route::delete("/jarmuvek/{id}",[AutoController::class,"delete"]);