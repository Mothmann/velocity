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
        Route::resource('test', \App\Http\Controllers\TestController::class);
    });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('/trip', 'App\Http\Controllers\addTripController@index')->name('admin.addtrip');
        Route::post('/add/trip', 'App\Http\Controllers\addTripController@store')->name('trips.store');
        Route::get('/edit/trip', 'App\Http\Controllers\addTripController@edit')->name('trips.edit');
        Route::get('/update/trip', 'App\Http\Controllers\addTripController@update')->name('trips.update');
        Route::get('/deletetrip', 'App\Http\Controllers\addTripController@destroy')->name('deleteTrip');
        Route::get('/create/trip', 'App\Http\Controllers\addTripController@create')->name('trips.create');
        Route::get('/train', 'App\Http\Controllers\addTrainController@index')->name('admin.addtrain');
        Route::post('/add/train', 'App\Http\Controllers\addTrainController@store')->name('trains.store');
        Route::get('/edit/train', 'App\Http\Controllers\addTrainController@edit')->name('trains.edit');
        Route::get('/update/train', 'App\Http\Controllers\addTrainController@update')->name('trains.update');
        Route::get('/deletetrain', 'App\Http\Controllers\addTrainController@destroy')->name('deleteTrain');
        Route::get('/location', 'App\Http\Controllers\addLocationController@index')->name('admin.addlocation');
        Route::post('/add/location', 'App\Http\Controllers\addLocationController@store')->name('locations.store');
        Route::get('/edit/location', 'App\Http\Controllers\addLocationController@edit')->name('locations.edit');
        Route::get('/update/location', 'App\Http\Controllers\addLocationController@update')->name('locations.update');
        Route::get('/deletelocation', 'App\Http\Controllers\addLocationController@destroy')->name('deleteLocation');
    });
});
Route::post('/add/tickets', 'App\Http\Controllers\addTicketController@store')->name('tickets.store');
Route::get('/ticket', 'App\Http\Controllers\addTicketController@index')->name('tickets.show');
Route::get('/paynow', 'App\Http\Controllers\PaypalController@price')->name('paynow');
Route::get('/create/ticket', 'App\Http\Controllers\addTicketController@create')->name('tickets.create');
Route::post('/trip', 'App\Http\Controllers\TripController@index')->name('trips.index');
Route::get('/create/ticket', 'App\Http\Controllers\addTicketController@create')->name('tickets.create');
Route::get('pdf','App\Http\Controllers\addTicketController@pdf')->name('pdf');
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);
Route::get('auth/google', [SocialController::class, 'googleRedirect'])->name('auth.google');
Route::get('auth/google/callback', [SocialController::class, 'loginWithGoogle']);
Route::post('/paypal',[\App\Http\Controllers\PaypalController::class,'index'])->name('paypal_call');
Route::get('/paypal/return', [\App\Http\Controllers\PaypalController::class,'paypalReturn'])->name('paypal_return');
Route::get('/paypal/cancel', [\App\Http\Controllers\PaypalController::class,'paypalCancel'])->name('paypal_cancel');
