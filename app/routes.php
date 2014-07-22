<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
    return View::make('index');
});

Route::get('/lorem', function() {
    return View::make('lorem');             
});

Route::get('/usergenerator', function(){
    return View::make('usergenerator');
});

Route::get('/test', function()
{
	echo 'Hello World';
});


Route::get('/practice', function() {

    echo App::environment();
    //$fruit = Array('Apples', 'Oranges', 'Pears');
    //echo Pre::render($fruit,'Fruit');

});

Route::get('/new', function() {

    $view  = '<form method="POST">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;

});

Route::post('/new', function() {

    $input =  Input::all();
    print_r($input);

});