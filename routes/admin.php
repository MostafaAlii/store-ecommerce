<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Admin Routes
| Prefix For All Routes Is prefix ( admin );
|--------------------------------------------------------------------------
*/
// Laravel Localization Route Group ::
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {
    // Admin Authenticated Routes ::
    Route::group(['namespace' => 'Dashboard', 'prefix'  =>  'admin', 'middleware' => 'auth:admin'], function () {
        Route::get('/', 'DashboardController@index')->name('admin.dashboard'); // the first page admin visits if authenticated
        Route::get('logout', 'LoginController@logout')->name('admin.logout'); // Logout ::
        // Shipping Methods ::
        Route::group(['prefix' => 'settings'], function () {
            Route::get('shipping-methods/{type}', 'SettingsController@editShippingMethods')->name('edit.shipping.methods');
            Route::put('shipping-methods/{id}', 'SettingsController@updateShippingMethods')->name('update.shipping.methods');
        });
        // Member Profile ::
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', 'ProfileController@index')->name('show.user.profile');
            Route::get('edit', 'ProfileController@editProfile')->name('edit.user.profile');
            Route::put('update', 'ProfileController@updateProfile')->name('update.user.profile');
        });
    });
    // Users Routes ::
    Route::group(['namespace' => 'Dashboard', 'prefix'  =>  'admin', 'middleware' => 'guest:admin'], function () {
        Route::get('login', 'LoginController@login')->name('admin.login');
        Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
    });
});
