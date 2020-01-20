<?php

use Illuminate\Support\Facades\Redis;

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


Route::get('/test', function () {

    Redis::set('name', 'guwenjie');
    $values = Redis::get('name');

    try{
        $res = \DB::table('test')->select()->get();
    }catch (\Exception $e) {
        dump($e);
    }


   dd($values);
});