<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);

        Route::get('siswa', 'SiswaController@index');
        Route::post('siswa', 'SiswaController@create');
        Route::put('/siswa/{id}', 'SiswaController@update');
        Route::delete('/siswa/{id}', 'SiswaController@delete');

        Route::get('artikle', 'ArtikleController@index');
        Route::get('/artikle/{id}', 'ArtikleController@index1');
        Route::post('artikle', 'ArtikleController@create');
        Route::put('/artikle/{id}', 'ArtikleController@update');
        Route::delete('/artikle/{id}', 'ArtikleController@delete');

        Route::get('/add', 'ArtikelController@add');
        Route::get('/', 'ArtikelController@show');
        Route::post('/add_process', 'ArtikelController@add_process');
        Route::get('/detail/{id}', 'ArtikelController@detail');
        Route::get('/admin', 'ArtikelController@show_by_admin');
        Route::put('/edit/{id}', 'ArtikelController@edit');
        Route::put('/edit_process', 'ArtikelController@edit_process');
        Route::delete('/delete/{id}', 'ArtikelController@delete');
    });
});


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
