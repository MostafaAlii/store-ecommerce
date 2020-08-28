<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::group(['namespace' => 'Dashboard', 'middleware' => 'auth:admin'], function (){

});
