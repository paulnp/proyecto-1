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

//THIS READS AS: "When i get the Homepage route, return the view called "welcome"
Route::get('/', function () {
    return view('welcome');
});


Route::get('/readme',function(){
    return view('/readme');
})->name('readme');

Route::resources([
    'lists' => 'listsController',
    'games' => 'gamesController'
    
]);

Route::resource('profiles','profileController')->only('show','edit','update','destroy');

Route::get('/publicLists', 'publicListsController@index')->name('public_Lists');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
