<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get("/about", function(){
    return view("profile.about");
});
Route::get("/trip", function(){
    return view("trips.index");
});
Route::get("/contact", function(){
    return view("profile.contact");
});
Route::get('trip', 'App\Http\Controllers\TripController@index') ;
Route::resource('trip', 'App\Http\Controllers\TripController');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:client', 'prefix' => 'client', 'as' => 'client.'], function() {
        Route::resource('test', \App\Http\Controllers\client\TestController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/index', 'App\Http\Controllers\AdminController@index')->name('admin.index');
        Route::post('/add/trip', 'App\Http\Controllers\TripController@store')->name('trips.store');
        Route::get('/edit/trip', 'App\Http\Controllers\TripController@edit')->name('trips.edit');
        Route::get('/update/trip', 'App\Http\Controllers\TripController@update')->name('trips.update');
        Route::get('/deletetrip', [TripController::class, 'destroy'])->name('deleteTrip');

    });
});
Route::post('/trip', 'App\Http\Controllers\TripController@index')->name('trips.index');
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
Route::get('auth/google', [SocialController::class, 'googleRedirect'])->name('auth.google');
Route::get('auth/google/callback', [SocialController::class, 'loginWithGoogle']);
Route::post('/paypal',[\App\Http\Controllers\PaypalController::class,'index'])->name('paypal_call');
Route::get('/paypal/return', [\App\Http\Controllers\PaypalController::class,'paypalReturn'])->name('paypal_return');
Route::get('/paypal/cancel', [\App\Http\Controllers\PaypalController::class,'paypalCancel'])->name('paypal_cancel');
