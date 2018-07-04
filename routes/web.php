<?php

Auth::routes();

Route::namespace('Home')->prefix('/')->group(function(){
    Route::get('/', 'HomeController@show');
});

Route::namespace('About')->prefix('/about')->group(function(){
    Route::get('/', 'AboutController@show');
});

Route::namespace('Projects')->prefix('/projects')->group(function(){
    Route::get('/', 'ProjectController@index');
    Route::namespace('Proposal')->prefix('/proposal')->group(function() {
        Route::get('/', 'ProposalController@show');
    });
    Route::prefix('/{projectKey}')->group(function(){
        Route::get('/', 'ProjectController@show');
        Route::namespace('Payments')->prefix('/payment')->group(function(){
            Route::post('/', 'PaymentController@store');
            Route::prefix('/{paymentKey}')->group(function(){
                Route::get('/', 'PaymentController@show');
                Route::post('/', 'PaymentController@update');
                Route::patch('/', 'PaymentController@update');
            });
        });
    });
});

Route::namespace('Contact')->prefix('/contact')->group(function(){
    Route::get('/', 'ContactController@create');
    Route::post('/', 'ContactController@store');
    Route::get('/thank-you', 'ContactController@show');
});

Route::get('/nano', function(){
    return view('nano');
});

Route::get('/wallet', function(){
    return view('wallet');
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
            Route::namespace("Payments")->prefix('/payment')->group(function(){
                Route::get('/', 'PaymentController@index');
            });
        });
    });
});