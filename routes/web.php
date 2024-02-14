<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userlogin;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\HomeController;
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
    return view('index');
});

Route::get('/offers', function () {
    return view('offers');
});

Route::get('/cart', function () {
    return view('cart');
});

// Route::get('loginuser', [userlogin::class, 'create'])->name('login');
// Route::match(['GET','POST'],'admin/login', [AdminController::class,'login']);


// Route::group(['middleware'=> ['admin']], function () {
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard']);
// });


Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    return redirect()->back();
});

    
Auth::routes();
// this is route for log out of user
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//  route for admin login


Route::group(['prefix'=> 'admin'],function(){
 Route::group(['AdminRedirectIfAuthenticated'=> 'admin.guest'],function(){
    // admin login route

    // when sub form authenticate method will called

    
    Route::post('/authenticate', [AdminLoginController::class,'authenticate'])->name('admin.authenticate');
 });

 Route::group(['AdminAuthenticate'=> 'admin.auth'],function(){
    Route::get('/login', [AdminLoginController::class,'index'])->name('admin.login');
     Route::get('/dashboard', [HomeController::class,'out'])->name('admin.dashboard');
     Route::get('/logout', [HomeController::class,'logout'])->name('admin.logout');
    
 });
}); 