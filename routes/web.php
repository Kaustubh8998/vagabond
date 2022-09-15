<?php

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

Route::get('/', 'HomeController@home')->name('index');

Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/terms-and-conditions', 'HomeController@terms')->name('terms');

Route::get('/office-outdoors', 'HomeController@officeOutdoors')->name('office-outdoors');

Route::get('/vagafam', 'HomeController@vagafam')->name('vagafam');

Route::get('category/{slug}', 'HomeController@categoryProfile')->name('category-profile');

Route::get('trip/{slug}/{when?}', 'HomeController@tripProfile')->name('trip-profile');

Route::get('upcoming-trips', 'HomeController@experiences')->name('experiences');

Route::post('vagafam-form', 'HomeController@vagafamForm')->name('vagafam.form');

Route::post('officeoutdoors-form', 'HomeController@officeoutdoorsForm')->name('officeoutdoors.form');

Route::post('contact-form', 'HomeController@contactForm')->name('contact.form');

Route::middleware('guest')->group(function () {

	Route::get('login', 'LoginController@loginPage')->name('login-page');

	Route::post('login', 'LoginController@login')->name('login');

});

Route::middleware('auth')->group(function () {

	Route::prefix('admin')->group(function () {

		Route::resource('testimonials', 'TestimonialController');

		Route::get('testimonials/{testimonial}/delete', 'TestimonialController@delete')->name('testimonial.delete');

		Route::resource('slides', 'SlideController');

		Route::get('slides/{slide}/delete', 'SlideController@delete')->name('slide.delete');	

		Route::resource('category', 'CategoryController');

		Route::get('category/{category}/delete', 'CategoryController@delete')->name('category.delete');	

		Route::post('category/{category}/icon', 'CategoryController@icon')->name('category.icon');

		Route::get('category/{category}/icon/delete', 'CategoryController@iconDelete')->name('category.icon.delete');	

		Route::resource('trips', 'ItemController');

		Route::get('trip/{trip}/delete', 'ItemController@delete')->name('trip.delete');

		Route::resource('images', 'ImageController');

		Route::get('images/{image}/delete', 'ImageController@delete')->name('image.delete');

		Route::resource('artists', 'ArtistController');

		Route::get('artists/{artist}/delete', 'ArtistController@delete')->name('artist.delete');

		Route::resource('details', 'DetailController');

		Route::get('details/{detail}/delete', 'DetailController@delete')->name('detail.delete');

		Route::resource('dates', 'DateController');

		Route::get('dates/{date}/delete', 'DateController@delete')->name('date.delete');

		Route::get('logout', 'AdminController@logout')->name('logout');

		Route::get('home', 'AdminController@home')->name('home');

		Route::get('change/password', 'AdminController@password')->name('password');

		Route::post('change/password', 'AdminController@changePassword')->name('change-password');

	});

});

Route::get('/{vue?}', function() {
    return view('welcome');
})->where('vue', '[\/\w\.-]*');

