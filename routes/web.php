<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeddingController;
 
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

Route::get('/', function () {
    return redirect()->route('wedding', ['tamu' => 'invitation']);
});
Route::get('/{tamu}', [WeddingController::class, 'wedding'])->name('wedding');
