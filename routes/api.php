<?php

use Illuminate\Http\Request;

Route::post('register','Api\Auth\RegisterController@register');

Route::post('login','Api\Auth\LoginController@login');
Route::post('refresh','Api\Auth\LoginController@refresh');


Route::middleware('auth:api')->group(function () {
  Route::post('logout','Api\Auth\LoginController@logout');
  Route::get('get_tipo','AreaController@get_tipo');
  Route::get('get_zonas_distrito','AreaController@get_zonas');
});
Route::get('get_areas','AreaController@get_areas');