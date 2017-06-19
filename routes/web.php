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
    return view('index');
});

Route::resource('safety_and_security','safetyController');

Route::get('service', function () {
    return view('service');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('profile', function () {
    return view('profile');
});


Route::get('safety-upload', 'safe1controller@index');
Route::post('safety-upload', 'safe1controller@store');
Route::post('safety-delete', 'safe1controller@delete');

Route::get('printing-upload', 'printingController@index');
Route::post('printing-upload', 'printingController@store');
Route::post('printing-delete', 'printingController@delete');

Route::get('main-upload', 'mainController@index');
Route::post('main-upload', 'mainController@store');
Route::post('main-delete', 'mainController@delete');

Route::get('lighting-upload', 'lightingController@index');
Route::post('lighting-upload', 'lightingController@store');
Route::post('lighting-delete', 'lightingController@delete');

Route::get('electrical-upload', 'electricalController@index');
Route::post('electrical-upload', 'electricalController@store');
Route::post('electrical-delete', 'electricalController@delete');

Route::get('energy-upload', 'energyController@index');
Route::post('energy-upload', 'energyController@store');
Route::post('energy-delete', 'energyController@delete');

Route::get('environment-upload', 'environmentController@index');
Route::post('environment-upload', 'environmentController@store');
Route::post('environment-delete', 'environmentController@delete');

Route::get('air-upload', 'airController@index');
Route::post('air-upload', 'airController@store');
Route::post('air-delete', 'airController@delete');

Route::get('publics-upload', 'publicsController@index');
Route::post('publics-upload', 'publicsController@store');
Route::post('publics-delete', 'publicsController@delete');

Route::get('equipment-upload', 'equipmentController@index');
Route::post('equipment-upload', 'equipmentController@store');
Route::post('equipment-delete', 'equipmentController@delete');


Route::resource('safety_and_security','safetyController');


Route::resource('Public,Conference','viewPublicController');
Route::resource('Offset_printing','viewPrintingController');
Route::resource('Lighting_Products','viewLightingController');
Route::resource('Electrical_&_Mechanical','viewElectricalController');
Route::resource('Main_Distrivution_Board','viewMainController');
Route::resource('Electrical_Energy_Saving','viewEnergyController');
Route::resource('Environments','viewEnvironmentController');

Route::resource('Air_conditions','viewAirController');
Route::resource('Safety_Equipment','viewEquipmentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('logout', 'HomeController@logout');
Route::get('adminstrator', 'Auth\LoginController@index');
Route::post('adminstrator', 'Auth\LoginController@username');
