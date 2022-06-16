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

// General redirects
Route::permanentRedirect('/about-us', '/over-ons');
Route::permanentRedirect('/become-member', '/lid-worden');
Route::permanentRedirect('/about-laravel', '/what-is-laravel');

// Member redirects
Route::permanentRedirect('/our-members/1', '/leden/pxl-widgets');
Route::permanentRedirect('/our-members/2', '/leden/paqt-com');
Route::permanentRedirect('/our-members/3', '/leden/sqits');
Route::permanentRedirect('/our-members/4', '/leden/goedemiddag');
Route::permanentRedirect('/our-members/5', '/leden/ixperience');
Route::permanentRedirect('/our-members/6', '/leden/one-shoe');
Route::permanentRedirect('/our-members/7', '/leden/vdhicts');
Route::permanentRedirect('/our-members/8', '/leden/september');
Route::permanentRedirect('/our-members/9', '/leden/enrise');
Route::permanentRedirect('/our-members/10', '/leden/swis');
Route::permanentRedirect('/our-members/11', '/leden/bitfactory');
Route::permanentRedirect('/our-members/12', '/leden/noardcode');
Route::permanentRedirect('/our-members/13', '/leden/web-whales');
Route::permanentRedirect('/our-members/15', '/leden/1a-first-alternative');
Route::permanentRedirect('/our-members/16', '/leden/ef2');
Route::permanentRedirect('/our-members/17', '/leden/mollie');
Route::permanentRedirect('/our-members/18', '/leden/vormkracht10');
Route::permanentRedirect('/our-members/19', '/leden/rl-webdiensten');
Route::permanentRedirect('/our-members/20', '/leden/synetic');
Route::permanentRedirect('/our-members/21', '/leden/dij');
Route::permanentRedirect('/our-members/{id?}', '/leden');

// Insight redirects
Route::permanentRedirect('/news/{id?}', '/insights');

// Agenda/event redirects
Route::permanentRedirect('/calendar/{id?}', '/agenda');

// Cases redirects
Route::permanentRedirect('/showcases/intersafe-employee-safety-manager-by-bitfactory', '/cases/intersafe-employee-safety-manager-by-bitfactory');
Route::permanentRedirect('/showcases/de-verbouwcalculator', '/cases/de-verbouwcalculator');
Route::permanentRedirect('/showcases/klantenportaal-voor-het-loyaliteitsprogramma-van-avia', '/cases/klantenportaal-voor-het-loyaliteitsprogramma-van-avia');
Route::permanentRedirect('/showcases/mobiele-app-api-en-adminpanel-als-mvp-voor-toetsing-onder-duizenden-reizigers', '/cases/ov-chipkaart-app-voor-internationale-studenten');
Route::permanentRedirect('/showcases/{slug?}', '/cases');