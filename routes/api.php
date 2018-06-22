<?php

Route::apiResource("/question",                  "QuestionController");
Route::apiResource("/category",                  "CategoryController");
Route::apiResource("/question/{question}/reply", "ReplyController");

Route::get('/like/{reply}',                      "LikeController@store");
Route::delete('/like/{reply}',                   "LikeController@delete");