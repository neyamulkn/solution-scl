<?php

Route::get('/', function () {
    return view('backend/index');
});


Route::get('/form', function () {
    return view('backend/form-picker');
});

// student 
Route::group(['prefix'=> 'student'],  function(){

	Route::get('/list', 'StudentController@index');

	Route::get('/add', 'StudentController@create');
	Route::post('/store', 'StudentController@store');

});


// teachar 
Route::group(['prefix'=> 'teachar'],  function(){

	Route::get('/add', function () {
    	return view('backend/teachar/add');
	});

});

//Backend Routes
Route::group(['namespace' => 'Backend'], function(){

	// academic
	Route::group(['prefix'=> 'academic'], function(){

		Route::get('/class', 'AcademicController@classView');

		Route::post('/class/create', 'AcademicController@classCreate');
		// edit data
		Route::get('/class/edit/{id}', 'AcademicController@classEdit');
		// update data
		Route::post('/class/update/', 'AcademicController@classUpdate');
		// delete data
		Route::post('/class/delete/{id}', 'AcademicController@classDelete');

	});
	//End academic

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
