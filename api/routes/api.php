<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/generation/LettreMotivation', [App\Http\Controllers\DynamicPDFController::class,'LettreMotivation'] );
Route::post('/generation/Contrat', [App\Http\Controllers\DynamicPDFController::class,'Contrat'] );
Route::post('/generation/AttestationDeStage', [App\Http\Controllers\DynamicPDFController::class,'AttestationDeStage'] );
Route::post('/generation/FicheDePaie', [App\Http\Controllers\DynamicPDFController::class,'FicheDePaie'] ); 
Route::post('/generation/CahierDeCharge', [App\Http\Controllers\DynamicPDFController::class,'CahierDeCharge'] );