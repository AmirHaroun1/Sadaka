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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Campaign Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/Campaigns','CampaignController@index')->name('campaign.index');
Route::get('/search/Campaigns/{name}','CampaignController@search')->name('campaign.search');
Route::get('/CreateNewCampaign','CampaignController@create')->name('campaign.create');
Route::post('/CreateNewCampaign','CampaignController@store')->name('campaign.store');
/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::get('/MyProfile','UserController@show')->name('user.show');

