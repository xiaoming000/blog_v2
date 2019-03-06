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

/*----------------博客前台----------------*/

// 主页
Route::get("/", "Home\IndexController@index");
// 文章详情页
Route::get("/article", "Home\ArticlesController@index");
