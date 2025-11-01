<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Category;
use App\Livewire\ProductPage;
use App\Livewire\ProductDetails;



// Homepage route
Route::get('/', HomePage::class)->name('home');

// Category page route
Route::get('/category', Category::class)->name('category');
// Product page route
Route::get('/products', ProductPage::class)->name('products');
// Product details page route
Route::get('/products/{id}', ProductDetails::class)->name('product.details');


