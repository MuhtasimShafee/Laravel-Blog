<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','App\Http\Controllers\PagesController@index');

Route::get('/About','App\Http\Controllers\PagesController@about');
Route::get('/services','App\Http\Controllers\PagesController@services');



/*Route::get('/users/{id}/{name}', function($id,$name){

    return 'this is user '.$name.' with an id of '.$id;

});
Route::get('/', function(){

    return view ('welcome');

});
*/

Route::resource('posts','App\Http\Controllers\PostsController');


Auth::routes();

Route::get('/Dashboard','App\Http\Controllers\DashboardController@index');


