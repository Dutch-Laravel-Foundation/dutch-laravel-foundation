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
Route::permanentRedirect('/news/oprichting-stichting-laravel-nederland', '/insights/oprichting-stichting-laravel-nederland');
Route::permanentRedirect('/news/dutch-laravel-foundation-hackathon', '/insights/dutch-laravel-foundation-hackathon');
Route::permanentRedirect('/news/true-blogt-over-laravel-en-de-dutch-laravel-foundation', '/insights/true-blogt-over-laravel-en-de-dutch-laravel-foundation');
Route::permanentRedirect('/news/bezoek-ons-op-laracon-amsterdam-2019', '/insights/bezoek-ons-op-laracon-amsterdam-2019');
Route::permanentRedirect('/news/nieuw-lid-studio-september', '/insights/nieuw-lid-studio-september');
Route::permanentRedirect('/news/ook-enrise-kiest-voor-deelname-dlf', '/insights/ook-enrise-kiest-voor-deelname-dlf');
Route::permanentRedirect('/news/wederom-een-nieuw-lid-swis', '/insights/wederom-een-nieuw-lid-swis');
Route::permanentRedirect('/news/eerste-laravel-meetup-groot-succes', '/insights/eerste-laravel-meetup-groot-succes');
Route::permanentRedirect('/news/bitfactory-nieuwste-lid-dutch-laravel-foundation', '/insights/bitfactory-nieuwste-lid-dutch-laravel-foundation');
Route::permanentRedirect('/news/ook-web-whales-is-enthousiast', '/insights/ook-web-whales-is-enthousiast');
Route::permanentRedirect('/news/noardcode-heeft-zich-aangesloten', '/insights/noardcode-heeft-zich-aangesloten');
Route::permanentRedirect('/news/juridisch-loket-geopend-voor-dlf-leden', '/insights/juridisch-loket-geopend-voor-dlf-leden');
Route::permanentRedirect('/news/eerste-interne-ontwikkelteam-sluit-zich-aan', '/insights/eerste-interne-ontwikkelteam-sluit-zich-aan');
Route::permanentRedirect('/news/ef2-gelooft-in-het-succes-van-laravel', '/insights/ef2-gelooft-in-het-succes-van-laravel');
Route::permanentRedirect('/news/innovatief-betaalplatform-mollie-aangesloten-bij-dlf', '/insights/innovatief-betaalplatform-mollie-aangesloten-bij-dlf');
Route::permanentRedirect('/news/de-eerste-showcase-is-online', '/insights/de-eerste-laravel-showcase-is-online');
Route::permanentRedirect('/news/showcase-de-verbouwcalculator', '/insights/showcase-de-verbouwcalculator');
Route::permanentRedirect('/news/ambitieus-rl-webdiensten-sluit-zich-aan-bij-dlf', '/insights/ambitieus-rl-webdiensten-sluit-zich-aan-bij-dlf');
Route::permanentRedirect('/news/showcase-viaavia', '/insights/showcase-viaavia');
Route::permanentRedirect('/news/early-laravel-adopter-vormkracht10-treedt-tot-dlf-toe', '/insights/early-laravel-adopter-vormkracht10-treedt-tot-dlf-toe');
Route::permanentRedirect('/news/showcase-ov-chipkaart-app', '/insights/showcase-ov-chipkaart-app');
Route::permanentRedirect('/news/{slug?}', '/insights');

// Agenda/event redirects
Route::permanentRedirect('/calendar/laravel-directors-dinner', '/events/laravel-directors-dinner');
Route::permanentRedirect('/calendar/laravel-meetup', '/events/laravel-meetup');
Route::permanentRedirect('/calendar/larcon-online-2020-viewing-party', '/events/laracon-online-2020-viewing-party');
Route::permanentRedirect('/calendar/webinar-twill-16-april-2020', '/events/webinar-twill-16-april-2020');
Route::permanentRedirect('/calendar/online-meet-up-mohamed-said-over-laravel-queues-in-action', '/events/online-meet-up-mohamed-said-over-laravel-queues-in-action');
Route::permanentRedirect('/calendar/meetup-met-freek-van-der-herten-over-debugging-met-ray', '/events/meetup-met-freek-van-der-herten-over-debugging-met-ray');
Route::permanentRedirect('/calendar/meetup-over-generics-debugging-en-the-best-of-all-frameworks', '/events/meetup-over-generics-debugging-en-the-best-of-all-frameworks');
Route::permanentRedirect('/calendar/{slug?}', '/agenda');

// Cases redirects
Route::permanentRedirect('/showcases/intersafe-employee-safety-manager-by-bitfactory', '/cases/intersafe-employee-safety-manager-by-bitfactory');
Route::permanentRedirect('/showcases/de-verbouwcalculator', '/cases/de-verbouwcalculator');
Route::permanentRedirect('/showcases/klantenportaal-voor-het-loyaliteitsprogramma-van-avia', '/cases/klantenportaal-voor-het-loyaliteitsprogramma-van-avia');
Route::permanentRedirect('/showcases/mobiele-app-api-en-adminpanel-als-mvp-voor-toetsing-onder-duizenden-reizigers', '/cases/mobiele-app-api-en-adminpanel-als-mvp-voor-toetsing-onder-duizenden-reizigers');
Route::permanentRedirect('/showcases/{slug?}', '/cases');