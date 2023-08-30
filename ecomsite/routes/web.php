<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Models\Products;
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



Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Index')->name('Home');
});

Route::controller(ClientController::class)->group(function () {
    Route::get('/category/{id}/{slug}', 'CategoryPage')->name('category');
    Route::get('/product-details/{id}/{slug}', 'ProductDetails')->name('productdetails');
    Route::get('/best-sellers', 'BestSellers')->name('bestsellers');
    Route::get('/new-release', 'NewRelease')->name('newrealese');
});

Route::middleware('auth', 'role:user')->group(function () {
    Route::controller(ClientController::class)->group(function () {
        Route::get('/add-to-cart', 'AddToCart')->name('addtocart');
        Route::get('/checkout', 'Checkout')->name('checkout');
        Route::get('/user-profile', 'UserProfile')->name('userprofile');
        Route::get('/todays-deals', 'TodaysDeals')->name('todaysdeals');
        Route::get('/customer-service', 'CustomerService')->name('customerservice');
    });

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'role:admin')->group(function () {

    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'Index')->name('admindashboard');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all-category', 'Index')->name('allcategory');
        Route::get('/admin/add-category', 'AddCategory')->name('addcategory');
        Route::post('/admin/store-category', 'StoreCategory')->name('storecategory');
        Route::get('/admin/edit-category/{id}', 'EditCategory')->name('editcategory');
        Route::get('/admin/delete-category/{id}', 'DeleteCategory')->name('deletecategory');
        Route::post('/admin/update-category', 'UpdateCategory')->name('updatecategory');
    });

    Route::controller(SubCategoryController::class)->group(function () {
        Route::get('/admin/all-sub-category', 'Index')->name('allsubcategory');
        Route::get('/admin/add-sub-category', 'AddSubCategory')->name('addsubcategory');
        Route::post('/admin/store-subcategory', 'StoreSubCategory')->name('storesubcategory');
        Route::get('/admin/edit-subcategory/{id}', 'EditSubCategory')->name('editsubcategory');
        Route::get('/admin/delete-subcategory/{id}', 'DeleteSubCategory')->name('deletesubcategory');
        Route::post('/admin/update-subcategory', 'UpdateSubCategory')->name('updatesubcat');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/all-products', 'Index')->name('allproducts');
        Route::get('/admin/add-product', 'AddProduct')->name('addproduct');
        Route::post('/admin/store-product', 'StoreProduct')->name('storeproduct');
        Route::get('/admin/edit-photo/{id}', 'EditPhoto')->name('editphoto');
        Route::get('/admin/edit-product/{id}', 'EditProduct')->name('editproduct');
        Route::get('/admin/delete-product/{id}', 'DeleteProduct')->name('deleteproduct');
        Route::post('/admin/update-product', 'UpdateProduct')->name('updateproduct');
    });

    Route::controller(OrderController::class)->group(function () {
        Route::get('/admin/pending-order', 'Index')->name('pendingorder');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
