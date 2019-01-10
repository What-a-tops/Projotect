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

// Route::get('/', function () {
//     return view('welcome');
// });
//
// Auth::routes();
//
// Route::get('/', 'PostController@home');
// // Route::post('/login','UserController@login');
// Route::post('/login', 'Auth\LoginController@login');



Auth::routes();
Route::get('/user','UserController@user');
Route::resource('/posts','PostController');
// Route::get('auth/logout', 'Auth\AuthController@logout');
Route::group(['middleware' => ['web', 'auth']], function(){
  // Route::get('/', function(){
  //   return view('auth/login');
  // });
  Route::get('/', function(){
    if (Auth::user()->admin == 0) {
      return view('home');
    }else{
      $users['users'] = \App\User::all();
      return view('adminhome', $users);
    }
  });
});
