<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
define("WC", "WebController", TRUE);
define("AC", "AdminController", TRUE);

/* ----------- Web section ----------*/
Route::get('/',WC.'@index');            //landing page
Route::get('/about',WC.'@about');       //about page
Route::get('/contact',WC.'@contact');   //contact page
Route::get('/gallery',WC.'@gallery');   //gallery page
Route::get('/reviews',WC.'@reviews');   //reviews page
Route::get('/our-guide',WC.'@our_guide');   //our guide page
Route::get('/tourist-visa',WC.'@tourist_visa');   //tourist visa page
Route::get('/list',WC.'@listing');   //listing page
Route::get('/plan',WC.'@plan');   //plan page
Route::get('/why-us',WC.'@why_us');   //why-us page

/* ----------- Admin section ----------*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', AC . '@index');
});

