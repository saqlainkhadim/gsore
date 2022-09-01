<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;

//admin controllers
use App\Http\Controllers\Administrator\PasswordController;
use App\Http\Controllers\Administrator\QuoteController;
use App\Http\Controllers\Administrator\DashboardController;
use App\Http\Controllers\Administrator\GetintouchController;
use App\Http\Controllers\Administrator\ContactController;
use App\Http\Controllers\Administrator\GeneralSettingController;
use App\Http\Controllers\Administrator\GalleryController;
use App\Http\Controllers\Administrator\BlogController;
use App\Http\Controllers\Administrator\LoginController;
use App\Http\Controllers\Administrator\BannerController;


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
Route::get('/', [HomeController::class,'index']);
Route::get('/shop-sidebar-grid-left',[HomeController::class,'shop_sidebar_grid_left']);
Route::get('/shop-sidebar-grid-right', [HomeController::class,'shop_sidebar_grid_right']);
Route::get('/shop-sidebar-full-width',[HomeController::class,'shop_sidebar_full_width']);
Route::get('/shop-sidebar-left-list-view',[HomeController::class,'shop_sidebar_left_list_view']);
Route::get('/cart',[HomeController::class,'cart']);
Route::get('/checkout',[HomeController::class,'checkout']);
Route::get('/empty-cart',[HomeController::class,'empty_cart']);
Route::get('/wishlist',[HomeController::class,'wishlist']);
Route::get('/my-account',[HomeController::class,'my_account']);
Route::get('/login',[HomeController::class,'login']);
Route::get('/product-single-affiliate',[HomeController::class,'product_single_affiliate']);
Route::get('/blog-grid-sidebar-left',[HomeController::class,'blog_grid_sidebar_left']);
Route::get('/blog-single-sidebar-left',[HomeController::class,'blog_single_sidebar_left']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/frequently-questions',[HomeController::class,'frequently_questions']);
Route::get('/privacy-policy',[HomeController::class,'privacy_policy']);
Route::get('/error',[HomeController::class,'error']);
// Route::get('/profile-health-safety',[HomeController::class,'health']);
// Route::get('/project-drillingwork',[HomeController::class,'drillingwork']);
// Route::get('/project-earthmovingwork',[HomeController::class,'earthmovingwork']);
// Route::get('/project',[HomeController::class,'project']);




Auth::routes();
Route::group(['namespace'=>'Administrator','prefix'=>'administrator'], function()
{
	Route::get('/', [LoginController::class,'index'])->name('admin_index_page');
	Route::post('/authenticate', [LoginController::class,'authenticate']);
	Route::get('/logout', [LoginController::class,'logout'])->name('admin_logout');
	Route::get('/forget-password', [LoginController::class,'forget_pass'])->name('admin_forget_pass');
	Route::post('/link-forget-password', [LoginController::class,'forget_pass_send_link'])->name('admin_link_forget_pass');
	Route::get('/forget-change-password/{token}', [LoginController::class,'forget_pass_token'])->name('admin_forget_pass_token');
	Route::post('/update-new-password', [LoginController::class,'update_forget_pass'])->name('admin_update_forget_pass');
});

Route::group(['namespace'=>'Administrator','prefix'=>'administrator','middleware' => ['auth.administrator:administrator']], function() {

  Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin_dashboard');
  //change password controller
  Route::get('/change-password', [PasswordController::class, 'change_password'])->name('admin_change_pass');
  Route::post('/update-change-password', [PasswordController::class, 'update_change_password'])->name('admin_update_change_pass');
  //contact us controller
  Route::get('/contact-us-list', [ContactController::class, 'index'])->name('admin_contact_us');
  Route::post('/contact-us/getcontact_usData', [ContactController::class, 'getcontact_us'])->name('admin_getcontact_us');
  Route::get('/contact-us/delete/{id}', [ContactController::class, 'delete'])->name('admin_contact_delete');
  Route::get('/contact-us/view/{id}', [ContactController::class, 'view'])->name('admin_contact_us_view');
  //Ruote
  Route::get('/quote-list', [QuoteController::class, 'index'])->name('admin_quote');
  Route::post('/quote/getquoteData', [QuoteController::class, 'getquoteData'])->name('admin_getquoteData');
  Route::get('/quote/delete/{id}', [QuoteController::class, 'delete'])->name('admin_quote_delete');
  Route::get('/quote/view/{id}', [QuoteController::class, 'view'])->name('admin_quote_view');
  //Get In Touch
  Route::get('/get-in-touch-list', [GetintouchController::class, 'index'])->name('admin_touch');
  Route::post('/get/in/touch/gettouchData', [GetintouchController::class, 'gettouchData'])->name('admin_gettouchData');
  Route::get('/get/in/touch/delete/{id}', [GetintouchController::class, 'delete'])->name('admin_touch_delete');
  Route::get('/get/in/touch/view/{id}', [GetintouchController::class, 'view'])->name('admin_touch_view');
  //general setting controller
  Route::get('/general-setting', [GeneralSettingController::class, 'index'])->name('admin_general_setting');
  Route::post('/general-setting-store', [GeneralSettingController::class, 'store'])->name('admin_general_setting_store');
  //gallery Controller                                                        
  Route::get('/gallery-list', [GalleryController::class, 'index'])->name('admin_gallery');
  Route::post('/gallery/getGalleryData', [GalleryController::class, 'getGalleryData'])->name('admin_getGalleryData');
  Route::get('/gallery/create', [GalleryController::class, 'create'])->name('admin_gallery_create');
  Route::post('/gallery/store', [GalleryController::class, 'store'])->name('admin_gallery_store');
  Route::get('/gallery/update-status/{id}', [GalleryController::class, 'update_status'])->name('admin_gallery_status');
  Route::get('/gallery/update-home-status/{id}', [GalleryController::class, 'update_home_status'])->name('admin_gallery_home_status');
  Route::get('/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('admin_gallery_delete');
  Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('admin_gallery_edit');
  Route::post('/gallery/edit-update', [GalleryController::class, 'edit_update'])->name('admin_gallery_edit_store');
  //blogs
  Route::get('/blog-list', [BlogController::class, 'index'])->name('admin_blog');
  Route::post('/blog/getBlogData', [BlogController::class, 'getBlogData'])->name('admin_getBlogData');
  Route::get('/blog/create', [BlogController::class, 'create'])->name('admin_blog_create');
  Route::post('/blog/store', [BlogController::class, 'store'])->name('admin_blog_store');
  Route::get('/blog/update-status/{id}', [BlogController::class, 'update_status'])->name('admin_blog_status');
  Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('admin_blog_delete');
  Route::get('/blog/view/{id}', [BlogController::class, 'view'])->name('admin_blog_edit');
  Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin_blog_edit');
  Route::post('/blog/edit-update', [BlogController::class, 'edit_update'])->name('admin_blog_edit_store');
  //Banner Controller                                                        
  Route::get('/banner-list', [BannerController::class, 'index'])->name('admin_banner');
  Route::post('/banner/getBannerData', [BannerController::class, 'getBannerData'])->name('admin_getBannerData');
  Route::get('/banner/create', [BannerController::class, 'create'])->name('admin_banner_create');
  Route::post('/banner/store', [BannerController::class, 'store'])->name('admin_banner_store');
  Route::get('/banner/update-status/{id}', [BannerController::class, 'update_status'])->name('admin_banner_status');
  Route::get('/banner/delete/{id}', [BannerController::class, 'delete'])->name('admin_banner_delete');
  Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('admin_banner_edit');
  Route::post('/banner/edit-update', [BannerController::class, 'edit_update'])->name('admin_banner_edit_store');

});
