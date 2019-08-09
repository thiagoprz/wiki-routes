<?php
/**
 * Package routes
 */
Route::get('wiki_routes', 'Thiagoprz\WikiRoutes\Http\Controllers\WikiRoutesController@index');
Route::post('wiki_routes', 'Thiagoprz\WikiRoutes\Http\Controllers\WikiRoutesController@store');