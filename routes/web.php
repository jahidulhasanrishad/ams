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
    return view("backend.adminDashbord");
});

Route::get('/admin/newClient',[
    'uses'  =>  'AdminViewController@newClient',
    'as'    =>  'newClient'
]);

Route::get('/admin/clientList',[
    'uses'  =>  'AdminViewController@clientList',
    'as'    =>  'clientList'
]);

Route::post('/admin/saveClient',[
    'uses'  =>  'AdminPanelController@saveClient',
    'as'    =>  'saveClient'
]);

Route::get('/admin/client/Clientdelete/{id}',[
	'uses' => 'AdminViewController@clientDel',
	'as'   =>  'clientDel'
]);

Route::get('/admin/client/view/{id}',[
	'uses' => 'AdminViewController@viewProfile',
	'as'   =>  'viewProfile'
]);

Route::get('/admin/client/clientDel/{id}',[
	'uses' => 'AdminViewController@clientDel',
	'as'   =>  'clientDel'
]);

Route::get('/admin/client/clientDel/{id}',[
	'uses' => 'AdminViewController@updateClient',
	'as'   =>  'updateClient'
]);

Route::get('/admin/client/editClient/{id}',[
	'uses' => 'AdminViewController@editClient',
	'as'   =>  'editClient'
]);

Route::post('/admin/client/clientUpdate',[
	'uses' => 'AdminViewController@updateClientPage',
	'as'   =>  'updateClientPage'
]);

Route::get('/admin/client/dashbord/',[
	'uses' => 'AdminViewController@dashbord',
	'as'   =>  'dashbord'
]);
Route::get('/admin/client/newTransaction/',[
	'uses' => 'AdminViewController@newTransaction',
	'as'   =>  'newTransaction'
]);
Route::post('/admin/client/saveTrans',[
	'uses' => 'AdminPanelController@saveTrans',
	'as'   =>  'saveTrans'
]);
Route::get('/admin/client/goTrans/',[
	'uses' => 'AdminViewController@goTrans',
	'as'   =>  'goTrans'
]);

Route::get('/admin/client/transDel/{id}',[
	'uses' => 'AdminViewController@transDel',
	'as'   =>  'transDel'
]);

Route::get('/admin/client/viewTrans/{id}',[
	'uses' => 'AdminViewController@viewTrans',
	'as'   =>  'viewTrans'
]);

Route::get('/admin/client/report/transaction',[
	'uses' => 'AdminViewController@transactionReport',
	'as'   =>  'transactionReport'
]);

Route::get('/admin/client/editTrans/{id}',[
	'uses' => 'AdminViewController@editTrans',
	'as'   =>  'editTrans'
]);

Route::post('/admin/client/updateTrans',[
	'uses' => 'AdminPanelController@updateTrans',
	'as'   =>  'updateTrans'
]);
