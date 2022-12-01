<?php

use App\Http\Controllers\ShopController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// народнаяэкономика.рф
// Route::domain('xn--80aaaovlboecchebw6s7a.xn--p1ai')->group(function () {
// Route::post('sendOrder', [SendMsgController::class, 'sendTelegramm']);
Route::get('parser', [ShopController::class, 'parsingDataFiles']);
// });