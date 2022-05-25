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

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::permanentRedirect('/about-us', '/over-ons');
Route::permanentRedirect('/our-members/{id?}', '/leden');
Route::permanentRedirect('/become-member', '/lid-worden');
Route::permanentRedirect('/news/{id?}', '/insights');
Route::permanentRedirect('/calendar/{id?}', '/agenda');
Route::permanentRedirect('/about-laravel', '/what-is-laravel');