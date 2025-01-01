<?php

use App\Http\Controllers\CarbonFootprintController;
use App\Models\Article;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['web', 'auth:sanctum'])->get('/auth-status', function () {
    return response()->json([
        'isAuthenticated' => auth()->check(),
        'user' => auth()->user(),
    ]);
});

// Route::middleware('api')->get('/transport/calculate', [CarbonFootprintController::class, 'calculate'])
//     ->name('transport.calculate');

Route::get('/transport/calculate', [CarbonFootprintController::class, 'calculateTransport']);
Route::get('/food/calculate', [CarbonFootprintController::class, 'calculateFood']);
Route::get('/heating/calculate', [CarbonFootprintController::class, 'calculateHeating']);
Route::get('/seasonal-produce/calculate', [CarbonFootprintController::class, 'calculateSeasonalProduce']);

Route::middleware('api')->get('/articles', function () {
    return Article::with('auteurs')->published()->get();
});
