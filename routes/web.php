<?php

use Illuminate\Support\Facades\Route;

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
    return redirect(route('dashboard'));
});

// Route::get('/birthday', [App\Http\Controllers\HomeController::class, 'birthdayNotification'])->name('birthday');


Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/dashboard','Dashboard\DashboardController@index')->name('dashboard');
    /*
    |--------------------------------------------------------------------------
    | Event CRUD
    |--------------------------------------------------------------------------
    |
    */

    Route::group(['as' => 'event.', 'prefix' => 'event',], function () {
        Route::get('', 'Event\EventController@index')->name('index');
        Route::get('event-data', 'Event\EventController@getAllData')->name('data');
        Route::get('create', 'Event\EventController@create')->name('create');
        Route::post('', 'Event\EventController@store')->name('store');
        Route::get('{event}/edit', 'Event\EventController@edit')->name('edit');
        Route::put('{event}', 'Event\EventController@update')->name('update');
        Route::get('event/{id}/destroy', 'Event\EventController@destroy')->name('delete');
    });



});
