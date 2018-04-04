<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

	Route::get('/', function () {
	    return view('brandi.index');
	})->name('inicio');

	

	Route::middleware(['auth'])->group( function () {
		
		Route::prefix('dashboard')->group( function () {

			Route::get('/', 'DashboardController@index' )->name('dashboard.index');
			Route::get('/chartInfo', 'DashboardController@getChartInfo')->name('chart.info');

			Route::resource('user', 'UserController', ['except' => ['destroy', 'show']]);	
			Route::get('user/{id}/destroy', 'UserController@destroy')->name('destroy.user');

			Route::resource('trees', 'TreesController', ['except' => ['destroy', 'show']]);
			Route::get('trees/{id}/destroy', 'TreesController@destroy')->name('destroy.trees');
			Route::get('tress/pdf', 'TreesController@GeneratePdf')->name('treePdf');

			Route::resource('mark', 'MarkController', ['only' => ['create','store', 'index']]);
			Route::get('mark/{id}/destroy', 'MarkController@destroy')->name('destroy.mark');

			Route::get('map', 'MapController@index')->name('map.index');
			Route::get('map/coords', 'MapController@getCoords')->name('map.coords');

			



		});

	});
	

	Auth::routes();	

	//Route::get('/home', 'HomeController@index')->name('home');

	


