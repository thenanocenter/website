<?php

Auth::routes();

Route::namespace('Home')->prefix('/')->group(function(){
    Route::get('/', 'HomeController@show');
});

Route::get('/about', function(){
    return view('about');
});

Route::namespace('Projects')->prefix('/projects')->group(function(){
    Route::get('/', 'ProjectController@index');
    Route::prefix('/{projectKey}')->group(function(){
        Route::get('/', 'ProjectController@show');
    });
});

Route::get('/nano', function(){
    return view('nano');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::namespace('Account')->prefix('/account')->middleware('auth')->group(function(){
    Route::namespace('User')->prefix('/user')->group(function(){
        Route::get('/', 'UserController@edit');
        Route::patch('/', 'UserController@update');
    });
});

Route::namespace("Manage")->prefix('/manage')->middleware(['auth','role:admin'])->group(function(){
    Route::namespace("Users")->prefix('/user')->group(function(){
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::post('/', 'UserController@store');
        Route::prefix("/{userID}")->group(function(){
            Route::get('/', 'UserController@show');
            Route::get('/edit', 'UserController@edit');
            Route::patch('/','UserController@update');
            Route::delete('/','UserController@destroy');
        });
    });
    Route::namespace("Projects")->prefix('/project')->group(function(){
        Route::get('/', 'ProjectController@index');
        Route::get('/create', 'ProjectController@create');
        Route::post('/', 'ProjectController@store');
        Route::prefix("/{projectId}")->group(function(){
            Route::get('/', 'ProjectController@show');
            Route::get('/edit', 'ProjectController@edit');
            Route::patch('/','ProjectController@update');
            Route::delete('/','ProjectController@destroy');
        });
    });
});