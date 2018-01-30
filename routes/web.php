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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/bill/view', [
    'uses' => 'BillController@view',
    'as' => 'bill.view'
]);

Route::get('/bill/pdf',[
    'uses' => 'BillController@getPDF',
    'as' => 'bill.facture'
]);

Route::post('/bill/pdf',[
    'uses' => 'BillController@postPDF',
    'as' => 'bill.facture'
]);