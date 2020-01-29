<?php

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Controllers\Auth;

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


/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/



// Route::group(['middleware' => ['cors']], function () {
	
	// Users
	Route::get('/test','TestController@test');
	Route::post('/user/register','UserController@insert');
	
	Route::get('/user/{uid}','UserController@getEmployee');
	
	
    // Ejemplo con params
    // Route::get('/loginU/{email}/{password}','UsuarioController@getLoginU');
	
// });

