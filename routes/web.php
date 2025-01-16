<?php

use App\Http\Controllers\Auth\Customer\LoginController;
use App\Http\Controllers\backend\BookinglistController;
use App\Http\Controllers\backend\CarlistController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\DriverlistController;
use App\Http\Controllers\backend\InvoiceController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\MyprofileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('frontend.home');
// });

// Route::get('/about', function () {
//     return view('frontend.about');
// });


//Frontend Side Route

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/car', [HomeController::class, 'car_show'])->name('car');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/gallery', 'frontend.gallery')->name('gallery');
Route::view('/faq', 'frontend.faq')->name('faq');
Route::view('/booking', 'frontend.booking')->name('booking');
Route::view('/contact_us', 'frontend.contact_us')->name('contact_us');
Route::view('/blog', 'frontend.blog')->name('blog');
Route::view('/blog_details', 'frontend.blog_details')->name('blog_details');
Route::view('/car_sidebar', 'frontend.car_sidebar')->name('car_sidebar');
Route::view('/car_details', 'frontend.car_details')->name('car_details');



//Contact Us Route

Route::resource('/contact', ContactController::class);


//Admin Dashboard

Route::get('/admin/dashboard', function () {
    return view('backend.admin_dashboard');
})->middleware(['auth:admin'])->name('admin_dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Admin Login:Logout

Route::middleware('guest:admin')->prefix('admin')->group(function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'login'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'check_user']);

});

Route::middleware('auth:admin')->prefix('admin')->group(function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('admin.logout');
    Route::view('/admin/dashboard', 'backend.admin_dashboard');
    Route::resource('/carlist', CarlistController::class);
    Route::resource('/driver', DriverlistController::class);
    Route::resource('/booking', BookinglistController::class);
    Route::get('/booking/status/{id}', [BookinglistController::class, 'changeStatus'])->name('changeStatus');
    Route::resource('/customer', CustomerController::class);
    Route::resource('/payment', PaymentController::class);
    Route::get('/invoice/{iid}', [InvoiceController::class, 'invoice'])->name('invoice');


});

//Client Route

Route::middleware('guest:client')->prefix('client')->group(function () {

    Route::get('login', [App\Http\Controllers\Auth\Client\LoginController::class, 'login'])->name('client.login');
    Route::post('login', [App\Http\Controllers\Auth\Client\LoginController::class, 'check_user']);

    Route::get('register', [App\Http\Controllers\Auth\Client\RegisterController::class, 'register'])->name('client.register');
    Route::post('register', [App\Http\Controllers\Auth\Client\RegisterController::class, 'check_user']);

});

Route::middleware('auth:client')->prefix('client')->group(function () {

    Route::post('logout', [App\Http\Controllers\Auth\Client\LoginController::class, 'logout'])->name('client.logout');
    Route::view('/dashboard', 'backend.client_dashboard');

});


//Customer Login Route

Route::middleware('guest:customer')->prefix('customer')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\Customer\LoginController::class, 'login'])->name('customer.login');
    Route::post('login', [App\Http\Controllers\Auth\Customer\LoginController::class, 'check_user']);
    Route::get('register', [App\Http\Controllers\Auth\Customer\RegisterController::class, 'register'])->name('customer.register');
    Route::post('register', [App\Http\Controllers\Auth\Customer\RegisterController::class, 'check_user']);
});


Route::middleware('auth:customer')->prefix('customer')->group(function () {

    Route::post('logout', [App\Http\Controllers\Auth\Customer\LoginController::class, 'logout'])->name('customer.logout');
    // Route::view('/dashboard','frontend.customer_dashboard');

    Route::get('/booking', [BookingController::class, 'create'])->name('book.create');
    Route::post('/booking', [BookingController::class, 'store'])->name('book.store');
    Route::get('/myprofile', [MyprofileController::class, 'myprofile'])->name('myprofile');
    Route::get('/payment/{pid}', [MyprofileController::class, 'payment'])->name('payment');
    Route::post('/payment', [MyprofileController::class, 'paystore'])->name('paystore');
    Route::get('/invoices/{inid}', [InvoiceController::class, 'invoice'])->name('invoices');

});

require __DIR__ . '/auth.php';