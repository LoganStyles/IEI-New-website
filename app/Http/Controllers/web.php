<?php

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
//Use this route for pages that needs no controller
// Route::get('/', function () {
//     return View::make('welcome');
// });
Route::resource('/', 'HomeController');
Route::resource('about/team', 'PagesController');
Route::resource('about', 'PagesController');
Route::resource('pension/schemes', 'PagesController');
Route::resource('investment/strategy', 'PagesController');
Route::resource('investment/portfolio', 'PagesController');
Route::resource('resources/calculator', 'PagesController');
Route::resource('resources/downloads', 'PagesController');
Route::resource('resources/prices', 'PagesController');
Route::resource('resources/reports', 'PagesController');
Route::resource('resources/statements', 'PagesController');
Route::resource('resources/rate', 'PagesController');
Route::resource('careers', 'PagesController');
Route::resource('contact/centers', 'PagesController');
Route::resource('contact/faq', 'PagesController');
Route::resource('contact', 'PagesController');

//Auth::routes();
//This group all the admin functions using the office route and automatically apply authentication to all routes having office

//To run the admin on subdomain, activate this
// Route::domain('office.myapp.com')->group(function () {
//     Auth::routes();
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
Route::group(['prefix' => 'office'], function() {
    Auth::routes();
});
Route::get('office', 'OfficeController@index')->name('office.home');
Route::get('office/menu', 'OfficeController@index')->name('office.menu.view');
Route::get('office/menu/create', 'OfficeController@index')->name('office.menu.create');
Route::post('office/menu/create', 'OfficeController@store')->name('office.menu.create');
Route::get('office/menu/modify/{menu}/', 'OfficeController@display')->name('office.menu.modify');
Route::post('office/menu/modify/{menu}/', 'OfficeController@save')->name('office.menu.modify');
Route::get('office/pages', 'OfficeController@index')->name('office.pages');
Route::get('office/pages/modify/{id}/', 'OfficeController@edit')->name('office.pages.modify');
Route::post('office/pages/modify/{id}/', 'OfficeController@update')->name('office.pages.modify');
Route::get('office/pages/modify/home', 'OfficeController@edit')->name('office.pages.home');
Route::post('office/pages/modify/home', 'OfficeController@update')->name('office.pages.home');
Route::get('office/pages/modify/about', 'OfficeController@edit')->name('office.pages.about');
Route::post('office/pages/modify/about', 'OfficeController@update')->name('office.pages.about');
Route::get('office/pages/modify/schemes', 'OfficeController@edit')->name('office.pages.schemes');
Route::post('office/pages/modify/schemes', 'OfficeController@update')->name('office.pages.schemes');
Route::get('office/pages/modify/strategy', 'OfficeController@edit')->name('office.pages.strategy');
Route::post('office/pages/modify/strategy', 'OfficeController@update')->name('office.pages.strategy');
Route::get('office/resources/', 'OfficeController@index')->name('office.resources');
Route::get('office/resources/{type}/', 'OfficeController@show')->name('office.resources.view');
Route::get('office/resources/{type}/create', 'OfficeController@display')->name('office.resources.create');
Route::post('office/resources/{type}/create', 'OfficeController@store')->name('office.resources.create');
Route::get('office/resources/{type}/modify/{id}/', 'OfficeController@display')->name('office.resources.resource.modify');
Route::post('office/resources/{type}/modify/{id}/', 'OfficeController@save')->name('office.resources.resource.modify');
Route::get('office/profile', 'UserController@index')->name('office.users.profile');
Route::post('office/profile', 'UserController@update')->name('office.users.profile');
Route::get('office/accounts', 'UserController@index')->name('office.users.users');
Route::get('office/accounts/delete/{id}/', 'UserController@destroy')->name('office.users.delete');
