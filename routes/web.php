<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\backend\UserController;




use App\Http\Controllers\BuyPropertiesController;
use App\Http\Controllers\SellPropertiesController;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\LocationController;
use App\Http\Controllers\backend\PropertyController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\backend\HomeController as backendHomecontroller;
use App\Http\Controllers\backend\LocationController as backendLocationController;
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
//Home
Route::get('/',[HomeController::class,'home'])->name("home");



//properties
Route::get('/properties',[PropertiesController::class,'properties'])->name("properties");
Route::get('/buyproperties',[BuyPropertiesController::class,'buyproperties'])->name('buyproperties');
Route::get('/sellproperties',[SellPropertiesController::class,'sellproperties'])->name("sellproperties");


//services
Route::get('/services',[ServiceController::class,'services'])->name('services');



//Aboutus
Route::get('/aboutus',[AboutusController::class,'aboutus'])->name('aboutus');



//Contactus
Route::get('/contactus',[ContactusController::class,'contactus'])->name('contactus');


//search page
Route::get('/search',[SearchController::class,'search'])->name('search');



























//backend
//home page
Route::get('/admin',[admincontroller::class,'admin'])->name('admin');

Route::get('/home',[backendHomeController::class,'home'])->name('adminhome');

#user
Route::get('/user-index',[UserController::class,'index'])->name('backend.user.index');
Route::get('/user-create',[UserController::class,'create'])->name('backend.user.create');
Route::post('/user-store',[UserController::class,'store'])->name('backend.user.store');
Route::get('/user-edit/{id}',[UserController::class,'edit'])->name('backend.user.edit');
Route::put('/user-update/{id}',[UserController::class,'update'])->name('backend.user.update');
Route::get('/user-delete/{id}',[UserController::class,'delete'])->name('backend.user.delete');



#location
Route::get('/location-create',[LocationController::class,'create'])->name('backend.location.create');
Route::get('/location-index',[LocationController::class,'index'])->name('backend.location.index');
Route::post('/location-store',[LocationController::class,'store'])->name('backend.location.store');
Route::get('/location-edit/{id}',[LocationController::class,'edit'])->name('backend.location.edit');

#booking
Route::get('/booking-create',[BookingController::class,'create'])->name('backend.booking.create');
Route::get('/booking-index',[BookingController::class,'index'])->name('backend.booking.index');
Route::get('/booking-edit',[BookingController::class,'edit'])->name('backend.booking.edit');


#schedule
Route::get('/schedule-create',[ScheduleController::class,'create'])->name('backend.schedule.create');
Route::get('/schedule-index',[ScheduleController::class,'index'])->name('backend.schedule.index');
Route::get('/schedule-edit',[ScheduleController::class,'edit'])->name('backend.schedule.edit');


#project
Route::get('/project-create',[ProjectController::class,'create'])->name('backend.project.create');
Route::get('/project-index',[ProjectController::class,'index'])->name('backend.project.index');
Route::post('/project-store',[ProjectController::class,'store'])->name('backend.project.store');
Route::get('/project-edit/{id}',[ProjectController::class,'edit'])->name('backend.project.edit');


#property
Route::get('/property-create',[PropertyController::class,'create'])->name('backend.property.create');
Route::get('/property-index',[PropertyController::class,'index'])->name('backend.property.index');
Route::post('/property-store',[PropertyController::class,'store'])->name('backend.property.store');
Route::get('/property-edit/{id}',[PropertyController::class,'edit'])->name('backend.property.edit');




