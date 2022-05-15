<?php

use App\Services\Disk\Disk;
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

Route::get('/', ['App\Http\Controllers\HomepageController', 'index'])
    ->name('home');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('/', ['App\Http\Controllers\Dashboard\DashboardHomeController', 'index'])
        ->name('home');

    Route::resource('project', 'App\Http\Controllers\Dashboard\ProjectController');
});
