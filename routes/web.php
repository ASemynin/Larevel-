<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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
    return view('welcome');
});

Route::view('/image/upload', 'image')->name('image.upload.get');
Route::post('/image/upload', [ImageController::class, 'Upload']) -> name('image.upload');

Route::get('/viewImage', [ImageController::class, 'viewImg']);
//Route::view('/viewImage', 'viewImage');
