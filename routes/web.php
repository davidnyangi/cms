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


Route::get('/','LoginController@loginView');
Route::get('dashboard','DashboardController@welcome');
Route::get('accountant','AccountantController@welcome');
Route::get('secretary','SecretaryController@welcome');
Route::get('user','DashboardController@user');
Route::post('login','LoginController@login');
Route::post('addcountry','DashboardController@addncountry');
Route::post('addregion','DashboardController@addnregion');
Route::post('addchurch','DashboardController@addnchurch');
Route::get('logout', 'LoginController@getLogout');
Route::get('search/autocomplete', 'DashboardController@autocomplete');
Route::get('curr_dashboard', 'DashboardController@getDashboard');
Route::get('dashboard2', 'DashboardController@getDashboard2');
Route::get('allmembers', 'DashboardController@getMembers');
Route::get('zgact_dashboard', 'DashboardController@getZGACTDashboard');
Route::get('searchajax',array('as'=>'searchajax','uses'=>'DashboardController@autoComplete'));
Route::post('savememberzgact',array('as'=>'savememberzg','uses'=>'DashboardController@saveZGACTMember'));
Route::post('savememberbuild',array('as'=>'savememberbd','uses'=>'DashboardController@saveBuildMember'));
// Route for view/blade file.
Route::get('importExport', 'MaatwebsiteController@importExport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcel/{type}', 'MaatwebsiteController@downloadExcel');
// Route for import excel data to database.
Route::post('importExcel', 'MaatwebsiteController@importExcel');
// Route for view/blade file.
Route::get('importExcelBuild', 'BuildMaatwebsiteController@importExport');
// Route for export/download tabledata to .csv, .xls or .xlsx
Route::get('downloadExcelBuild/{type}', 'BuildMaatwebsiteController@downloadExcel');
// Route for import excel data to database.
Route::post('importExcelBuild', 'BuildMaatwebsiteController@importExcel');
Route::post('deletemember','DashboardController@deleteMember');