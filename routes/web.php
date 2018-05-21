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
    return view('Auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('registro', 'Auth\LoginController@registro')->name('registro');
Route::post('logado', 'Auth\LoginController@logado')->name('logado');
Route::get('/reset', 'Auth\LoginController@reset')->name('reset');
Route::get('/register', 'Auth\LoginController@register')->name('register');
Route::get('/createtask', 'DashboardController@createtask')->name('createtask');
Route::get('/createteam', 'DashboardController@createteam')->name('createteam');
Route::get('/creatework', 'DashboardController@creatework')->name('creatework');
Route::get('/edittask', 'DashboardController@edittask')->name('edittask');
Route::get('/createnotification', 'DashboardController@createnotification')->name('createnotification');
Route::get('/editprofile', 'DashboardController@editprofile')->name('editprofile');
Route::post('modalget', 'DashboardController@modalget')->name('modalget');
Route::post('dashboard', 'Auth\LoginController@dashboard')->name('dashboard');
Route::post('reset', 'Auth\LoginController@resetsenha')->name('resetsenha');
Route::post('options', 'DashboardController@options')->name('options');
Route::post('dashboard', 'DashboardController@dashboard')->name('dashboard');
Route::post('team', 'DashboardController@team')->name('team');
Route::post('task', 'DashboardController@task')->name('task');
Route::post('work', 'DashboardController@work')->name('work');
Route::post('notification', 'DashboardController@notification')->name('notification');
Route::post('modalpost', 'DashboardController@modalpost')->name('modalpost');
Route::post('confirmprofile', 'DashboardController@confirmprofile')->name('confirmprofile');
//Route::post('tarefas', 'DashboardController@tarefas')->name('tarefas');




