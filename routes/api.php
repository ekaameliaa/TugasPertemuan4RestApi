<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
#import Animal Controller
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

#Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
 #   return $request->user();
#});
#endpoint animals
#Route::get('/animals', [AnimalController::class, 'index']);

#Route::post('/animals', [AnimalController::class, 'store']);

#Route::put('/animals/{id}', [AnimalController::class, 'update']);

#Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

#Routing untuk student
Route::get('/students', [StudentController::class, 'index']);

#Route post endpount student
Route::post('/students', [StudentController::class, 'store']);

#route get endpoint student
Route::get('/students/{id}', [StudentController::class, 'show']);

#Route put endpoint students
Route::put('/students/{id}', [StudentController::class, 'update']);

#Route delete endpoint student
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
