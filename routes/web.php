<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\HomeController;


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

Route::get('/',[HomeController::class,'homePage']);





Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // This line defines the name 'dashboard' that the error is asking for


});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect()->route('home');
})->name('dashboard');
// This satisfies the error in your screenshot



Route::get('/post_page',[AdminController::class,'post_page']);
Route::post('/add_post',[AdminController::class,'add_post']);

Route::get('/show_post',[AdminController::class,'show_post']);
Route::get('/delete_post/{uuid}',[AdminController::class,'delete_post']);
Route::get('/edit_page/{uuid}',[AdminController::class,'edit_page']);
Route::post('/update_post/{uuid}',[AdminController::class,'update_post']);
Route::get('/post_details/{uuid}',[HomeController::class,'post_details']);

Route::get('/create_post',[HomeController::class,'create_post'])->middleware('auth');
Route::post('/user_post',[HomeController::class,'user_post'])->middleware('auth');
Route::get('/my_post',[HomeController::class,'my_post'])->middleware('auth');
Route::get('/my_post_del/{uuid}',[HomeController::class,'my_post_del'])->middleware('auth');
Route::get('/post_update_page/{uuid}',[HomeController::class,'post_update_page'])->middleware('auth');
Route::post('/update_post_data/{uuid}',[HomeController::class,'update_post_data'])->middleware('auth');
Route::get('/accept_post/{uuid}',[AdminController::class,'accept_post']);
Route::get('/reject_post/{uuid}',[AdminController::class,'reject_post']);