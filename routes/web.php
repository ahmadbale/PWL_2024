<?php
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
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
//Praktikum 1
// Route::get('/hello', function () {
//     return 'Hello World';
// });
// Route::get('/world', function () {
//     return 'World';
// });
// Route::get('/', function () {
//     return 'Selamat Datang';
// });
// Route::get('/about', function () {
//     return 'NIM: 2241760097 | Nama: Ahmad Iqbal FIrmansyah';
// });
// Route::get('/user/{iqbal}', function ($name){
//     return 'Nama saya '.$name;
// });
// Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID){
//     return 'Pos ke-'.$postID." Komentar ke-".$commentID;
// });

// Route::get('/article/{id}', function ($id) 
// {
//     return 'Halaman Artikel dengan ID ' .$id;
// });
// Route::get('/user/{name?}', function ($name=null) { 
// return 'Nama saya '.$name; }); 

// Route::get('/user/{name?}', function ($name='John') 
// { return 'Nama saya '.$name; }); 

//Praktikum 2
Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{name}', [PageController::class,'articles']);
Route::pattern('id', '[0-9]+');
Route::get('/{id}', [PageController::class,'id']);
Route::get('modifikasi/{id}/articles/{name}', [PageController::class, 'modifikasi']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([     'index', 'show' ]); 
Route::resource('photos', PhotoController::class)->except([     'create', 'store', 'update', 'destroy' ]); 
 