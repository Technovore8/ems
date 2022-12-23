<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\PropertiesController;



use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\BuyPropertiesController;
use App\Http\Controllers\SellPropertiesController;
use App\Http\Controllers\backend\BookingController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ProjectController;
use App\Http\Controllers\backend\LocationController;
use App\Http\Controllers\backend\PropertyController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\backend\HomeController as backendHomecontroller;
use App\Http\Controllers\ProjectController as ControllersProjectController;
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
#frontend
//Home
Route::get('/',[HomeController::class,'home'])->name("home");

#auth
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login-post',[AuthController::class,'loginPost'])->name('login.post');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/registration-post',[AuthController::class,'store'])->name('reg.post');





#profile
Route::get('/user-profile',[AuthController::class,'profile'])->name('user.profile');
Route::get('/profile-edit/{id}',[AuthController::class,'edit'])->name('profile.edit');
Route::put('/update-profile/{id}',[AuthController::class,'update'])->name('profile.update');

//properties
Route::get('/properties',[PropertiesController::class,'properties'])->name('properties');
Route::get('/see-details-for-property/{id}',[BuyPropertiesController::class,'singleView'])->name('property.singleView');
Route::get('/all-property-index',[PropertiesController::class,'index'])->name('frontend.properties');
Route::get('/sell-property',[SellPropertiesController::class,'sell'])->name('property.sell');
Route::post('/sell-properties-post',[SellPropertiesController::class,'sellPost'])->name('sell.post');
Route::get('/property-with-project/{id}',[PropertiesController::class,'projectPro'])->name('project.property');


#project
Route::get('/front-project-index',[ControllersProjectController::class,'index'])->name('front.project');
Route::get('/front-project-details/{id}',[ControllersProjectController::class,'details'])->name('front.project.view');

#book 
Route::get('/book-visit/{id}',[BookController::class,'create'])->name('frontend.book.create');
//services
Route::get('/services',[ServiceController::class,'services'])->name('services');
//Aboutus
Route::get('/aboutus',[AboutusController::class,'aboutus'])->name('aboutus');
//Contactus
Route::get('/contactus',[ContactusController::class,'contactus'])->name('contactus');
Route::post('/contactus-message',[ContactusController::class,'store'])->name('contactus.message');
Route::get('/message',[ContactusController::class,'message'])->name('message');
Route::get('/message/delete/{id}',[ContactusController::class,'delete'])->name('message.delete');
//search page
Route::get('/search',[SearchController::class,'search'])->name('search');





//backend


Route::group(["middleware"=>["auth","checkAdmin"],"prefix"=>"admin"],function(){
//home page
Route::get('/',[admincontroller::class,'admin'])->name('admin');

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
Route::put('/location-update/{id}',[LocationController::class,'update'])->name('backend.location.update');
Route::get('/location-delete/{id}',[LocationController::class,'delete'])->name('backend.location.delete');



#booking
Route::get('/booking-create',[BookingController::class,'create'])->name('backend.booking.create');
Route::get('/booking-index',[BookingController::class,'index'])->name('backend.booking.index');
Route::post('/booking-store',[BookingController::class,'store'])->name('backend.booking.store');
Route::get('/booking-view/{id}',[BookingController::class,'view'])->name('backend.booking.view');
Route::get('/booking-edit/{id}',[BookingController::class,'edit'])->name('backend.booking.edit');
Route::put('/booking-update/{id}',[BookingController::class,'update'])->name('backend.booking.update');
Route::get('/booking-delete/{id}',[BookingController::class,'delete'])->name('backend.booking.delete');

#schedule
Route::get('/schedule-create',[ScheduleController::class,'create'])->name('backend.schedule.create');
Route::get('/schedule-index',[ScheduleController::class,'index'])->name('backend.schedule.index');
Route::get('/schedule-edit',[ScheduleController::class,'edit'])->name('backend.schedule.edit');


#project
Route::get('/project-create',[ProjectController::class,'create'])->name('backend.project.create');
Route::get('/project-index',[ProjectController::class,'index'])->name('backend.project.index');
Route::post('/project-store',[ProjectController::class,'store'])->name('backend.project.store');
Route::get('/project-edit/{id}',[ProjectController::class,'edit'])->name('backend.project.edit');
Route::put('/project-update/{id}',[ProjectController::class,'update'])->name('backend.project.update');
Route::get('/project-delete/{id}',[ProjectController::class,'delete'])->name('backend.project.delete');




#property
Route::get('/property-create',[PropertyController::class,'create'])->name('backend.property.create');
Route::get('/property-index',[PropertyController::class,'index'])->name('backend.property.index');
Route::post('/property-store',[PropertyController::class,'store'])->name('backend.property.store');
Route::get('/property-edit/{id}',[PropertyController::class,'edit'])->name('backend.property.edit');
Route::get('/property-view/{id}',[PropertyController::class,'view'])->name('backend.property.view');
Route::post('/property-view/{id}',[PropertyController::class,'propertyStatusUpdate'])->name('backend.property.status.update');
Route::put('/property-update/{id}',[PropertyController::class,'update'])->name('backend.property.update');
Route::get('/Property-delete/{id}',[PropertyController::class,'delete'])->name('backend.property.delete');



#contactus
Route::get('/contact-index',[ContactController::class,'index'])->name('backend.contact.index');

});