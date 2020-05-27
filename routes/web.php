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

route::middleware("auth")->group(function () {

    Route::get('/tweets', 'tweetController@index')->name('home');
    Route::post("/tweets", "tweetController@store")->name("tweets");
});
route::get("/profiles/{user:username}", "profilesController@show")->name("profile");
route::get("/profiles/{user:username}/edit", "profilesController@edit")->middleware("can:edit,user");
route::put("/profiles/{user:username}/update", "profilesController@update");
route::post("/profiles/{user:username}/follow", "followsController@store");

Route::get("/Explore","exploreController")->name("explore");

Route::post("/tweets/{tweet}/like","TweetLikeController@store")->name("like");
Route::delete("/tweets/{tweet}/like", "TweetLikeController@destroy")->name("dislike");

Auth::routes();
