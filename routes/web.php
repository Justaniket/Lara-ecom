<?php

use App\Http\Controllers\admin\categoryContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\userlogin; 
use App\Http\Controllers\admin\adminlogin_controller;
use App\Http\Controllers\admin\home_controller;
use App\Http\Controllers\homme_controller;
use App\Http\Controllers\admin\category_controller;
use App\Http\Controllers\admin\product_controller;
use App\Http\Controllers\usercategory_controller;

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

Route::get('/clear  ', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

Route::get('/', function () {
    return view('index');
});
Route::get('/user_login',function(){
    return view('user_login');
});
    Route::get('/cart', function () {
    return view('cart');
});
Auth::routes();
// this is route for log out of user
 Route::get('/home', [homme_controller::class, 'index'])->name('home');
//  route for admin login
Route::group(['prefix'=> 'admin'],function(){
 Route::group(['AdminRedirectIfAuthenticated'=> 'admin.guest'],function(){
// when sub form authenticate method will called
Route::post('/authenticate', [adminlogin_controller::class,'authenticate'])->name('admin.authenticate'); });
Route::group(['AdminAuthenticate'=> 'admin.auth'],function(){
    Route::get('/login', [adminlogin_controller::class,'index'])->name('admin.login');
     Route::get('/dashboard', [home_controller::class,'out'])->name('admin.dashboard');
     Route::get('/logout', [home_controller::class,'logout'])->name('admin.logout'); });});


// store data in db
Route::get('admin/add_category', [Category_controller::class, 'add'])->name('category.add');
Route::post('admin/add-category', [Category_controller::class, 'store'])->name('category.store');
// to display data
Route::get('/admin/view_category', [Category_controller::class,'display'])->name('category.display');
// to delete
Route::get('/delete_category/{id}',[Category_controller::class,'delete'])->name('category.delete');
// to edit
Route::get('/edit/{id}', [Category_controller::class, 'edit'])->name('category.edit');
// update
Route::post('/admin/update/{id}', [Category_controller::class, 'update'])->name('category.update');



Route::Match(['get','post'], 'admin/Add_product',[product_controller::class,'addProduct']);
// to display data
 Route::get('/admin/view_products', [product_controller::class,'viewProducts'])->name('product.display');
// to delete
 Route::get('/delete/{id}',[product_controller::class,'delete'])->name('category.delete');
// update data
 Route::Match(['get', 'post'], 'admin/edit_product/{id}',[product_controller::class,'update']);

 Route::get('/category',[usercategory_controller::class, 'view_usercategory']);