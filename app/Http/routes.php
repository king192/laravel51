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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'WelcomeController@index');
Route::get('/', 'Test\MailController@test')->middleware(['test']);
Route::controller('ttt','Test\MailController');
Route::get('send','Test\MailController@sendEmailReminder');
Route::get('info',['middleware'=>'test','uses'=>'Test\MailController@info']);
Route::get('mail/send','MailController@send');
Route::get('mail/zhanghu',['as'=>'hello','uses'=>'MailController@zhanghu']);
Route::get('test',['middleware'=>'test',function(){
	// abort(404);
	echo 'test';
	echo route('hello');
}]);
Route::get('upload_img','post\FileController@index');
//图片上传
Route::post('upload_img','post\FileController@imgUpload');
// Route::get('home', 'HomeController@index');
// Route::controllers([  
//     'auth' => 'Auth\AuthController',
//     'password' => 'Auth\PasswordController',
// ]);

// // Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');
// Route::get('user/profile', ['as' => 'profile', function () {
//     //
// }]);
// // Route::get('user/profile', [
// //     'as' => 'profile', 'uses' => 'UserController@showProfile'
// // ]);
// Route::get('profile','UserController@test');

Route::group(['prefix'=>'post','middleware'=>'test'], function(){
  Route::get('/', 'post\HomeController@index')->middleware(['test']);
  Route::get('create', 'post\HomeController@create');
  Route::post('/', 'post\HomeController@store');
  Route::get('{id}', 'post\HomeController@show');
  Route::get('{id}/edit', 'post\HomeController@edit');
  Route::put('{id}', 'post\HomeController@update');
  Route::delete('{id}', 'post\HomeController@destroy');
});


Route::controller('square', 'square\SquareController');

Route::resource('source', 'source\HomeController');



Route::get('user/{id}', function($id)
{
return 'User '.$id;
})
->where('id', '[0-9]+');


Route::get('user/{name?}', function($name = null)
{
return $name;
});
// Event::listen('404', function() {   
//     return Response::error('404');   
// }); 
use Illuminate\Http\Response;
Route::get('heade', function () {
	$res = json_encode(array('hello'=>'hi'));

    return (new Response($res, 200))
                  ->header('Content-Type', 'text/html');
});


Route::get('download',function(){
	return response()->download('robots.txt');
});

Route::get('blade', function () {
    return view('layouts/child',['time'=>time()]);
});

Route::controller('makecss','css\makecssController');