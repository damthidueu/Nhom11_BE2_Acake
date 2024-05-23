<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\ProtypeController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HoaDonController;
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
    return view('welcome');
});
//REGISTER
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class, 'Registration'])->name('register.action');

//LOGIN
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class, 'customLogin1'])->name('login.action');


Route::get('/index', [AuthController::class,'index'])->name('index');

//chinh sách
Route::get('/policy', [PolicyController::class,'policy'])->name('policy');

//LOGOUT
Route::get('logout', [AuthController::class, 'logOut'])->name('logout');




//
///product 
// PRODUCT NEW
Route::get('/index', [ProductController::class, 'getNewProducts'])->name('getNewProducts');

//protype
// PROTYPE
//   Route::get('/index', [ProtypeController::class, 'getTypeName'])->name('getTypeName');






Route::get('/protype/{protype}', [ProductController::class, 'showByProtype'])->name('show');

//Loại 
Route::get('/products/type/{type_id}', [ProductController::class, 'showProductsByType'])->name('products.byType');

// searrch 
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

// chi tiet
Route::get('/products/{id}', [DetailProductController::class,'detailProduct'])->name('products.show');


//rating
Route::post('/products/{product_id}', [RatingController::class, 'store'])->name('ratings.store')->middleware('auth');

// user

Route::get('/admin/user', [UserController::class, 'user'])->name('user');
// hien thi trang add user
Route::get('/admin/user/add', [UserController::class, 'adduser'])->name('adduser');
// action add
Route::post('/admin/user/add1', [UserController::class, 'adduser1'])->name('adduser1');
Route::get('/admin/user/edit/{id}', [UserController::class, 'edituser'])->name('edituser');
Route::post('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('edit');
// action delete
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete'])->name('deleteuser');
Route::get('/admin/user/search', [UserController::class, 'searchUser'])->name('search');

//cart
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart',  [CartController::class, 'showCart'])->name('cart.show');
Route::get('/deleteCart',  [CartController::class, 'delete'])->name('cart.delete');


//wishlist
Route::post('/cart/wish', [WishController::class, 'addWish'])->name('wish.add');

Route::get('/wish',  [WishController::class, 'showWish'])->name('wish.show');

Route::get('/wish/remove/{id}', [App\Http\Controllers\WishController::class, 'remove'])->name('wishlist.remove');
//check out
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');


// admin product
Route::get('/admin/indexsp', [ProductController::class, 'indexsp'])->name('indexsp');
// hien thi trang add product
Route::get('/admin/indexsp/add', [ProductController::class, 'addsp1'])->name('addsp1'); // route nút them

Route::get('images/{image_name}', function ($image_name) {
    $path = storage_path('app/images/' . $image_name);

    if (file_exists($path)) {
        return Response::download($path);
    }
})->name('image');
// action add
Route::post('/admin/indexsp/addsp', [ProductController::class, 'addsp2'])->name('addsp2');
Route::get('/admin/indexsp/edit/{id}', [ProductController::class, 'editsp'])->name('editsp');
Route::post('/admin/indexsp/editt/{id}', [ProductController::class, 'editsp1'])->name('editsp1');
// action delete
Route::get('/admin/indexsp/delete/{id}', [ProductController::class, 'delete'])->name('deletesp');

//Hoa Don

Route::post('/checkout', 'CheckoutController@checkout')->name('checkout');
Route::get('/receipt', 'CheckoutController@receipt')->name('receipt');

Route::post('hoadon/store', 'HoaDonController@store')->name('hoadon.store');
Route::get('hoadon/{id}', 'HoaDonController@show')->name('hoadon.show');
