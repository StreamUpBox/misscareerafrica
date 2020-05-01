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

Route::get('/', function () {
    return view('welcome');
});


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
);

Route::get('/candidate-application', function () {
    return view('apply');
});

Route::get('candidate-page/{id}', 'CandidateController@showCandidate');
Route::get('past-candidate-page/{id}', 'CandidateController@showPastCandidate');

Route::get('/competition', function () {
    return view('competition');
});
Route::get('/job', function () {
    return view('job');
});
Route::get('/scope', function () {
    return view('scope');
});
Route::get('/mission', function () {
    return view('mission');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/buy-ticket', function () {
    return view('buy-ticket');
});

Route::get('/sponsor', function () {
    return view('sponsor');
});

Route::get('/volunteer', function () {
    return view('volunteer');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/eligibility', function () {
    return view('eligibility');
});
Route::get('/scholarship', function () {
    return view('scholarship');
});
Route::get('/selected-candidates', function () {
    return view('selectedcandidates');
});
Route::get('/crowned', function () {
    return view('crowned');
});
Route::get('/photos', function () {
    return view('galleries');
});
//crwoned-info
Route::get('/crwoned-info/{id}', function ($id) {
    return view('crwoned-info')->with('id',$id);
});
//crowned
Route::get('/past-candidates', function () {
    return view('past-candidates');
});

//
Auth::routes([ 'register' => false ]);

Route::get('/home', 'HomeController@index');



Route::resource('sessions', 'SessionController');
//
Route::get('current_session', 'SessionController@currentSession');
//listSessions
Route::get('list_sessions', 'SessionController@listSessions');

//
Route::get('list-selected-candidates', 'CandidateController@listSelectedCandidates');


Route::resource('sessions', 'SessionController');

Route::resource('candidates', 'CandidateController');
//
Route::post('apply', 'CandidateController@candidateApplying');

//

Route::resource('sponsors', 'SponsorController');

Route::resource('volunteers', 'VolunteerController');


Route::resource('scholarships', 'ScholarshipController');

Route::post('scholarship', 'ScholarshipController@scholarshipApplying');

Route::resource('mails','ContactUsController');
//votes
Route::get('votes', 'CandidateController@votes');


Route::resource('funds', 'FundController');

Route::get('fund', 'FundController@fund');


Route::resource('bookings', 'BookingController');
Route::get('book-mca', 'BookingController@booking');


Route::resource('candiateVoters', 'candiateVoterController');

Route::resource('links', 'LinksController');
Route::get('videos', 'LinksController@videos');

Route::resource('vistors', 'VistorsController');

Route::resource('crowneds', 'CrownedController');

Route::resource('gallaries', 'GallariesController');