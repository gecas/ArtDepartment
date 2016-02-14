<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::get('/phpinfo', 'PagesController@phpinfo');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/apply', 'PagesController@apply');
Route::get('/about', 'PagesController@about');
Route::get('/our-heroes', 'PagesController@ourHeroes');
Route::get('/workshops-15/16', 'PagesController@workshops');
Route::get('/partners&supporters', 'PagesController@partners');
Route::get('/contact-us', 'PagesController@contact');
Route::get('/participant', 'PagesController@participants');
Route::get('/participants/category/{slug}','PagesController@participantsDetails');
Route::get('/pictures', 'PagesController@pictures');
Route::get('/pictures/category/{slug}','PagesController@picturesDetails');
Route::get('/video', 'PagesController@videos');

Route::post('/apply-form', 'ApplyController@applyFormData');
Route::post('/apply-open-sessions', 'ApplyController@applyOpenSessions');

Route::get('/apply/masterclass', 'PagesController@applyForm');

Route::get('/apply/open-sessions', 'PagesController@openSessionsForm');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/masterclass', 'DashboardController@masterclass');
Route::get('/dashboard/masterclass/{id}', 'DashboardController@masterclassShow');
Route::get('/dashboard/open_sessions', 'DashboardController@openSessions');
Route::get('/dashboard/open_sessions/{id}', 'DashboardController@openSessionsShow');

Route::resource('/dashboard/contact_us', 'ContactsController');
Route::post('/dashboard/contact_us/{id}/redaguoti', 'ContactsController@update');

Route::resource('/dashboard/workshops', 'WorkshopsController');
Route::post('/dashboard/workshops/{id}/redaguoti', 'WorkshopsController@update');

Route::resource('/dashboard/our-heroes', 'OurHeroesController');
Route::post('/dashboard/our-heroes/{id}/redaguoti', 'OurHeroesController@update');

Route::resource('/dashboard/apply/masterclass', 'MasterclassController');
Route::post('/dashboard/apply/masterclass/{id}/redaguoti', 'MasterclassController@update');

Route::resource('/dashboard/apply/openSessions', 'openSessionsController');
Route::post('/dashboard/apply/openSessions/{id}/redaguoti', 'openSessionsController@update');

Route::resource('/dashboard/master', 'MasterController');
Route::resource('/dashboard/open', 'OpenController');

Route::resource('/dashboard/countries', 'CountriesController');
Route::post('/dashboard/countries/{id}/redaguoti', 'CountriesController@update');

Route::resource('/dashboard/participants/categories', 'ParticipantsCategoriesController');
Route::post('/dashboard/participants/categories/{id}/redaguoti', 'ParticipantsCategoriesController@update');
Route::get('/dashboard/participants/categories/details/{slug}', 'ParticipantsController@participantsByCategory');

Route::resource('/dashboard/participants', 'ParticipantsController');
Route::get('/dashboard/participants/{id}/edit', 'ParticipantsController@edit');
//Route::post('/dashboard/participants', 'ParticipantsController@store');
Route::delete('/dashboard/participants/delete/{id}', 'ParticipantsController@destroy');

Route::post('/dashboard/participants/{id}/redaguoti', 'ParticipantsController@update');

Route::get('/dashboard/participants/{category}/create', 'ParticipantsController@create');
//Route::get('/dashboard/participants/details/{id}', 'ParticipantsController@show');


Route::resource('/dashboard/pictures/categories', 'PicturesCategoriesController');
Route::post('/dashboard/pictures/categories/{id}/redaguoti', 'PicturesCategoriesController@update');
Route::get('/dashboard/pictures/categories/details/{slug}', 'PicturesController@picturesByCategory');

Route::resource('/dashboard/pictures', 'PicturesController');
Route::post('/dashboard/pictures/photos', 'PicturesController@photos');
Route::get('/dashboard/pictures/{category}/create', 'PicturesController@create');
Route::get('/dashboard/pictures/{category}/edit', 'PicturesController@edit');
Route::post('/dashboard/pictures/{category}/redaguoti', 'PicturesController@update');
Route::post('/dashboard/pictures/{category}/redaguoti2', 'PicturesController@update2');

Route::resource('/dashboard/video', 'VideosController');
Route::post('/dashboard/video/{id}/redaguoti', 'VideosController@update');
