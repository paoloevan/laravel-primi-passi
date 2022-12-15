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

Route::get('/', function () {
    $data = [
        'Languages_to_Learn' => [
            'HTML' => 'ok',
            'CSS' => 'ok',
            'JS' => 'ok',
            'PHP' => 'ok',
            'Laravel' => 'in progress...',
        ]
    ];
    return view('home', $data);
});
