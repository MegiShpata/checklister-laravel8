<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCRUDController;
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
    return redirect()-> route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/demo', [App\Http\Controllers\TodosController::class, 'index'])->name('demo');
Route::resource('todo', 'App\Http\Controllers\TodosController');

Route::resource('user', 'App\Http\Controllers\UserCRUDController');

//Route::resource('user', UserCRUDController::class);

Route::get('tenants/change/{tenantID}', [App\Http\Controllers\TenantController::class, 'changeTenant'])->name('tenant.change');
