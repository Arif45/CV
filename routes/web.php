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

Route::get('/', function () {
    return view('index');



});


 Route::get('sample', function () {
    return view('buildcvhome');

    });

  Route::get('cv', function () {
    return view('cv');

    }); 


  Route::get('find', function () {
    return view('find');

    });

  Route::get('register', function () {
    return view('register');

    });

  Route::get('about', function () {
    return view('about');

    });

  Route::get('login', function () {
    return view('login');

    });
  Route::get('tips', function () {
    return view('tips');

    });

  Route::get('blog', function () {
    return view('blog');

    });
  Route::get('buildcv', function () {
    return view('buildcv');

    });
  Route::get('cv1', function () {
    return view('cv1');

    });
  Route::get('cv2', function () {
    return view('cv2');

    });

  Route::get('cv3', function () {
    return view('cv3');

    });

  Route::get('job', function () {
    return view('job');

    });

  Route::get('simple', function () {
    return view('simple');

    });

  Route::get('graduate', function () {
    return view('graduate');

    });
  Route::get('student', function () { 
    return view('student');

    });
  
  


Route:: get("editprofile", 'profilling@index');
Route:: post("store", 'profilling@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
