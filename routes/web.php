<?php

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

Route::get('/', function () {
    return view('dashboard.layouts.sidebar');
});


Route::group(['prefix'=>'dashboard','as'=>'dashboarf'],function(){
    Route::get('/settings', function () {
        return view('dashboard.settings');
    })->name('dashboard.settings');
    Route::post('/settings/update',[SettingController::class,'update'])->name('settings.update');
});
