<?php

// Below are the controller files
  use App\Http\Controllers\admin\UserController;
  use App\Http\Controllers\admin\AllDataController;
  use App\Http\Controllers\admin\ReportController;

  use App\Http\Controllers\website\HomeController;
  use App\Http\Controllers\website\RegisterController;
  use App\Http\Controllers\website\CheckoutController;
  use App\Http\Controllers\website\StripeCheckoutController;
  use App\Http\Controllers\website\administratorReportController;
  use Illuminate\Support\Facades\Route;


// Below are the database tables 
  use App\Models\User;
  use App\Models\slider;
  use App\Models\product;
  use App\Models\about;
  use App\Models\cart;
  use App\Models\order;
  use App\Models\customerOrder;
  use App\Models\comment;
  use App\Models\rating;
  use \Stripe\Stripe;
  use App\Models\owner;
  use App\Models\category;
  //Below are the middleware
  use App\Http\Middleware\ValidUser;
  use App\Http\Middleware\OnWebsite;




route::get('/formdata',[HomeController::class,'updateStatusField'])->name('order.updateStatus');

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
Route::post('/addToCart',[HomeController::class,'addtocart'])->middleware(OnWebsite::class);
Route::post('/searchitem',[HomeController::class,'search']);
Route::get('/totalItem',[HomeController::class,'header']);
Route::post('/SubmitComment',[HomeController::class,'SubmitComment']);

// Route::post('/checkout',[CheckoutController::class,'Docheckout']);
Route::get('/deleteItem/{id}/delete',[CheckoutController::class,'deleteItem']);

Route::view('/successpage','SuccessPage');



Route::get('/verify-email/{id}', [RegisterController::class, 'verifyEmail'])->name('user.verify.email');

Route::post('/SendMessageForOrder',[HomeController::class,'SendMessageForOrder']);



// Route::middleware(['web'])->group(function () {
 
//   Route::get('/googleLogin', [RegisterController::class, 'googleLogin']);
// Route::get('/backtohome', [RegisterController::class, 'googleHandle']);

// });
Route::get('/googleLogin', [RegisterController::class, 'googleLogin']);
Route::get('/backtohome', [RegisterController::class, 'googleHandle']);



Route::get('/EditProfileData/{id}/edit', [RegisterController::class, 'edit']);
Route::put('SaveProfileData/{id}',[RegisterController::class,'SaveProfileData']);

 Route::get('/CheckoutPage',[StripeCheckoutController::class,'showPaymentPage']);
 Route::post('/SaveData',[StripeCheckoutController::class,'SaveData']);
 
 
 
 Route::controller(StripeCheckoutController::class)->group(function(){
  Route::get('stripe/{value}', 'stripe');
  Route::post('stripe/{value}', 'stripePost')->name('stripe.post');
 });


Route::post('/saveRating',[HomeController::class,'saveRating']);
Route::get('/detail/{id}',[HomeController::class,'detailFunction']);
Route::get('category/{id}',[HomeController::class,'categoryfunction']);

Route::get('/alldata',[administratorReportController::class,'allData']);
Route::get('/Todays',[administratorReportController::class,'today']);
Route::get('/lastWeeks',[administratorReportController::class,'lastWeek']);
Route::get('/yesterdays',[administratorReportController::class,'yesterday']);
Route::get('/CurrentMonths',[administratorReportController::class,'CurrentMonth']);
Route::get('/LastMonths',[administratorReportController::class,'LastMonth']);
Route::get('/CurrentYears',[administratorReportController::class,'CurrentYear']);

Route::get('/brand/{id}/item',[administratorReportController::class,'brand']);



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
Route::get('/mainslider',[AllDataController::class,'showIndex'])->middleware(ValidUser::class);
Route::get('/editSlider/{id}/edit',[AllDataController::class,'ShowUpdatePage']);
Route::put('/SaveUpdateSlider/{id}/edit',[AllDataController::class,'SaveUpdateSlider']);
Route::get('/deleteSlider/{id}/delete',[AllDataController::class,'DeleteSlider']);
Route::get('/status/{id}/edit',[AllDataController::class,'Status']);



Route::post('/SaveOrder',[AllDataController::class,'StoreOrder']);
Route::view('/ShowOrderPage','admin.OrderShow');
Route::get('/mainOrder',[AllDataController::class,'orderIndex'])->middleware(ValidUser::class);
Route::get('/editOrder/{id}/edit',[AllDataController::class,'showUpdateOrderPage']);
Route::put('/SaveUpdateOrder/{id}/edit',[AllDataController::class,'UpdateOrder']);
Route::get('/deleteOrder/{id}/delete',[AllDataController::class,'deleteOrder']);


Route::post('/SaveAbout',[AllDataController::class,'StoreAbout']);
Route::view('/ShowAboutPage','admin.aboutShowPage');

Route::get('/mainAbout',[AllDataController::class,'aboutIndex'])->middleware(ValidUser::class);
Route::get('/editAbout/{id}/edit',[AllDataController::class,'AboutShowPage']);
Route::put('/SaveUpdateAbout/{id}/edit',[AllDataController::class,'UpdateAboutData']);
Route::get('/deleteAbout/{id}/delete',[AllDataController::class,'deleteAbout']);
Route::get('/ShowComments',[AllDataController::class,'ShowAllcomments']);
Route::get('/deletecomment/{id}/delete',[AllDataController::class,'DeleteComment']);

/*This area we selected for the Website which show on the screen */
Route::get('/RecievedOrder',[AllDataController::class,'RecievedOrder'])->middleware(ValidUser::class);
Route::get('/deleteRecOrd/{id}/delete',[AllDataController::class,'deleteRecOrd']);


Route::view('/show_owner_page','admin.OwnerAddPage');

Route::get('/owner',[AllDataController::class,'show_owner_data']);

Route::post('/Save_owner_Record',[AllDataController::class,'Add_owner_record']);

Route::get('/owner/{id}/edit',[AllDataController::class,'Show_update_Owner_page_Record']);
Route::put('/Save_Update_Owner_Record/{id}/edit',[AllDataController::class,'Save_update_Record_on_Database']);
Route::get('/owner/{id}/delete',[AllDataController::class,'Delete_Owner_Record']);


Route::view('/employees','admin.employeesPage')->name('/employees');
Route::post('SaveEmployeesData',[AllDataController::class,'SaveEmployeesData']);


Route::get('/Today',[ReportController::class,'today']);
Route::get('/lastWeek',[ReportController::class,'lastWeek']);
Route::get('/yesterday',[ReportController::class,'yesterday']);
Route::get('/CurrentMonth',[ReportController::class,'CurrentMonth']);
Route::get('/LastMonth',[ReportController::class,'LastMonth']);
Route::get('/CurrentYear',[ReportController::class,'CurrentYear']);

Route::get('/list/{id}/item',[ReportController::class,'brand']);



Route::get('/message',[AllDataController::class,'See_Messages']);

Route::get('/Send_message_to_user/{id}',[AllDataController::class,'Send_message_to_user']); // here just coming send_message_page
Route::post('/just_for_sender',[AllDataController::class,'just_for_sender']);          // and here saved the data in table


Route::get('/Alluser',[AllDataController::class,'AllUser']);

Route::post('/send-bulk-email', [UserController::class, 'sendBulkEmail'])->name('send.bulk.email');
