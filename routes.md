+--------+----------+----------------------------+----------------------+-------------------------------------------------------------------------+--------------------+
| Domain | Method   | URI                        | Name                 | Action                                                                  | Middleware         |
+--------+----------+----------------------------+----------------------+-------------------------------------------------------------------------+--------------------+
|        | GET|HEAD | /                          | public.home          | App\Http\Controllers\PagesController@getHome                            |                    |
|        | GET|HEAD | admin                      | admin.home           | App\Http\Controllers\AdminController@getHome                            | auth:administrator |
|        | GET|HEAD | blog                       |                      | App\Http\Controllers\BlogController@index                               |                    |
|        | GET|HEAD | blog/{slug}                |                      | App\Http\Controllers\BlogController@showPost                            |                    |
|        | GET|HEAD | contact                    |                      | App\Http\Controllers\ContactController@showForm                         |                    |
|        | POST     | contact                    |                      | App\Http\Controllers\ContactController@sendContactInfo                  |                    |
|        | POST     | login                      | auth.login-post      | App\Http\Controllers\Auth\AuthController@postLogin                      |                    |
|        | GET|HEAD | login                      | auth.login           | App\Http\Controllers\Auth\AuthController@getLogin                       |                    |
|        | GET|HEAD | logout                     | authenticated.logout | App\Http\Controllers\Auth\AuthController@getLogout                      | auth:all           |
|        | GET|HEAD | password                   | auth.password        | App\Http\Controllers\Auth\PasswordResetController@getPasswordReset      |                    |
|        | POST     | password                   | auth.password-post   | App\Http\Controllers\Auth\PasswordResetController@postPasswordReset     |                    |
|        | POST     | password/{token}           | auth.reset-post      | App\Http\Controllers\Auth\PasswordResetController@postPasswordResetForm |                    |
|        | GET|HEAD | password/{token}           | auth.reset           | App\Http\Controllers\Auth\PasswordResetController@getPasswordResetForm  |                    |
|        | POST     | register                   | auth.register-post   | App\Http\Controllers\Auth\AuthController@postRegister                   |                    |
|        | GET|HEAD | register                   | auth.register        | App\Http\Controllers\Auth\AuthController@getRegister                    |                    |
|        | GET|HEAD | rss                        |                      | App\Http\Controllers\BlogController@rss                                 |                    |
|        | GET|HEAD | sitemap.xml                |                      | App\Http\Controllers\BlogController@siteMap                             |                    |
|        | GET|HEAD | social/handle/{provider}   | social.handle        | App\Http\Controllers\Auth\AuthController@getSocialHandle                |                    |
|        | GET|HEAD | social/redirect/{provider} | social.redirect      | App\Http\Controllers\Auth\AuthController@getSocialRedirect              |                    |
|        | GET|HEAD | user                       | user.home            | App\Http\Controllers\UserController@getHome                             | auth:user          |
+--------+----------+----------------------------+----------------------+-------------------------------------------------------------------------+--------------------+
