<?php

Auth::routes();

	Route::get('/logout', function() {
		Auth::logout();
		return redirect()->to('/');
	});

	// dont let anyone create an account
	Route::get('/register', function() {
		return back();
	});
	Route::post('/register', function() {
		return back();
	});

	// PHP info
	Route::get('/phpinfo', 'PageController@phpInfo');

	// STATIC PAGES
	Route::get('/', 'PageController@home');
	Route::get('/home', 'PageController@home');
	Route::get('/contact', 'PageController@contact');
	Route::post('/contact', 'EmailController@sendContactEmail');
	Route::get('/art', 'PageController@art');
	Route::get('/admin', 'PageController@dashboard');
	Route::get('/software', 'ProjectController@index');
	// TABLES

	// Messages
	Route::get('/messages/admin', 'MessageController@admin');
	Route::resource('messages', 'MessageController');

	// Projects
	Route::group(['prefix' => 'projects'], function () {
		Route::get('/admin', 'ProjectController@admin');
	});
	// Route::get('/software', 'ProjectController@index');
	Route::resource('projects', 'ProjectController');

	// Project Routes
	/////////////////

	// P5.js
	Route::get('/game-of-life', 'ProjectController@gameOfLife');
	Route::get('/procedural-mountains', 'ProjectController@proceduralMountains');

	// lendovi font
	Route::get('/lendovi/{word?}', 'LendoviController@index');

	// draw with kinect
	Route::get('/draw-with-kinect', 'ProjectController@drawWithKinect');

	// Advent Calendar
	Route::get('/advent/clear', 'AdventController@clear')->name('advent.clear');
	Route::get('/advent/{code?}', 'AdventController@index')->name('advent');
	Route::post('/advent', 'AdventController@store')->name('advent.store');
	Route::get('/advent/{code}/{day_id}', 'AdventController@day')->name('advent.day');

	// pixel painter
	Route::get('/pixel-painter', 'PixelPainterController@index');
	Route::post('/pixel-painter', 'PixelPainterController@store');

	// Icons
	Route::get('/icons', 'IconController@index');

	// Websites
	Route::group(['prefix' => 'website-development'], function(){
		Route::get('/', 'WebsiteController@index');
		Route::get('/how-it-works', 'WebsiteController@how_it_works');
		// Route::get('/timetracker', 'WebsiteController@timetracker')->name('timetracker');
		// Route::get('/listings1', 'WebsiteController@listings1')->name('listings1');
		// Route::get('/home1', 'DesignController@home1')->name('home1');
	});

	// WIP
	Route::group(['prefix' => 'wip'], function(){

		Route::get('/cards', 'BusinessCardController@index');

		Route::get('/bg', 'WipController@bg');

		// tailwind practice
		Route::get('/', 'WipController@home')->name('home');
		Route::get('/gradient', 'WipController@gradient')->name('gradient');

		// grid practice
		Route::get('/polygondwanaland', 'WipController@polygondwanaland')->name('polygondwanaland');

		// matchmaker
		Route::get('/matchmaker', 'MatchmakerController@index')->name('matchmaker');
		Route::post('/matchmaker', 'MatchmakerController@result')->name('matchmaker.result');

		// daily code snippet
		Route::get('/daily-button', 'ProjectController@dailyButton');

		// picture slicer
		Route::get('/slicer', 'SlicerController@index');

		// knuckle tattoo generator
		Route::get('/words/generate', 'WordsController@save');
		Route::post('/words/vote/{word}/{hand}/{right_word?}', 'WordsController@vote');
		Route::post('/words/pair/{word}/{right_word}', 'WordsController@pair');
		Route::resource('words', 'WordsController');
	});
