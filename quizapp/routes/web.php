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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'QuizController@index');
Route::get('/protected-route', function (Request $request) {
    // ... logic ...
})->middleware('myMiddleware');

Route::group(['middleware' => ['myMiddleware']], function () {
    Route::get('/route1', function (Request $request) {
        return view('protected-route-1');
    });
    Route::get('/route2', function (Request $request) {
        return response()->json(['message' => 'Protected route 2 accessed']);
    });
});

Route::get('/error', function () {
    return view('error');
});



