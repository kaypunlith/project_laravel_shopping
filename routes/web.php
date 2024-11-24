<?php

use App\Http\Controllers\bankend\Admincontroller;
use App\Http\Controllers\bankend\CategoryController;
use App\Http\Controllers\bankend\Prodcutcontroller;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\productController;
use App\Http\Controllers\frontend\searchController;
use App\Http\Controllers\frontend\ShopController;
use Illuminate\Support\Facades\Route;

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
Route::get('/dashbord',[Admincontroller::class,'dashbord'])->name('dashbord');

     Route::get('/home',[HomeController::class,'Home']);
    Route::get('/shop/{page}',[ShopController::class,'Shop']);
    Route::get('/product-detail/{id}',[productController::class,'product']);
    Route::post('/search',[searchController::class,'search']);
    
// @Crud Category
Route::get('/',[Admincontroller::class,'register']);

 Route::get('/admin',[Admincontroller::class,'index']);
 Route::get('/register',[Admincontroller::class,'register'])->name('register');
 Route::post('/register-submit',[Admincontroller::class,'register_submit'])->name('register_submit');

 Route::get('/login',[Admincontroller::class,'login'])->name('login');
 Route::post('/login-submit',[Admincontroller::class,'login_submit'])->name('login_submit');

 Route::get('/add-category',[CategoryController::class,'Category']);
 Route::post('/add-category-submit',[CategoryController::class,'categorySubmit']);

 Route::get('/list-category',[CategoryController::class,'listCategory']);

 Route::get('/edit-category/{id}',[CategoryController::class,'Editcategory']);
 Route::post('/edit-category-submit',[CategoryController::class,'EditCategsubmit']);

 Route::get('/remove-category/{id}',[CategoryController::class,'DeleteCategory']);
 Route::post('/delete-submit',[CategoryController::class,'Deletesubmit']);

//  @crud product

Route::get('/add-product',[Prodcutcontroller::class,'Addproduct']);
Route::post('/add-prodcutsubmit',[Prodcutcontroller::class,'Addproductsubmit']);

Route::get('/list-product',[Prodcutcontroller::class,'listProduct']);
Route::get('/edit-product/{id}',[Prodcutcontroller::class,'Editproduct']);
