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

/* Route::get('', function () {
    return view('welcome');
});
*/
Route::get('', 'PagesController@getHome');

Route::get('/news', 'PagesController@getNews');

Route::get('/compas', 'PagesController@getCompas');

Route::get('/rapkreyol', 'PagesController@getRapkreyol');

Route::get('/zouk', 'PagesController@getZouk');

Route::get('/voodoo', 'PagesController@getVoodoo');

Route::get('/gallery', 'PagesController@getGallery');

Route::get('/plus', 'PagesController@getPlus');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');
