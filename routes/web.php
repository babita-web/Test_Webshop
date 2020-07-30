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


//Route::get('/', 'ProductsController@index');

//Route::get('/addcart/{id}','ProductsController@add_cart');
//Route::get('/cart', 'ProductsController@cart');



//Route::put('/add_cart/{id}', 'ProductsController@added');
//Route::delete('/delete/{id}', 'ProductsController@delete');
//Route::get('/register','ProductsController@create');







Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    });




    Route::get('/users', 'Admin\UserController@registered');
    Route::get('/tasks', 'Admin\TaskController@assigned');


    Route::get('/edit-role/{id}', 'Admin\DashboardController@edit');
    Route::put('/edited/{id}', 'Admin\DashboardController@update');
    Route::delete('/delete/{id}', 'Admin\DashboardController@delete');
    Route::delete('/deletetask/{id}', 'Admin\TaskController@deletetask');
    Route::post('/add_task', 'Admin\TaskController@addtask');


    Route::get('/edit-task/{id}', 'Admin\TaskController@edit');
    Route::get('/user-role', 'Admin\UserController@index');
    Route::get('/create-user','Admin\UserController@create');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


