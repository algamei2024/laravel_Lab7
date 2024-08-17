<?php

use Illuminate\Support\Facades\Route;
use App\Models\Info;
use App\Models\Categorie;
use App\Models\Product;
Route::get('/',function(){
    $info = Info::first();
    return view("admin.forms.main",compact('info'));
});
Route::resource('info',App\http\controllers\infoController::class);
Route::resource('product',App\http\controllers\productController::class);
Route::resource('categorie',App\http\controllers\categorieController::class);
// Route::get('user/main',function(){
//     $cats = Categorie::all();
//     $prods = Product::all()->with('categorie')->get();
//     return view('user.main',compact('cats','prods'));
// });