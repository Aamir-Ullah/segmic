<?php

use App\Http\Controllers\Admin\HeroSection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientPartnerController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Models\ClientPartner;

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
Route::get('/', function () {
    return view('user.index');
});
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    Route::match(['get','post'],'login',[AdminController::class,'login']);
    Route::group(['middleware'=>['admin'],'role:admin'],function(){
        Route::get('dashboard',[AdminController::class,'dashboard']); 
        Route::get('profile',[AdminController::class,'profile']);
        Route::get('logout',[AdminController::class,'logout']);  


        // Routes for Header
        Route::get('header',[HeaderController::class,'index'])->name('admin.header.index');
        
        
        // Routes For Hero Section
        Route::get('hero-section',[HeroSectionController::class,'index'])->name('admin.hero-section.index');
        Route::post('hero-section/store',[HeroSectionController::class,'store'])->name('admin.hero-section.store');
        
        // Routes For Client And Partner header Section 
        Route::get('client_partner_header',[ClientPartnerController::class,'client_partner_header'])->name('client_partner_header');
        Route::post('client_partner_header/store',[ClientPartnerController::class,'store'])->name('client_partner_header.store');
        Route::get('client_partner_header/edit/{id}',[ClientPartnerController::class,'edit'])->name('client_partner_header.edit');
        Route::post('client_partner_header/update/{id}',[ClientPartnerController::class,'update'])->name('client_partner_header.update');
        Route::get('client_partner_header/delete/{id}',[ClientPartnerController::class,'delete'])->name('client_partner_header.delete');
        // Routes For Client And Partner Carousel Section  
        Route::get('client_partner_carousel',[ClientPartnerController::class,'client_partner_carousel'])->name('client_partner_carousel');
        Route::post('client_partner_carousel/store',[ClientPartnerController::class,'store'])->name('client_partner_carousel.store');
        Route::get('client_partner_carousel/edit/{id}',[ClientPartnerController::class,'edit'])->name('client_partner_carousel.edit');
        Route::post('client_partner_carousel/update/{id}',[ClientPartnerController::class,'update'])->name('client_partner_carousel.update');
        Route::get('client_partner_carousel/delete/{id}',[ClientPartnerController::class,'delete'])->name('client_partner_carousel.delete');
    }); 
});

