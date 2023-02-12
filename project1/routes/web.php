<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
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

Route::get('/admin',[adminController::class, 'showdata'])->name("admin.index");
Route::get('/create',[adminController::class, 'gotoCreate'])->name("create.index");
Route::post('/add',[adminController::class, 'add'])->name("add.create");
Route::delete('/delete/{id}',[adminController::class, 'deleteUser'])->name("delete.index");
Route::get('/update/{id}',[adminController::class, 'goToUpdate'])->name("update");
Route::put('/store/{id}',[adminController::class, 'storeData'])->name("store.update");


