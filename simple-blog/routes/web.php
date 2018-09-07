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

/*Route::get('/', function () {
   // return view('welcome');
});
*/// Sửa đường dẫn trang chủ mặc định




Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

route::group(['middleware'=>'auth'],function(){
	route::group(['prefix'=>'articles'],function(){	
		Route::get('/',[
	'as'=>'home',
	'uses'=>'PagesController@index'
]);

Route::get('/articles',[
	'as'=>'articleController',
	'uses'=>'ArticleController@index']);

Route::get('articles/new',[
	'as'=>'article.new',
	'uses'=>'ArticleController@newArticle'
]);
Route::get('/articles/{id}/edit',[
	'as'=>'article.edit',
	'uses'=>'ArticleController@editArticle'

]);

Route::post('/articles',[
	'as'=>'article.store',
	'uses'=>'ArticleController@store'

]);
Route::get('/articles/{id}',[
	'as'=> 'article.show',	
	'uses'=>'ArticleController@showArticle'
]);



Route::post('/articles/{id}',[
	'as'=>'article.update',
	'uses'=>'ArticleController@update'
]);
Route::post('/articles/{id}/destroy',[
	'as'=>'article.destroy',
	'uses'=>'ArticleController@destroy'
]);
	});
});