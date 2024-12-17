<?php

use App\Livewire\AboutUs;
use App\Livewire\AddCategory;
use App\Livewire\AllProducts;
use App\Livewire\Contacts;
use App\Livewire\EditProduct;
use App\Livewire\ManageOrders;
use App\Livewire\ManageProduct;
use App\Livewire\AddProductForm;
use App\Livewire\AdminDashboard;
use App\Livewire\ProductDetails;
use App\Livewire\ManageCategories;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShoppingKartComponent;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{product_id}/details',ProductDetails::class);

Route::get('/all/products/{category_id?}', AllProducts::class)->name('all.products');

Route::get('/about',AboutUs::class);

Route::get('/contacts',Contacts::class);

Route::get('/shopping-kart',ShoppingKartComponent::class)->name('shopping-kart');

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard');   

    Route::get('/products',ManageProduct::class)->name('products');

    Route::get('/orders',ManageOrders::class)->name('orders');

    Route::get('/add/product', AddProductForm::class);

    Route::get('/manage/categories', ManageCategories::class);

    Route::get('/add/category', AddCategory::class);

    Route::get('/edit/{id}/product', EditProduct::class);
});
