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
// Route::get('pages/index', function () {
//     return view('pages.index');
// });

// Route::get('pages/404', function () {
//     return view('pages.404');
// });

// Route::get('pages/basic_table', function () {
//     return view('pages.basic_table');
// });
// Route::get('pages/blank', function () {
//     return view('pages.blank');
// });
// Route::get('pages/buttons', function () {
//     return view('pages.buttons');
// });
// Route::get('pages/chart-chartjs', function () {
//     return view('pages.chart-chartjs');
// });
// Route::get('pages/contact', function () {
//     return view('pages.contact');
// });
// Route::get('pages/form_component', function () {
//     return view('pages.form_component');
// });
// Route::get('pages/form_validation', function () {
//     return view('pages.form_validation');
// });
// Route::get('pages/general', function () {
//     return view('pages.general');
// });
// Route::get('pages/grids', function () {
//     return view('pages.grids');
// });
// Route::get('pages/login', function () {
//     return view('pages.login');
// });
// Route::get('pages/profile', function () {
//     return view('pages.profile');
// });
// Route::get('pages/widgets', function () {
//     return view('pages.widgets');
// });

Route::get('pages/index', 'DashboardController@index');

Route::get('pages/basic_table', 'TablesController@table');

Route::get('pages/blank', 'PagesController@blank');

Route::get('pages/buttons', 'UIFituresController@buttons');

Route::get('pages/chart-chartjs', 'ChartsController@charts');

Route::get('pages/contact', 'PagesController@contact');

Route::get('pages/form_component', 'FormsController@element');

Route::get('pages/form_validation', 'FormsController@form');

Route::get('pages/general', 'UIFituresController@general');

Route::get('pages/grids', 'UIFituresController@grids');

Route::get('pages/login', 'PagesController@login');

Route::get('pages/profile', 'PagesController@profile');

Route::get('pages/widgets', 'WidgetsController@widgets');

Route::get('pages/404', 'PagesController@error');
