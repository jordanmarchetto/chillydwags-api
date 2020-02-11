<?php

use Illuminate\Http\Request;
use App\Exercise;

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


Route::get('/', function () {
	//return view('welcome');
	return response()->json(['app-name' => 'lifting-log', 'version' => 'v0.0'], 200);
});
Route::post('exercises', 'ExerciseController@store');
Route::get('exercises', 'ExerciseController@index');
Route::get('exercises/{id}', 'ExerciseController@show');
//Route::options('exercises', 'ExerciseController@index');
Route::put('exercises/{id}', 'ExerciseController@update');
Route::delete('exercises/{id}', 'ExerciseController@delete');


Route::post('exercise-records', 'ExerciseRecordController@store');
Route::get('exercise-records', 'ExerciseRecordController@index');
Route::get('exercise-records/{id}', 'ExerciseRecordController@show');
//Route::options('exercise-records', 'ExerciseRecordController@index');
Route::put('exercise-records/{id}', 'ExerciseRecordController@update');
Route::delete('exercise-records/{id}', 'ExerciseRecordController@delete');


/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('players-test', 'PlayerController@index')->middleware('cors');
Route::middleware('auth:api')->post('players', 'PlayerController@store');
Route::middleware('auth:api')->get('players', 'PlayerController@index');
Route::middleware('auth:api')->get('players/{id}', 'PlayerController@show');
//Route::options('players', 'PlayerController@index');
Route::middleware('auth:api')->put('players/{id}', 'PlayerController@update');
Route::middleware('auth:api')->delete('players/{id}', 'PlayerController@delete');
 */

/*
Route::middleware('auth:api')->post('attendance', 'AttendanceRecordController@store');
Route::middleware('auth:api')->get('attendance', 'AttendanceRecordController@index');
Route::middleware('auth:api')->get('attendance/{id}', 'AttendanceRecordController@show');
//Route::options('attendance', 'AttendanceRecordController@index');
Route::middleware('auth:api')->put('attendance/{id}', 'AttendanceRecordController@update');
Route::middleware('auth:api')->delete('attendance/{id}', 'AttendanceRecordController@delete');
 */

/*
Route::post('attendance', 'AttendanceRecordController@store');
Route::get('attendance', 'AttendanceRecordController@index');
Route::get('attendance/latest_csv', 'AttendanceRecordController@latest_csv');
Route::get('attendance/all_csv', 'AttendanceRecordController@all_csv');
Route::get('attendance/{id}', 'AttendanceRecordController@show');
//Route::options('attendance', 'AttendanceRecordController@index');
Route::put('attendance/{id}', 'AttendanceRecordController@update');
Route::delete('attendance/{id}', 'AttendanceRecordController@delete');
 */
