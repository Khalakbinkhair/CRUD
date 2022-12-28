<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;


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

Route::get('/record', function () {
    return view('record');
});
Route::get('/record',[RecordController::class,'record'])->name('record');
Route::get('/newfile',[RecordController::class,'newfile'])->name('newfile');
Route::post('/newfile',[RecordController::class,'regsubmit'])->name('regsubmit');
Route::get('/edit/{id}',[RecordController::class,'edit'])->name('edit');
Route::post('/editsubmit',[RecordController::class,'editsubmit'])->name('editsubmit');
Route::get('/delete/{id}',[RecordController::class,'delete'])->name('delete');



