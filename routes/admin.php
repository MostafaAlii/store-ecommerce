<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Routes
| Prefix For All Routes Is prefix ( admin );
|--------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function (){
    //Route::get('/', 'DashboardController@index')->name('admin.dashboard'); // the first page admin visits if authenticated
    Route::get('users', function () {
        return 'in admin';
    });
});

Route::group(['namespace' => 'Dashboard'], function (){
    Route::get('login', 'LoginController@login')->name('admin.login');
    Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
});
