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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('sessions', 'SessionAPIController');

Route::resource('sessions', 'SessionAPIController');

Route::resource('candiate_voters', 'candiateVoterAPIController');

Route::resource('candiate_voters', 'candiateVoterAPIController');

Route::resource('links', 'LinksAPIController');

Route::resource('vistors', 'VistorsAPIController');

Route::resource('crowneds', 'CrownedAPIController');

Route::resource('gallaries', 'GallariesAPIController');

Route::resource('donate_sessions', 'DonateSessionsAPIController');

Route::resource('donation_applicants', 'DonationApplicantsAPIController');

Route::resource('contents', 'ContentAPIController');

Route::resource('statements', 'StatementAPIController');

Route::resource('team_categories', 'TeamCategoryAPIController');

Route::resource('teams', 'TeamAPIController');