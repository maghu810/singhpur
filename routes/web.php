<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicController;

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
Route::post('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout'); 
Route::get('/', function () {
    return view('front.home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', function(){
        return view('front.home');
    })->name('home');
    Route::get('/application', function(){
        return view('front.application');
    })->name('application');
    Route::get('/appl', function(){
        return view('application-view');
    });

    Route::get('/allappl', [ApplicController::class,'index'])->name('allapp');
    Route::post('/applic', [ApplicController::class,'store']);
    Route::get('appl/{id}', [ApplicController::class,'show']);
    Route::post('edit/{id}', [ApplicController::class,'destroy']);

    Route::post('/generate-pdf/{id}', [ApplicController::class, 'generatePDF'])->name('pdf');
});
