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
    return view('welcome');
});


// Route::match(['get', 'post'], '/', function () {
//     return view('application.login');
// });

// Route::match(['get', 'post'], '/dashboard', function () {
//     return view('application.dashboard');
// });


Route::match(['get', 'post'], '/dashboard', 'patientsController@PatientData');
Route::match(['get', 'post'], '/viewTab', 'patientsController@view');
