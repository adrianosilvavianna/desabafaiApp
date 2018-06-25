<?php

Route::group([

    'prefix' => 'auth'

], function ($router) {

    Route::post('login',    'Auth\AuthController@login');
    Route::post('logout',   'Auth\AuthController@logout');
    Route::post('refresh',  'Auth\AuthController@refresh');
    Route::post('me',       'Auth\AuthController@me');
    Route::post('payload',       'Auth\AuthController@payload');
    Route::post('signup',       'Auth\AuthController@signUp');

});

Route::group(['middleware' => 'jwt'], function(){

    Route::apiResource("/question",                  "QuestionController");
    Route::apiResource("/category",                  "CategoryController");
    Route::apiResource("/question/{question}/reply", "ReplyController");

    Route::get('/like/{reply}',                      "LikeController@likeIt");
    Route::delete('/like/{reply}',                   "LikeController@unLikeIt");

});

