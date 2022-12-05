<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackwordController;
use App\Http\Controllers\ShopController;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'cors'], function () {
    Route::post('sendOrder', [BackwordController::class, 'sendOrder']);
    Route::get('sendOrder', [BackwordController::class, 'sendOrder']);
    Route::get('goods', [ShopController::class, 'show']);
    Route::get('parser', [ShopController::class, 'parsingDataFiles']);
});
