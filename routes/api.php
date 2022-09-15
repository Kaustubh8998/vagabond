<?php

use Illuminate\Http\Request;

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

Route::post('trips', [
    'as'    =>  'trips',
    'uses'  =>  'ItemController@trips'
]);

Route::get('categories', [
    'as'    =>  'categories',
    'uses'  =>  'CategoryController@categories'
]);

Route::get('slides', [
    'as'    =>  'slides',
    'uses'  =>  'SlideController@slides'
]);

Route::get('testimonials', [
    'as'    =>  'testimonials',
    'uses'  =>  'TestimonialController@testimonials'
]);

Route::get('categories-list', [
    'as'    =>  'categories-list',
    'uses'  =>  'CategoryController@categoriesList'
]);

Route::get('category/{slug}', [
    'as'    =>  'category-profile',
    'uses'  =>  'CategoryController@categoryProfile'
]);

Route::get('trip/{slug}', [
    'as'    =>  'trip-profile',
    'uses'  =>  'ItemController@tripProfile'
]);

Route::get('upcoming-trips', [
    'as'    =>  'upcoming-trips',
    'uses'  =>  'ItemController@upcomingTrips'
]);
