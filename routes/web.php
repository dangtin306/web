<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Modules\Menu\Entities\Link;

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

Route::group([
    'namespace' => 'App\Http\Controllers',

], function () {
Route::get('/testapi.php', 'UserController@testapi');
Route::post('/testapi.php', 'UserController@testapi');
Route::post('/logintest','TestController@check');
Route::post('/order', 'orderController@order');
Route::post('/order2', 'order2Controller@order');
Route::post('/random', 'randomController@random');


Route::get('/test',  function () {
    return view('test'); });
    Route::get('/test2',  function () {
        return view('test2'); });
    Route::get('/game',  function () {
        return view('welcome'); });   
Route::get('/appvue',  function () {
        return view('appvue');
});
Route::get('/okluon',  function () {
    return view('welcome');
});
Route::get('/naptien',  function () {
    return view('appvue');
});
Route::get('/home',  function () {
    return view('login');
});
}
) ;
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
