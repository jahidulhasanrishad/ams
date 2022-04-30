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
    return view('backend.home');
});
// Route::get('/crud/Student',[
//     'uses' => 'backendController@student',
//     'us' => 'student',
// ]);
Route::get('/admin/client/student/',[
	'uses' => 'backendController@student',
	'as'   =>  'student'
]);

route::get('/crud/employee',[
    'uses'=> 'backendController@employee',
    'as' => 'employee'
]);