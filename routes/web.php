<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function(){
    return view('login');

})->name('login');


Route::post('import_csv', [ImportController::class, 'importCsv'])->name('import_csv');
Route::get('import_page',[ImportController::class,'import_page'])->name('import');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::get('/index', [LoginController::class, 'main_page'])->name('index')->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

