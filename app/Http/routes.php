<?php
/*-------------------------------------------------------------------------
| Auth
|-------------------------------------------------------------------------*/

$a = 'auth.';
Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
Route::post('/login',           ['as' => $a . 'login-post',     'uses' => 'Auth\AuthController@postLogin']);
Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
Route::get('/register2',         ['as' => $a . 'register2',       'uses' => 'Auth\AuthController@getRegister2']);
Route::post('/register',        ['as' => $a . 'register-post',  'uses' => 'Auth\AuthController@postRegister']);
Route::get('/password',         ['as' => $a . 'password',       'uses' => 'Auth\PasswordResetController@getPasswordReset']);
Route::post('/password',        ['as' => $a . 'password-post',  'uses' => 'Auth\PasswordResetController@postPasswordReset']);
Route::get('/password/{token}', ['as' => $a . 'reset',          'uses' => 'Auth\PasswordResetController@getPasswordResetForm']);
Route::post('/password/{token}',['as' => $a . 'reset-post',     'uses' => 'Auth\PasswordResetController@postPasswordResetForm']);

/*--------------------------------------------------------------------------
| Social Login
|-------------------------------------------------------------------------*/
$s = 'social.';
Route::get('/social/redirect/{provider}',   ['as' => $s . 'redirect',   'uses' => 'Auth\AuthController@getSocialRedirect']);
Route::get('/social/handle/{provider}',     ['as' => $s . 'handle',     'uses' => 'Auth\AuthController@getSocialHandle']);

/*--------------------------------------------------------------------------
| Admin
|-------------------------------------------------------------------------*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:administrator'], function()
{
$a = 'admin.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'AdminController@getHome']);
});

/*--------------------------------------------------------------------------
| User
|-------------------------------------------------------------------------*/
Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function()
{
$a = 'user.';
    Route::get('/', ['as' => $a . 'home', 'uses' => 'UserController@getHome']);
});

/*--------------------------------------------------------------------------
| Authentication
|-------------------------------------------------------------------------
| ต้อง login ก่อนถึงจะเห็น
|
*/
Route::group(['middleware' => 'auth:all'], function()
{
    $a = 'authenticated.';
    Route::get('/logout', ['as' => $a . 'logout', 'uses' => 'Auth\AuthController@getLogout']);
});


/*--------------------------------------------------------------------------
| Public
|-------------------------------------------------------------------------
| หน้า public สามารถเห็นได้หมด
|
*/
$s = 'public.';
Route::get('/',         ['as' => $s . 'home',   'uses' => 'PagesController@getHome']);
Route::get('/scan', 'ScanController@index');
Route::get('/scan', ['as' => $s . 'scan',   'uses' => 'ScanController@index']);
Route::get('blog/admin', function () {
    return redirect('/blog/admin/post');
});
Route::get('/auth/login', function () {
    return redirect('/login');
});
Route::get('auth/logout', function () {
    return redirect('/logout');
});

/*--------------------------------------------------------------------------
| BLOG
|-------------------------------------------------------------------------*/

Route::group(['prefix' => 'blog'], function() {
    Flash::message('Welcome Aboard!');
    Route::get('/', 'BlogController@index');
});
    Route::get('blog/{slug}', 'BlogController@showPost');
    Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@showForm']);
    Route::post('contact', 'ContactController@sendContactInfo');
    Route::get('rss',['as' => 'rss', 'uses' => 'BlogController@rss']);
    Route::get('sitemap.xml', 'BlogController@siteMap');





/*----------------------------Admin area----------------------------------*/


Route::group([
    'namespace' => 'Admin',
    'middleware' => 'auth:all',
], function () {
    resource('blog/admin/post', 'PostController', ['except' => 'show']);
    resource('blog/admin/tag', 'TagController', ['except' => 'show']);
    get('admin/upload', 'UploadController@index');
    post('admin/upload/file', 'UploadController@uploadFile');
    delete('admin/upload/file', 'UploadController@deleteFile');
    post('admin/upload/folder', 'UploadController@createFolder');
    delete('admin/upload/folder', 'UploadController@deleteFolder');
});


/*----------------------------Admin area----------------------------------
    Route::group([
        'namespace' => 'Admin',
        'middleware' => 'auth:all',
    ], function () {
        $a = 'blog.admin';
        resource('admin/post',['as'=> $a . 'post', 'PostController'], ['except' => 'show']);
        resource('admin/tag', ['as'=> $a . 'post', 'TagController'], ['except' => 'show']);
        get('admin/upload', 'UploadController@index');
        post('admin/upload/file', 'UploadController@uploadFile');
        delete('admin/upload/file', 'UploadController@deleteFile');
        post('admin/upload/folder', 'UploadController@createFolder');
        delete('admin/upload/folder', 'UploadController@deleteFolder');
    });
});
/*---------------------------Logging in and out-------------------------------
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');
/*---------------------------END BLOG------------------------------------------*/

/*--------------------------------------------------------------------------
| Dashboard
|-------------------------------------------------------------------------*/

Route::group(['prefix' => 'dashboards', 'as'=>'dashboards'], function() {

    Route::resource('/','DashboardController');
    Route::get('/report/map', 'DashboardController@getMap');
    Route::get('/data', 'DashboardController@getDatatable');
    Route::get('/start', 'DashboardController@getStart');


//Company
    Route::resource('company', 'CompanyController');




});

Route::get('/lg', function(){
    return view('pages.home');
});

Route::get('/test', function(){
    return view('dashboard');
});


Route::get('/geo', 'GeoController@index');

Route::resource("products","ProductController");
Route::resource('person', 'PersonController');
Route::resource('company', 'CompanyController');

Route::get('/rest', function() {

    $client = new GuzzleHttp\Client([
        // Base URI is used with relative requests
        'base_uri' => 'https://api.iinbrand.com/service/',
        // You can set any number of default request options.
        //'timeout'  => 2.0,
        //'debug'    => true
    ]);
    
    //$client = new GuzzleHttp\Client('https://api.iinbrand.com/service/');

    $body = [
        'keys'    => 'VKSD-TB6Y-R2FB-AYH8',
        'location' => '12.3456,00.111111'
    ];

    $url = 'https://api.iinbrand.com/service/';


        $response = $client->request('POST', $client['base_uri'] ,[ 'body' => json_encode($body,true)]);

    $result = $response->getBody();

    return $result;
});

Route::get('/rests', 'DashboardController@getRest');
