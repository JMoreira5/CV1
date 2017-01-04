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
// http://traveldigg.com/wp-content/uploads/2016/06/Louvre-Museum-Pictures.jpg

Route::get('/', function () {
    return view('welcome');
});
Route::get('items', ['as' => 'item.index', 'uses' => 'Backend\ItemsController@index']);
Route::get('item/crear', ['as' => 'item.create', 'uses' => 'Backend\ItemsController@create']);
Route::post('item/enviar/', ['as' => 'backend.item.store', 'uses' => 'Backend\ItemsController@store']);


Route::get('item/{id}',  ['as' => 'items.destroy', 'uses' => 'Backend\ItemsController@destroy']);
Route::get('item/{id}/edit', ['as' => 'items.edit', 'uses' => 'Backend\ItemsController@edit']);
Route::put('item/{id}', ['as' => 'backend.items.update', 'uses' => 'Backend\ItemsController@update']);