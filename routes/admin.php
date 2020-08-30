<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Routes
| Prefix For All Routes Is prefix ( admin );
|--------------------------------------------------------------------------
*/
// Admin Authenticated Routes ::
Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function (){
    Route::get('/', 'DashboardController@index')->name('admin.dashboard'); // the first page admin visits if authenticated
});

// Users Routes ::
Route::group(['namespace' => 'Dashboard', 'middleware' => 'guest:admin'], function (){
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
});
