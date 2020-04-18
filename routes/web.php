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

Route::match(['get', 'post'], '/', 'CampaignController@viewIndex');

//Route::get('/causes', function () {
//    return view('causes');
//});

Route::match(['get', 'post'], '/causes/{id}', 'CampaignController@causes');
Route::match(['get', 'post'], 'causes-list', 'CampaignController@causesList');
Route::match(['get', 'post'], 'causes-grid', 'CampaignController@causesGrid');
Auth::routes();
Route::get('/home', function () {
    return view('home');
});
Route::get('/fundraiser/profile', function () {
    return view('fundraiser/profile');
});

Route::match(['get', 'post'], '/donate', 'DonationController@addDonation');

Route::match(['get', 'post'], '/search', 'CampaignController@search');
Route::get('/fundraiser/donation', function () {
    return view('fundraiser/donation');
});

Route::get('/fundraiser/updateProfile', function () {
    return view('fundraiser/update_profile');
});

Route::get('/khalti', function () {
    return view('khalti');
});
Route::match(['get', 'post'], 'causes/{id}/esewa', 'StoreController@create');

Route::match(['get', 'post'], 'discover', 'CampaignController@causesList');
Route::match(['get', 'post'], 'discover-grid/{id}', 'CampaignController@causesGridCategory');
Route::match(['get', 'post'], 'discover/{id}', 'CampaignController@causesListCategory');

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::match(['get', 'post'], '/admin/dashboard/', 'HomeController@adminDashboard');
    Route::match(['get', 'post'], '/admin/viewUser/', 'UserController@viewUser');
    Route::match(['get', 'post'], '/admin/addCategory/', 'CategoryController@addCategory');
    Route::match(['get', 'post'], '/admin/viewCategory/', 'CategoryController@viewCategory');
    Route::match(['get', 'post'], '/admin/addBlog/', 'BlogController@addBlog');
    Route::match(['get', 'post'], '/admin/viewBlog/', 'BlogController@viewBlog');
    Route::match(['get', 'post'], '/admin/viewCampaign/', 'CampaignController@viewCampaign');
    Route::match(['get', 'post'], '/admin/viewCampaignViews/', 'CampaignController@viewCampaignViews');

});
Route::group(['middleware' => 'App\Http\Middleware\DonorMiddleware'], function()
{
    Route::match(['get', 'post'], '/donor/dashboard/', 'HomeController@donorDashboard');

});
Route::group(['middleware' => 'App\Http\Middleware\FundraiserMiddleware'], function()
{
    Route::match(['get', 'post'], '/fundraiser/dashboard/', 'HomeController@fundraiserDashboard');
    Route::match(['get', 'post'], '/fundraiser/addCampaign/', 'CampaignController@addCampaign');
    Route::match(['get', 'post'], '/fundraiser/viewCampaign/', 'CampaignController@viewCampaign');
    Route::match(['get', 'post'], '/fundraiser/editCampaign/{id}', 'CampaignController@editCampaign');

});
