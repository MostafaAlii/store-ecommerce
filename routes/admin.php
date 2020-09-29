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
        /********************************* Start Dashboard & Logout Routes ********************************/
        Route::get('/', 'DashboardController@index')->name('admin.dashboard'); // the first page admin visits if authenticated
        Route::get('logout', 'LoginController@logout')->name('admin.logout'); // Logout ::
        /********************************* End Dashboard & Logout Routes *********************************/

        /********************************* Start Admins Pages Routes ************************************/
        Route::group(['prefix' => 'admins'], function () {
            Route::get('/', 'AdminController@index')->name('admin.all_admins');
        });
        /********************************* End Admins Pages Routes ************************************/

        /******************************** Start Shipping Methods *************************************/
        Route::group(['prefix' => 'settings'], function () {
            Route::get('shipping-methods/{type}', 'SettingsController@editShippingMethods')->name('edit.shipping.methods');
            Route::put('shipping-methods/{id}', 'SettingsController@updateShippingMethods')->name('update.shipping.methods');
        });
        /******************************** End Shipping Methods **************************************/

        /******************************** Start Member Profile ************************************/
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', 'ProfileController@index')->name('show.profile');
            Route::get('create', 'ProfileController@create')->name('admin.create_admin_profile');
            Route::post('store', 'ProfileController@store')->name('new.admin.profile.store');
            Route::get('edit', 'ProfileController@editProfile')->name('edit.profile');
            Route::put('update', 'ProfileController@updateProfile')->name('update.profile');
        });
        /******************************** End Member Profile ************************************/
        
        /*************************** Start End Category & Sub-Category **************************/
        Route::group(['prefix' => 'main_categories'], function () {
            Route::get('/', 'MainCategoriesController@index')->name('admin.mainCategories');
            Route::get('create', 'MainCategoriesController@create')->name('admin.create.mainCategories');
            Route::post('store', 'MainCategoriesController@store')->name('admin.store.mainCategories');
            Route::get('edit/{id}', 'MainCategoriesController@edit')->name('admin.edit.mainCategories');
            Route::post('update/{id}', 'MainCategoriesController@update')->name('admin.update.mainCategories');
            Route::get('delete/{id}', 'MainCategoriesController@destroy')->name('admin.delete.mainCategories');
        });
        /***************** Sub Category ******************/
        Route::group(['prefix' => 'sub_categories'], function () {
            Route::get('/', 'SubCategoriesController@index')->name('admin.subCategories');
            Route::get('create', 'SubCategoriesController@create')->name('admin.create.subCategories');
            Route::post('store', 'SubCategoriesController@store')->name('admin.store.subCategories');
            Route::get('edit/{id}', 'SubCategoriesController@edit')->name('admin.edit.subCategories');
            Route::post('update/{id}', 'SubCategoriesController@update')->name('admin.update.subCategories');
            Route::get('delete/{id}', 'SubCategoriesController@destroy')->name('admin.delete.subCategories');
        });
        /*************************** End Category & Sub-Category *******************************/
    });

    /******************************** Start Default User Login Route *****************************/
    Route::group(['namespace' => 'Dashboard', 'prefix'  =>  'admin', 'middleware' => 'guest:admin'], function () {
        Route::get('login', 'LoginController@login')->name('admin.login');
        Route::post('login', 'LoginController@postLogin')->name('admin.post.login');
    });
    /******************************** End Default User Login Route *******************************/
});
