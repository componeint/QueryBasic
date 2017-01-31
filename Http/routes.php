<?php

Route::group(['middleware' => 'web', 'prefix' => 'querybasic', 'namespace' => 'App\\Components\QueryBasic\Http\Controllers'], function()
{
    Route::get('/', 'QueryBasicController@index');
});
