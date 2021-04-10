<?php
    

	Route::get('/', function () { 
	return view('home'); 
	});

	
	Route::get('/Book1', function () { return view('Book1'); });
	
	Route::get('/Book2', function () { return view('Book2'); });
	
	Route::get('/Book3', function () { return view('Book3'); });

	Route::get('/Book4', function () { return view('Book4'); });

	Route::dispatch();
?>
