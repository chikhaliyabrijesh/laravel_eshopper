<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\admin\ProductsController;
use App\Http\Controllers\admin\GallaryController;
use App\Http\Controllers\admin\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserGallaryController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CartController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return view("content");
});


// shop page routing
Route::get("/",[HomeController::class,"index"]);
Route::get("/shop",[HomeController::class,"show"]);

// usergallary page routing
Route::get("/",[UserGallaryController::class,"index"]);
Route::get("/usergallary",[UserGallaryController::class,"show"]);

// view details routing
Route::get("/",[DetailsController::class,"index"]);
Route::get("/productdetails/{id}",[DetailsController::class,"show"]);

//add to cart routing
Route::get("productdetails",[CartController::class,"index"]);
Route::post("/productdetails/{id}",[CartController::class,"store"]);
Route::get("/showcart",[CartController::class,"show"]);
Route::get("/showcart/{id}",[CartController::class,"destroy"]);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Product routing
Route::get("/addproducts",[ProductsController::class,"index"]);
Route::post("/addproducts",[ProductsController::class,"store"]);
Route::get("/manageproducts",[ProductsController::class,"show"]);
Route::get("/editproducts/{id}",[ProductsController::class,"edit"]);
Route::post("/editproducts/{id}",[ProductsController::class,"update"]);
Route::get("/manageproducts/{id}",[ProductsController::class,"destroy"]);

// Gallary Routing
Route::get("/addgallary",[GallaryController::class,"index"]);
Route::post("/addgallary",[GallaryController::class,"store"]);
Route::get("/managegallary",[GallaryController::class,"show"]);
Route::get("/editgallary/{id}",[GallaryController::class,"edit"]);
Route::post("/editgallary/{id}",[GallaryController::class,"update"]);
Route::get("/managegallary/{id}",[GallaryController::class,"destroy"]);

// blogs Routing
Route::get("/addblogs",[BlogsController::class,"index"]);
Route::post("/addblogs",[BlogsController::class,"store"]);
Route::get("/manageblogs",[BlogsController::class,"show"]);
Route::get("/editblogs/{id}",[BlogsController::class,"edit"]);
Route::post("/editblogs/{id}",[BlogsController::class,"update"]);
Route::get("/manageblogs/{id}",[BlogsController::class,"destroy"]);

// Contacts Routing
Route::get("/contact",[ContactsController::class,"index"]);
Route::post("/contact",[ContactsController::class,"store"]);
Route::get("/managecontacts",[ContactsController::class,"show"]);
Route::get("/managecontacts/{id}",[ContactsController::class,"destroy"]);

// Register Routing
Route::get("/userregister",[RegisterController::class,"index"]);
Route::post("/userregister",[RegisterController::class,"store"]);
Route::get("/managecustomers",[RegisterController::class,"show"]);
Route::get("/managecustomers/{id}",[RegisterController::class,"destroy"]);








require __DIR__.'/auth.php';
