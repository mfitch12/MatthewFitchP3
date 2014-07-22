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
    $paragraphs = 0;
    return View::make('index')
        ->with('paragraphs', $paragraphs);
});


Route::get('/lorem', function() {

    $paragraphs = 0;
    return View::make('lorem')
        ->with('paragraphs', $paragraphs);          
});

Route::post('/lorem', function(){
    $input = Input::all();
    //print_r($input);

    $paragraphs = $input['numberOfParagraphs'];

    return View::make('lorem')
        ->with('paragraphs', $paragraphs);

});


Route::get('/usergenerator', function(){
    
    $users = 0;
    $birthdate = 'off';
    $profile = 'off';

    return View::make('usergenerator')
        ->with('users', $users)
        ->with('birthdate', $birthdate)
        ->with('profile', $profile);

});

Route::post('/usergenerator', function(){
    
    //$input = Input::all();
    //print_r($input);

    $users = Input::get('numberOfUsers');
    $birthdate = Input::get('birthdate', 'off');
    $profile = Input::get('profile', 'off');


    return View::make('usergenerator')
        ->with('users', $users)
        ->with('birthdate', $birthdate)
        ->with('profile', $profile);


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