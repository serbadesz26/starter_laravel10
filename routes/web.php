<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\MenuGroupController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\PelatihanController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::permanentRedirect('/', '/login');

Route::group(['middleware' => ['web', 'auth', 'verified']], function () {
    Route::resource('dashboard', DashboardController::class)->only('index');
    Route::resource('user', UserManagementController::class)->only('index', 'store', 'update', 'destroy');
    Route::prefix('user')->group(function () {
        Route::resource('profile', UserProfileController::class)->only('index');
    });
    Route::resource('setting', SettingController::class)->only('index', 'update');

    Route::resource('route', RouteController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('role', RoleController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('permission', PermissionController::class)->only('index', 'store', 'update', 'destroy');

    Route::resource('menu', MenuGroupController::class)->only('index', 'store', 'update', 'destroy');
    Route::resource('menu.item', MenuItemController::class)->only('index', 'store', 'update', 'destroy');

    Route::resource('pelatihan', PelatihanController::class)->only('index');
});
