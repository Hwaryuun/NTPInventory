<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NTPLogInCTLR;
use App\Http\Controllers\NTPLogOutCTLR;
use App\Http\Controllers\ApplicantCTRL;
use App\Http\Controllers\DashBoardCTLR;
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


Route::get('/', [NTPLogInCTLR::class,'index'])->middleware(['guest:web']);

Route::group(['prefix' => 'admin'],function(){

    Route::middleware(['guest:web'])->group(function(){     
        Route::resource('NTPLogin',NTPLogInCTLR::class);
    });
   
    Route::middleware(['auth:web'])->group(function(){

         Route::resource('NTPDashBoard',DashBoardCTLR::class);
         Route::resource('NTPApplicant',ApplicantCTRL::class);
      
        
         Route::get('/NTPLogout', [NTPLogOutCTLR::class, 'store'])->name('NTPLogout');
    });
});
