<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AnalyticsController;


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

// Front End Themes
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/parallax', [App\Http\Controllers\HomeController::class, 'parallax'])->name('parallax');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/meet-our-team', [App\Http\Controllers\HomeController::class, 'team'])->name('team');
Route::get('/meet-our-team/{slung}', [App\Http\Controllers\HomeController::class, 'team_single'])->name('team-single');
Route::get('/our-services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/our-services/{slung}', [App\Http\Controllers\HomeController::class, 'service'])->name('service');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/copyright', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');
Route::post('/news-letters', [HomeController::class, 'news_letters'])->name('news-letters');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/page-careers', [App\Http\Controllers\HomeController::class, 'page_careers'])->name('page-careers');
Route::get('/apply-career/{slung}', [App\Http\Controllers\HomeController::class, 'apply_career'])->name('apply-career');
Route::post('/apply-career', [App\Http\Controllers\HomeController::class, 'apply_career_post'])->name('apply-career-post');
Route::get('/career-inquiry', [App\Http\Controllers\HomeController::class, 'career_inquiry'])->name('career-inquiry');



Route::post('/submit-message', [HomeController::class, 'submit_message'])->name('submit-message');
Route::post('/submit-messages', [HomeController::class, 'submit_messages'])->name('submit-messages');

Route::get('/g-analytics', [App\Http\Controllers\AnalyticsController::class, 'index'])->name('page-analytics');


Route::get('/get-tables', [App\Http\Controllers\HomeController::class, 'getTables'])->name('getTables');

Route::get('/sitemap', [App\Http\Controllers\HomeController::class, 'sitemap'])->name('sitemap');

Route::get('/slungyfy', [App\Http\Controllers\HomeController::class, 'slungyfy'])->name('slungyfy');

Auth::routes();
Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.dashboard');

Route::get('/google-analytics', [App\Http\Controllers\AnalyticsController::class, 'track'])->name('analytics');
Route::get('/google-analytics/visitors', [App\Http\Controllers\AnalyticsController::class, 'allVisitors'])->name('visitors');
Route::get('/google-analytics/visitors/bots', [App\Http\Controllers\AnalyticsController::class, 'allVisitorsBots'])->name('visitors-bots');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('admin/home', [AdminsController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// SiteSettings
Route::get('admin/credentials', [AdminsController::class, 'systemsCredentials'])->middleware('is_admin');
Route::get('admin/SiteSettings', [AdminsController::class, 'SiteSettings'])->middleware('is_admin');
Route::get('admin/SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings'])->middleware('is_admin');
Route::get('admin/logo-and-favicon', [AdminsController::class, 'logo_and_favicon'])->middleware('is_admin');
Route::post('admin/logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update'])->middleware('is_admin');

// mailerSettings
Route::get('admin/mailerSettings', [AdminsController::class, 'mailerSettings'])->middleware('is_admin');

// Terms and Conditions
Route::get('admin/terms', [AdminsController::class, 'terms'])->middleware('is_admin');
Route::get('admin/addTerms', [AdminsController::class, 'addTerms'])->middleware('is_admin');
Route::get('admin/editTerm/{id}', [AdminsController::class, 'editTerm'])->middleware('is_admin');
Route::post('admin/add_term', [AdminsController::class, 'add_term'])->middleware('is_admin');
Route::post('admin/edit_term/{id}', [AdminsController::class, 'edit_term'])->middleware('is_admin');
Route::get('admin/delete_term/{id}', [AdminsController::class, 'delete_term'])->middleware('is_admin');

// Privacy Policy
Route::get('admin/privacy', [AdminsController::class, 'privacy'])->middleware('is_admin');
Route::get('admin/addPrivacy', [AdminsController::class, 'addPrivacy'])->middleware('is_admin');
Route::get('admin/editPrivacy/{id}', [AdminsController::class, 'editPrivacy'])->middleware('is_admin');
Route::post('admin/add_privacy', [AdminsController::class, 'add_privacy'])->middleware('is_admin');
Route::post('admin/edit_privacy/{id}', [AdminsController::class, 'edit_privacy'])->middleware('is_admin');
Route::get('admin/delete_privacy/{id}', [AdminsController::class, 'delete_privacy'])->middleware('is_admin');

// Frequently Asked Questions
Route::get('admin/faq', [AdminsController::class, 'faq'])->middleware('is_admin');
Route::get('admin/addFaq', [AdminsController::class, 'addFaq'])->middleware('is_admin');
Route::get('admin/editFaq/{id}', [AdminsController::class, 'editFaq'])->middleware('is_admin');
Route::post('admin/add_Faq', [AdminsController::class, 'add_Faq'])->middleware('is_admin');
Route::post('admin/edit_Faq/{id}', [AdminsController::class, 'edit_Faq'])->middleware('is_admin');
Route::get('admin/delete_Faq/{id}', [AdminsController::class, 'delete_Faq'])->middleware('is_admin');

// Clients
Route::get('admin/clients', [AdminsController::class, 'Clients'])->middleware('is_admin');
Route::get('admin/addClient', [AdminsController::class, 'addClient'])->middleware('is_admin');
Route::get('admin/editClient/{id}', [AdminsController::class, 'editClient'])->middleware('is_admin');
Route::post('admin/add_Client', [AdminsController::class, 'add_Client'])->middleware('is_admin');
Route::post('admin/edit_Client/{id}', [AdminsController::class, 'edit_Client'])->middleware('is_admin');
Route::get('admin/delete_Client/{id}', [AdminsController::class, 'delete_Client'])->middleware('is_admin');

// Careers
Route::get('admin/careers', [AdminsController::class, 'careers'])->middleware('is_admin');
Route::get('admin/addCareers', [AdminsController::class, 'addCareer'])->middleware('is_admin');
Route::get('admin/editCareers/{id}', [AdminsController::class, 'editCareer'])->middleware('is_admin');
Route::post('admin/add_Career', [AdminsController::class, 'add_Career'])->middleware('is_admin');
Route::post('admin/edit_Career/{id}', [AdminsController::class, 'edit_Career'])->middleware('is_admin');
Route::get('admin/delete_Career/{id}', [AdminsController::class, 'delete_Career'])->middleware('is_admin');

// Copyright Statement
Route::get('admin/editCopyright', [AdminsController::class, 'copyright'])->middleware('is_admin');
Route::post('admin/edit_Copyright', [AdminsController::class, 'edit_copyright'])->middleware('is_admin');

// Sliders
Route::get('admin/sliders', [AdminsController::class, 'slider'])->middleware('is_admin');
Route::get('admin/addSlider', [AdminsController::class, 'addSlider'])->middleware('is_admin');
Route::post('admin/add_Slider', [AdminsController::class, 'add_Slider'])->middleware('is_admin');
Route::get('admin/editSlider/{id}', [AdminsController::class, 'editSlider'])->middleware('is_admin');
Route::post('admin/edit_Slider/{id}', [AdminsController::class, 'edit_Slider'])->middleware('is_admin');
Route::get('admin/deleteSlider/{id}', [AdminsController::class, 'deleteSlider'])->middleware('is_admin');

// Banners
Route::get('admin/banners', [AdminsController::class, 'banners'])->middleware('is_admin');
Route::get('admin/editBanner/{id}', [AdminsController::class, 'editBanner'])->middleware('is_admin');
Route::post('admin/edit_Banner/{id}', [AdminsController::class, 'edit_Banner'])->middleware('is_admin');

// Messages
Route::get('admin/allMessages', [AdminsController::class, 'allMessages'])->middleware('is_admin');
Route::get('admin/unread', [AdminsController::class, 'unread'])->middleware('is_admin');
Route::post('admin/reply', [AdminsController::class, 'reply'])->middleware('is_admin');
Route::get('admin/read/{id}', [AdminsController::class, 'read'])->middleware('is_admin');
Route::get('admin/deleteMessage/{id}', [AdminsController::class, 'deleteMessage'])->middleware('is_admin');

// Categories
Route::get('admin/categories', [AdminsController::class, 'categories'])->middleware('is_admin');
Route::get('admin/addCategory', [AdminsController::class, 'addCategory'])->middleware('is_admin');
Route::post('admin/add_Category', [AdminsController::class, 'add_Category'])->middleware('is_admin');
Route::get('admin/editCategories/{id}', [AdminsController::class, 'editCategories'])->middleware('is_admin');
Route::post('admin/edit_Category/{id}', [AdminsController::class, 'edit_Category'])->middleware('is_admin');
Route::get('admin/deleteCategory/{id}', [AdminsController::class, 'deleteCategory'])->middleware('is_admin');

// Categories
Route::get('admin/testimonials', [AdminsController::class, 'testimonials'])->middleware('is_admin');
Route::get('admin/addTestimonial', [AdminsController::class, 'addTestimonial'])->middleware('is_admin');
Route::post('admin/add_Testimonial', [AdminsController::class, 'add_Testimonial'])->middleware('is_admin');
Route::get('admin/editTestimonial/{id}', [AdminsController::class, 'editTestimonial'])->middleware('is_admin');
Route::post('admin/edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial'])->middleware('is_admin');

// Blog
Route::get('admin/blog', [AdminsController::class, 'blog'])->middleware('is_admin');
Route::get('admin/addBlog', [AdminsController::class, 'addBlog'])->middleware('is_admin');
Route::post('admin/add_Blog', [AdminsController::class, 'add_Blog'])->middleware('is_admin');
Route::get('admin/editBlog/{id}', [AdminsController::class, 'editBlog'])->middleware('is_admin');
Route::post('admin/edit_Blog/{id}', [AdminsController::class, 'edit_Blog'])->middleware('is_admin');
Route::get('admin/delete_Blog/{id}', [AdminsController::class, 'delete_Blog'])->middleware('is_admin');

// Gallery
Route::get('admin/galleries',[AdminsController::class,'galleries'])->middleware('is_admin');
Route::get('admin/editGallery/{id}',[AdminsController::class,'editGallery'])->middleware('is_admin');
Route::get('admin/deleteGallery/{id}',[AdminsController::class,'deleteGallery'])->middleware('is_admin');
Route::post('admin/edit_Gallery/{id}',[AdminsController::class,'edit_Gallery'])->middleware('is_admin');
Route::get('admin/addGallery', [AdminsController::class,'addGallery'])->middleware('is_admin');
Route::post('admin/add_Gallery', [AdminsController::class, 'add_Gallery'])->middleware('is_admin');

// Payments Can Be removed if not in use
Route::get('admin/b2b', [AdminsController::class, 'b2b'])->middleware('is_admin');
Route::get('admin/b2c', [AdminsController::class, 'b2c'])->middleware('is_admin');
Route::get('admin/lnmo_api_response', [AdminsController::class, 'lnmo_api_response'])->middleware('is_admin');
Route::get('admin/mobile_payments', [AdminsController::class, 'mobile_payments'])->middleware('is_admin');
Route::get('admin/reverse_transaction', [AdminsController::class, 'reverse_transaction'])->middleware('is_admin');
Route::get('admin/transaction_status', [AdminsController::class, 'transaction_status'])->middleware('is_admin');
Route::get('admin/accountbalance', [AdminsController::class, 'accountbalance'])->middleware('is_admin');
Route::get('admin/approve-transaction/{id}', [AdminsController::class, 'approve_transaction'])->middleware('is_admin');
Route::get('admin/approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk'])->middleware('is_admin');

//Manage Users
Route::get('admin/users', [AdminsController::class, 'users'])->middleware('is_admin');
Route::get('admin/admins', [AdminsController::class, 'admins'])->middleware('is_admin');
Route::get('admin/addUser', [AdminsController::class, 'addUser'])->middleware('is_admin');
Route::get('admin/editUser/{id}', [AdminsController::class, 'editUser'])->middleware('is_admin');
Route::post('admin/add_User', [AdminsController::class, 'add_User'])->middleware('is_admin');
Route::post('admin/edit_User/{id}', [AdminsController::class, 'edit_User'])->middleware('is_admin');
Route::get('admin/delete_user/{id}', [AdminsController::class, 'delete_user'])->middleware('is_admin');
Route::get('admin/switchRole/{id}', [AdminsController::class, 'switchRole'])->middleware('is_admin');
Route::get('admin/switchStatus/{id}', [AdminsController::class, 'switchStatus'])->middleware('is_admin');


Route::get('admin/activitylogs', [AdminsController::class, 'activitylogs'])->middleware('is_admin');


// AJAX REQUESTS
Route::post('admin/addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest'])->middleware('is_admin');
Route::post('admin/deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax'])->middleware('is_admin');
Route::put('admin/updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax'])->middleware('is_admin');
Route::put('admin/updateMailerAjax', [AdminsController::class, 'updateMailerAjax'])->middleware('is_admin');
Route::put('admin/updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax'])->middleware('is_admin');
Route::put('admin/updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials'])->middleware('is_admin');
Route::post('admin/deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax'])->middleware('is_admin');
Route::post('admin/deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax'])->middleware('is_admin');
// Payment Ajax
Route::post('admin/deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax'])->middleware('is_admin');
Route::post('admin/deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax'])->middleware('is_admin');
Route::post('admin/deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax'])->middleware('is_admin');
Route::post('admin/deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax'])->middleware('is_admin');
Route::post('admin/deleteBalAjax', [AdminsController::class, 'deleteBalAjax'])->middleware('is_admin');
Route::post('admin/deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax'])->middleware('is_admin');
Route::post('admin/deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax'])->middleware('is_admin');
Route::post('admin/deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax'])->middleware('is_admin');
// End Payment Ajax
Route::post('admin/deleteUserAjax', [AdminsController::class, 'deleteUserAjax'])->middleware('is_admin');
Route::post('admin/deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax'])->middleware('is_admin');
Route::post('admin/deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax'])->middleware('is_admin');
Route::post('admin/deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax'])->middleware('is_admin');
Route::post('admin/deleteHowAjax', [AdminsController::class, 'deleteHowAjax'])->middleware('is_admin');
Route::post('admin/deleteCareerAjax', [AdminsController::class, 'deleteCareerAjax'])->middleware('is_admin');



Route::get('/wait/{seconds}', function ($seconds) {
    sleep($seconds);
    return "Here ya go! Waited for $seconds seconds";
});

