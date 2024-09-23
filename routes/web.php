<?php


 use App\Http\Controllers\admin\UserController;
 use App\Http\Controllers\admin\AllDataController;
 use App\Http\Controllers\website\HomeController;
 use App\Http\Controllers\website\RegisterController;
 use App\Http\Controllers\website\CheckoutController;

use App\Models\User;
use App\Models\slider;
use App\Models\product;
use App\Models\about;
use App\Models\cart;
use App\Models\order;

use App\Http\Middleware\ValidUser;


Route::get('/',[HomeController::class,'home'])->name('Index');
// Route::get('/',[HomeController::class,'card']);
Route::get('/Websiteregister',[RegisterController::class,'WebsiteRegistertion']);
Route::post('/Saveregister',[RegisterController::class,'Register']);
Route::get('/WebsiteLogin',[RegisterController::class,'showLogin']);
Route::post('/SaveLogin',[RegisterController::class,'Login']);
Route::get('/Websitelogout',[RegisterController::class,'Logout']);

Route::get('/orderPage',[HomeController::class,'orderPage']);

Route::get('/AboutPage',[HomeController::class,'aboutpage']);

Route::get('/contactPage',[HomeController::class,'contactPage']);

Route::get('/CheckoutPage',[CheckoutController::class,'showPaymentPage']);

Route::post('/checkout',[CheckoutController::class,'Docheckout']);

Route::post('/addToCart',[HomeController::class,'addtocart']);

Route::post('/searchitem',[HomeController::class,'search']);
Route::get('/totalItem',[HomeController::class,'header']);



/*Below section we made for the Admin panel */


Route::get('/dashboard',[AllDataController::class,'dashboard'])->middleware(ValidUser::class);
Route::get('/register',[UserController::class,'index']);
Route::post('/register',[UserController::class,'Register']);
Route::get('/login',[UserController::class,'showLogin']);
Route::post('/loginRoute',[UserController::class,'Login']);
Route::get('/logout',[UserController::class,'Logout']);

Route::get('/search',[AllDataController::class,'search']);
//Route::get('/search',[AllDataController::class,'aboutSearch']);


Route::post('/Saveslider',[AllDataController::class,'SaveSlider']);
Route::view('/ShowSliderPage','admin.sliderShowPage');
Route::get('/mainslider',[AllDataController::class,'showIndex']);
Route::get('/editSlider/{id}/edit',[AllDataController::class,'ShowUpdatePage']);
Route::put('/SaveUpdateSlider/{id}/edit',[AllDataController::class,'SaveUpdateSlider']);
Route::get('/deleteSlider/{id}/delete',[AllDataController::class,'DeleteSlider']);


Route::post('/SaveOrder',[AllDataController::class,'StoreOrder']);
Route::view('/ShowOrderPage','admin.OrderShow');
Route::get('/mainOrder',[AllDataController::class,'orderIndex']);
Route::get('/editOrder/{id}/edit',[AllDataController::class,'showUpdateOrderPage']);
Route::put('/SaveUpdateOrder/{id}/edit',[AllDataController::class,'UpdateOrder']);
Route::get('/deleteOrder/{id}/delete',[AllDataController::class,'deleteOrder']);


Route::post('/SaveAbout',[AllDataController::class,'StoreAbout']);
Route::view('/ShowAboutPage','admin.aboutShowPage');

Route::get('/mainAbout',[AllDataController::class,'aboutIndex']);
Route::get('/editAbout/{id}/edit',[AllDataController::class,'AboutShowPage']);
Route::put('/SaveUpdateAbout/{id}/edit',[AllDataController::class,'UpdateAboutData']);
Route::get('/deleteAbout/{id}/delete',[AllDataController::class,'deleteAbout']);





/*This area we selected for the Website which show on the screen */





