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
Route::post('/checkdichvu', 'checkdichvuController@checkdichvu');
Route::post('/logintest','TestController@check');
Route::post('/order', 'orderController@order');
Route::options('/order', 'orderController@order');
Route::post('/order2', 'order2Controller@order');
Route::post('/random', 'randomController@random');
Route::post(
    '/theloai', 'theloaiController@theloai'

);
Route::post(
    '/checkmomo', 'checkmomoController@checkmomo'

);
Route::options(
    '/checkmomo', 'checkmomoController@checkmomo'

);
Route::post(
    '/truyen', 'profileController@profile'

);
Route::get('/anime/home',  function () {
    return view('theloai');
});
Route::get('/anime/play',  function () {
    return view('theloai');
});
Route::get('/anime/profile', function()
{
    return view('theloai');
});
Route::get('/anime/the-loai',  function () {
    return view('theloai');
});
Route::get('/test',  function () {
    return view('test'); });

Route::get('/test',  function () {
    return view('test'); });
    Route::get('/test2',  function () {
        return view('test2'); });
    Route::get('/game',  function () {
        return view('welcome'); });   
Route::get('/appvue',  function () {
        return view('appvue');
});
Route::get('/HTytvy9R_rAo9DqTZ6y0I2C7Dgx97ohP2hid.html', 'htmlController@html');
Route::get('/momo',  function () {
    return view('welcome');
});

Route::get('/okluon',  function () {
    return view('welcome');
});
Route::get('/huongdan',  function () {
    return view('welcome');
});
Route::get('/huongdan/{name}', function($name)
{
    return view('welcome');
});
Route::get('/account ',  function () {
    return view('welcome');
});
Route::get('/payeer ',  function () {
    return view('appvue');
});
Route::get('/naptien',  function () {
    return view('welcome');
});
Route::get('/orders',  function () {
    return view('welcome');
});
Route::get('/orders/{name}',  function () {
    return view('welcome');
});
Route::get('/muathe',  function () {
    return view('welcome');
});

Route::get('/anime/{name}', function($name)
{
    return view('appvue');
});
Route::get('/anime/the-loai/{name}', function($name)
{
    return view('appvue');
});
Route::get('/chuyenxu',  function () {
    return view('appvue');
});
Route::get('/sms',  function () {
    return view('welcome');
});
Route::get('/themsdt',  function () {
    return view('welcome');
});
Route::get('/cheofb',  function () {
    return view('welcome');
});
Route::get('/cheoig',  function () {
    return view('welcome');
});
Route::get('/momoauto',  function () {
    return view('welcome');
});
Route::get('/cauhinh/{name}',  function () {
    return view('welcome');
});
Route::get('/jop/{name}',  function () {
    return view('welcome');
});

Route::get('/kiemtien/{name}',  function () {
    return view('welcome');
});
Route::get('/kiemtien/{theloai}/{name}',  function () {
    return view('welcome');
});
Route::get('/themsdtmomo',  function () {
    return view('themsdtmomo');
});
Route::get('/hellocss',  function () {
    return view('hellocss');
});
Route::get('/public/{name}',  function () {
?>
<script>  window.location="/home/";
</script>

<?php
});

Route::get('webapp/{name}', function($name)
{
    return view('biolink');
});
Route::get('/history',  function () {
    return view('appvue');
});
Route::get('/themcauhinh',  function () {
    return view('appvue');
});
Route::get('/link',  function () {
    return view('appvue');
});
Route::get('/exchangepoints',  function () {
    return view('appvue');
});
Route::get('/plan',  function () {
    return view('welcome');
});
Route::get('/testcode',  function () {
    return view('appvue');
});
Route::get('laylienket', function()
{
    return view('welcome');
});
Route::get('xulytruyen', function()
{
    return view('appvue');
});
Route::get('laylienket/{name}', function($name)
{
    return view('welcome');
});
Route::get('/doithe',  function () {
    return view('welcome');
});
Route::get('/comment',  function () {
    return view('welcome');
});
Route::get('/appvue2',  function () {
    return view('appvue2');
});
Route::get('/home/',  function () {
    return view('appvue');
});
Route::get('/id',  function () {
    return view('id');
});
Route::get('the-loai/{name}', function($name)
{
    return view('theloai');
});
Route::get('profile/truyen-tranh/{name}', function($slug)
{
    return view('theloai', ['slug' => $slug]);
})->where('slug', '^[^/]+$');
Route::get('/realtime', function()
{
    return view('appvue');
});

Route::get('/thankuser', function()
{
    return view('appvue');
});
Route::get('/realtime2', function()
{
    return view('realtime');
});
Route::get('/congdong', function()
{
    return view('appvue');
});
Route::get('/profile', function()
{
    return view('welcome');
});
Route::get('/order', function()
{
    return view('appvue');
});
Route::get('/historyclone', function()
{
    return view('appvue');
});
Route::get('/nativeapp/cauhinh/{name}', function($name)
{
    return view('welcome');
});
Route::get('/cauhinhtiktok/{name}', function($name)
{
    return view('welcome');
});
Route::get('/nativeapp/{name}', function($name)
{
    return view('welcome');
});
Route::get('/nativeapp/kiemtien/subcheo', function()
{
    return view('welcome');
});
Route::get('/nativeapp/kiemtien/timcheo', function()
{
    return view('welcome');
});
Route::get('/truyen-tranh/home', function()
{

    return view('theloai');
});
Route::get('/nativeapp/search', function()
{

    return view('theloai');
});
Route::get('/truyen-tranh/{name}', function($name)
{

    return view('theloai');
});
Route::get('/truyenchuyen/{name}', function($name)
{

    return view('appvue');
});
// Route::get('/truyen-tranh/{name}', function($name)
// {
//     $name = "https://hust.media/truyen-tranh/".$name ;
//     header('Location: '.$name);
// exit;
//     return view($name);
// });
}
) ;
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
