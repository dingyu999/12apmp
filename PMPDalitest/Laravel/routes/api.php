<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::any('/hello','DayController@hello');
Route::any('/shuixianhua','DayController@shuixianhua');
Route::any('/number','DayController@number');
Route::any('/px','DayController@px');
Route::any('/calSteps','DayController@calSteps');
Route::any('/yz','DayController@yz');
Route::any('/quick','WeekController@quick');
Route::any('/cs','WeekController@cs');
Route::any('/yang','WeekController@yang');
Route::any('/index','WeekController@index');
Route::any('/add','WeekController@add');
Route::any('/show','WeekController@show');
