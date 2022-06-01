<?php
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurrencyController;
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

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/transactions', [TransactionsController::class, 'index']);
Route::get('/currencies', [CurrencyController::class, 'index']);
Route::get('/users', [AuthController::class, 'index']);
Route::post('/transactions', [TransactionsController::class, 'store']);
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    
    
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::middleware('auth:api')->get('/user', function () {
    return $request->user();
});
