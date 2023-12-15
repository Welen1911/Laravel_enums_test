<?php

use App\Enums\SituacaoStatus;
use App\Http\Controllers\SituacaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SituacaoController::class, 'index']);

Route::get('/teste', function () {
    dd(array_column(SituacaoStatus::cases(), 'name'));
});
