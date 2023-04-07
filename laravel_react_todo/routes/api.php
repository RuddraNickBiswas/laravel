<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\UserAddressController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserSkillsController;
use App\Http\Controllers\UserSocialMediaController;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Models\UserAddress;
use App\Models\UserSocialMedia;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::controller(UserController::class)->group(function (){
        Route::get('/user', 'index');
        Route::get('/user/show/{userId}', 'show');
        Route::post('/user/update', 'updateUserDetails');
        Route::get('/user/information', 'information');
    });

    // Route::controller(UserSocialMediaController::class)->group(function(){
    //     Route::get('user/slink', 'index');
    //     Route::post('user/slink/store', 'store');
    //     Route::patch('user/slink/update/{id}', 'update');
    //     Route::delete('user/slink/delete/{id}', 'destroy');
    // });
    // Route::controller(UserAddressController::class)->group(function(){
    //     Route::get('user/address', 'index');
    //     Route::post('user/address/store', 'store');
    //     Route::patch('user/address/update/{id}', 'update');
    //     Route::delete('user/address/delete/{id}', 'destroy');
    // });
    Route::apiResource('user/slink', UserSocialMediaController::class);
    Route::apiResource('user/address', UserAddressController::class);
    Route::apiResource('user/skills', UserSkillsController::class);
});


Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/all', [UserController::class, 'all']);
