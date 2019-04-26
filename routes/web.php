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

// Route::get('/', function () {
//     return view('pages/home');
// });

Route::get('/', 'PagesController@home');

Route::get('/login/{output?}', 'LoginController@login');

Route::get('/logout', 'LoginController@logout');

Route::post('/log_in_click', 'LoginController@log_in_click');

Route::post('/add_product', 'ProductController@add_product');

Route::get('/addProduct/{result?}', 'PagesController@addProduct');

Route::get('/updateProduct', 'PagesController@updateProduct'); 

Route::get('/viewProducts', 'PagesController@viewProducts');

Route::get('/newAllocation/{result?}', 'PagesController@newAllocation');

Route::get('/changeAllocation', 'PagesController@changeAllocation');

Route::get('/viewAllocation', 'PagesController@viewAllocation');

Route::get('/type/{result?}', 'OptionsController@type');

Route::get('/status/{result?}', 'OptionsController@status');

Route::get('/updateType/{updateTypeName?}/{saveID?}/{saveOldType?}', 'OptionsController@updateType');

Route::post('/add_product', 'ProductController@add_product');

Route::get('/productUpdateGetData/{id}', 'ProductController@updateGetData');

Route::post('/productUpdateProductInfo', 'ProductController@updateProductInfo');

Route::post('/add_new_location', 'AllocationController@add_new_location');

Route::post('/addType', 'OptionsController@addType');

Route::post('/addStatus', 'OptionsController@addStatus');

Route::post('/updateAllocation', 'AllocationController@updateAllocation');

Route::get('/sortByStatus/{status}', 'ProductController@sortByStatus');

Route::get('/updateStatus/{updateStatusName?}/{saveID?}/{saveOldType?}', 'OptionsController@updateStatus');
 


