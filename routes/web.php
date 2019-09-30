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

//
Auth::routes();

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
//votes
Route::get('votes', 'CandidateController@votes');
