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
//home
Route::get('/', 'Controller@HomeGet')->name('home');

Route::get('/calendar', 'Controller@GetDataCalendar')->name('calendar');
//Calendar
Route::get('/pref/{id}', 'Controller@SendDataCalendar')->where('id','[0-9]+');
//Login to Admin
Route::get('/login', function () {
    return view('login2');
});
Route::post('/LogController', 'Controller@LogController');
//Admin menu panell
Route::get('/food', 'Controller@SelectFood');
Route::get('/hizmat', 'Controller@SelectHizmat');
//Route::get('/calendar', 'Controller@SelectCalendar');
Route::get('/comment', 'Controller@SelectComment');
/*Add information*/
Route::get('/AddInfor','Controller@AddInforType');
/* AddXizmat */
Route::get('/AddXizmat','Controller@AddXizmatType');
//Edit and delete Route
Route::get('/DeleteFood/{id}','Controller@DeleteFood');
Route::get('/EditFood/{id}','Controller@EditFood');
Route::get('/EditHizmat/{id}','Controller@EditHizmat');
Route::post('/AddInformation','Controller@EditHizmatPost');

Route::get('/DeleteHizmat/{id}','Controller@DeleteHizmat');
//Add information
Route::post('/AddInformationType','Controller@AddInformationType');
//Calendar
Route::post('/CalendarInsert','Controller@CalendarInsert');
Route::post('/CalendarUpdate','Controller@CalendarUpdate');
//calendar in Welcome
Route::get('/{id}','Controller@Next')->where('id','[0-9]+');
//naxor abed vecher larni Calendar uchun ishlatish
Route::get('naxorVar/{id}','Controller@naxorVar')->where('id','[0-9]+');
Route::get('abedVar/{id}','Controller@abedVar')->where('id','[0-9]+');
Route::get('vecherVar/{id}','Controller@vecherVar')->where('id','[0-9]+');

//comment sent to database
Route::post('/commentDB','Controller@commentDB');
//comment show delete , hide , show
Route::get('/DeleteComment/{id}','Controller@DeleteComment')->where('id','[0-9]+');
Route::get('/ShowComment/{id}','Controller@ShowComment')->where('id','[0-9]+');
Route::get('/HideComment/{id}','Controller@HideComment')->where('id','[0-9]+');
/*end*/
Route::get('/{var}/{id}','Controller@SelectTypeCalendar')->where('id','[0-9]+');