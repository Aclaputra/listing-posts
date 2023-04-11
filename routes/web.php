<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// all listings
Route::get('/', function () {
  return view('listings', [
    'heading' => 'Latest Listings',
    'listings' => Listing::all('*')
  ]);
});
// single listing
Route::get('/listings/{id}', function($id) {
  return view('listing', [
    'heading' => 'Listing by Id',
    'listing' => Listing::find($id)
  ]);
});

Route::get('/hello', function() {
    return response('<h1>Hello World</h1>', 200)
      ->header('Content-Type', 'text/plain')
      ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id) {
    return response('Posts with id of ' . $id, 200);
})->where('id','[0-9]+');

Route::get('/search', function(Request $request) {
    //dd($request);
    return response($request->name . ' live in ' . $request->city);
});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
