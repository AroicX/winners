<?php


use Inertia\Inertia;
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


Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Auth::routes();

 Route::get('/reports', 'MemberController@index');
 Route::post('/create-member', 'MemberController@store');
 
 

 Route::get('/contact', function () {
    // return view('welcome');
 
    return Inertia::render('Contact' ,[
        'foo' => 'bar'
    ]);
 
 
 });

 