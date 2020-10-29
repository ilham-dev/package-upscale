<?php

Route::group(['namespace' => 'ilhamdev\upscale\controllers'], function()
{
    Route::get('getuser', 'IndexController@getuser');
    Route::get('getuser/{id}', 'IndexController@getuserdetail');
});