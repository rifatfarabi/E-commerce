<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Frontend\MainController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;
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

Route::get('/', [MainController::class,'index'])->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/login', [LoginController::class,'showAdminLogin'])->name('admin.login');


Route::group(["middleware" => "auth"],function() {
    Route::get('admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('dashboard.admin');
});

Route::group(["middleware" => "auth"], function()
{
    Route::get('customer/dashboard', [DashboardController::class, 'customerDashboard'])->name('dashboard.customer');
}
);
