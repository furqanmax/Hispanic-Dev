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
    return view('welcome');
});
// profile
Route::get('/edit-profile', 'HomeController@edit_profile')->name('edit.profile');
Route::get('/notification', 'HomeController@notification')->name('notification');
Route::get('/my-activities', 'HomeController@my_activities')->name('my.activities');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/signup', 'HomeController@signup')->name('Signup');
Route::get('/Forgot-Password', 'HomeController@forgot')->name('forgot');
Route::get('/Search-result', 'HomeController@searesu')->name('search.result');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/payment', 'HomeController@payment')->name('payment');

// posts
Route::get('/add-new-post', 'HomeController@addpost')->name('add.new.post');
Route::get('/post-details', 'HomeController@postdet')->name('post.details');
Route::get('/my-post', 'HomeController@profile')->name('profile');
// events
Route::get('/my-events', 'HomeController@my_events')->name('my.events');
Route::get('/create-events', 'HomeController@create_event')->name('Create.events');
Route::get('/event-long-form', 'HomeController@long_form')->name('event.long.form');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/subscription', 'HomeController@subscription')->name('subscription');
// yellow
Route::get('/my-yellow-page', 'HomeController@my_yellow')->name('my.yellow.page');
Route::get('/create-yellow-page', 'HomeController@create_yellow')->name('create.yellow.page');
Route::get('/yellow-detail-page', 'HomeController@yellow_details')->name('yellow.detail');
Route::get('/yellow-long-form', 'HomeController@yellow_long_form')->name('yellow.long');
// adds
Route::get('/my-add', 'HomeController@my_add')->name('my.add');
Route::get('/create-add', 'HomeController@create_add')->name('create.add');
// jobs
Route::get('/my-jobs', 'HomeController@my_jobs')->name('my.jobs');
Route::get('/create-job', 'HomeController@create_jobs')->name('create.job');
Route::get('/Job-details', 'HomeController@job_detail')->name('job.details');
Route::get('/looking-for-job', 'HomeController@employee')->name('looking.for.job');
Route::get('/Hiring', 'HomeController@hiring')->name('hiring');
Route::get('/job-long-form', 'HomeController@job_long_form')->name('job.long.form');

// buy & sell
Route::get('/create-sell', 'HomeController@create_sell')->name('create.sell');
Route::get('/selling-details', 'HomeController@sell_detail')->name('selling.details');
Route::get('/buy-and-sell', 'HomeController@sell_index')->name('buy.and.sell');
Route::get('/sell-long-form', 'HomeController@sell_long_form')->name('sell.long.form');
Route::get('/sell-type', 'HomeController@sell_type')->name('sell.type');






