<?php

$s = 'public.';
Route::get('/',         ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);

$a = 'auth.';
Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login',           ['as' => $a . 'login-post',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
Route::post('/register',        ['as' => $a . 'register-post',  'uses' => 'Auth\AuthController@postRegister']);
Route::get('/password',         ['as' => $a . 'password',       'uses' => 'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password',        ['as' => $a . 'password-post',  'uses' => 'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => $a . 'reset',          'uses' => 'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => $a . 'reset-post',     'uses' => 'Auth\PasswordResetController@postPasswordResetForm']);


$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);


Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
$a = 'admin.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'AdminController@getHome']);
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
$a = 'user.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'UserController@getHome']);
});

Route::group(['middleware' => 'auth:all'], function()
{
    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});


Route::group(['prefix' => 'dashboards'], function()
{
    Route::resource('/', 'DashboardController');
    Route::get('/map', 'DashboardController@getMap');

//Company
    Route::resource('company', 'CompanyController');




});

/*
// Blog pages
Route::get('/blog', function(){
    Flash::message('Welcome Aboard!');
    Route::get('/', 'BlogController@index');
});

    Route::get('/{slug}', 'BlogController@showPost');
    Route::get('contact', 'ContactController@showForm');
    Route::post('contact', 'ContactController@sendContactInfo');
    Route::get('rss',['as' => 'rss', 'uses' => 'BlogController@rss']);
    Route::get('sitemap.xml', 'BlogController@siteMap');





// Admin area
get('admin', function () {
    return redirect('/admin/post');
});
$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth:all',
], function () {
    resource('admin/post', 'PostController', ['except' => 'show']);
    resource('admin/tag', 'TagController', ['except' => 'show']);
    get('admin/upload', 'UploadController@index');
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});

// Logging in and out
//get('/auth/login', 'Auth\AuthController@getLogin');
//post('/auth/login', 'Auth\AuthController@postLogin');
//get('/auth/logout', 'Auth\AuthController@getLogout');
*/

Route::get('/lg', function(){
    return view('pages.home');
});


Route::get('/test', function(){
    return view('pages.test');
});


Route::get('/geo', 'GeoController@index');

Route::get('/scan', 'ScanController@index');
