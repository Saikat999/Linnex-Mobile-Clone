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

Route::get('/', 'Controller@landpage')->name('index');


Route::get('/mobile', 'Controller@index')->name('index');
Route::get('/contact-us', 'Controller@contactpage')->name('contact-us');
Route::get('/about-us', 'Controller@aboutpage')->name('about-us');
Route::get('/faq', 'Controller@faqpage')->name('faq');

Route::get('/smartphone', 'PagesController@smartPhone')->name('smart-phone');
Route::get('/feature-phone', 'PagesController@featurePhone')->name('feature-phone');
Route::get('/store-locator', 'PagesController@storeLocator')->name('store-locator');
Route::get('/services', 'PagesController@Services')->name('services');


// Admin routes
Route::get('admin/home','AdminController@index');


//Smart phone routes
Route::get('admin/smart-phone/all','Admin\SmartPhoneController@index')->name('all.smartphone');
Route::get('admin/smart-phone/add','Admin\SmartPhoneController@create')->name('add.smartphone');
Route::post('admin/smart-phone/store','Admin\SmartPhoneController@store')->name('store.smartphone');
Route::get('smart-phone/delete/{id}','Admin\SmartPhoneController@DeleteSmartphone')->name('delete.smartphone');
Route::get('smart-phone/edit/{id}','Admin\SmartPhoneController@EditSmartphone')->name('edit.smartphone');
Route::post('smart-phone/update/{id}','Admin\SmartPhoneController@UpdateSmartphone')->name('update.smartphone');


//Feature phone routes
Route::get('admin/feature-phone/all','Admin\FeaturePhoneController@index')->name('all.featurephone');
Route::get('admin/feature-phone/add','Admin\FeaturePhoneController@create')->name('add.featurephone');
Route::post('admin/feature-phone/store','Admin\FeaturePhoneController@store')->name('store.featurephone');
// Route::get('feature-phone/delete/{id}','Admin\FeaturePhoneController@DeleteFeaturephone')->name('delete.featurephone');
// Route::get('feature-phone/edit/{id}','Admin\FeaturePhoneController@EditFeaturephone')->name('edit.featurephone');
// Route::post('feature-phone/update/{id}','Admin\FeaturePhoneController@UpdateFeaturephone')->name('update.featurephone');



