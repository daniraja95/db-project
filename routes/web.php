<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\task;
use App\Http\Controllers\activityController;
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

// Route::get('/index', function () {
//     return view('index');
// });


Route::post('submit','task@save',function(){
return view('/index');
});

Route::get('/index','task@index');

// Route::delete('/index/{id}',[task::class,'deletetask']);

Route::get('delete{id}',[task::class,'delete']);
Route::get('/index','activityController@showactivitylist');
