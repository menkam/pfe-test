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
    //dd($post = DB::table('personnes')->get());
    
    dump( App\personne::find('id_personne') );
});

Route::get('/about', function () {
    return view('/pages.about');
});
 
Route::get('/event', function () {
	$events = [
		'GDG bandjou',
		'Casio',
		'Cloud computing'
	];

    return view('/pages.event',compact('events'));
});