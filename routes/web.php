<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controller\ExampleController;
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
Route::get('/example/{first}/{second}', function ($first, $second){
$multi = $first * $second;
return view('example', ['firstval' => $first, 'secondval' => $second, 'multi' => $multi]);
});

Route::get('/form',function () {
 return view ("Form");

});