<?php

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
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| English
|--------------------------------------------------------------------------
|
*/
Route::get('English', function(){
    Session::put('lang','English');
    return Redirect('/'); 
});
/*
|--------------------------------------------------------------------------
| Arabic
|--------------------------------------------------------------------------
|
*/
Route::get('arabic', function(){
    Session::put('lang','arabic');
    return Redirect('/'); 
});
/*
|--------------------------------------------------------------------------
| German
|--------------------------------------------------------------------------
|
*/
Route::get('German', function(){
    Session::put('lang','German');
    return Redirect('/'); 
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Auth::routes();
/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('about', 'HomeController@about')->name('about');
Route::get('Contact', 'HomeController@Contact')->name('Contact');

/*
|--------------------------------------------------------------------------
| missing RETURN 404 PAGE Route
|--------------------------------------------------------------------------
|
*/
Route::get('missing', function () {
    return view('404');
});
/*
|--------------------------------------------------------------------------
| dashboardController
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => 'admin'], function () {
    Route::resource('admin','dashboardController');
    Route::resource('dashboard/dashboardSettings','dashboardSettingsController');
    Route::resource('dashboard/dashboardUsers','AdminUserController');
    Route::resource('dashboard/dashboardRoles','dashboardRoleController');
    Route::resource('dashboard/dashboardPosts','dashboardPostController');
    Route::resource('dashboard/dashboardCategores','dashboardCategoryController');
    Route::resource('dashboard/dashboardMenus','dashboardmenuController');
    Route::resource('dashboard/dashboardMenu-items','dashboardmenu_itemController');
    Route::resource('dashboard/dashboardAds','dashboardvertiserController');
    Route::resource('dashboard/dashboardCauses','dashboardCauseController');
    Route::resource('dashboard/dashboardEvents','dashboardEventController');
    Route::resource('dashboard/dashboardMessages','dashboardmessageController');
    Route::resource('dashboard/dashboardGalleres','dashboardGalleryController');
});
/*
|--------------------------------------------------------------------------
| resource
|--------------------------------------------------------------------------
|
*/
Route::resource('Causes','CauseController');
Route::resource('Events','EventController');
Route::resource('Posts','PostController');
Route::resource('Comments','CommentController');
Route::resource('Messages','messageController');
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
