<?php

use App\Http\Controllers\BookController;
use Hamcrest\Core\AllOf;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function GuzzleHttp\Promise\all;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'App\Http\Controllers\PagesController@index');

// Route::get('/about', 'App\Http\Controllers\PagesController@about');

// Route::get('/services', 'App\Http\Controllers\PagesController@services');

// Route::get('user/{id}/{name}', function ($id,$name) {
//     return 'This is user '.$name.' with id: '.$id;
// });

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/menu', function () {
    return view('pages/menu',['menus' => App\Models\menu::all()]);
});

// Route::get('/reservation', function () {


//     return view('pages/reservation');
// });

Route::get('/book', [App\Http\Controllers\BookController::class, 'index']);
Route::get('/book/create', [App\Http\Controllers\BookController::class, 'create']);
Route::post('/book/store', 'BookController@store')->name('book.store');


Route::get('/book/view', function () {
    return view('book/view',['books' => App\Models\book::all()]);
});

Route::get('/book/edit', function () {
    //return view('pages/view');
});

Route::get('/book/delet', function () {
    //return view('pages/view');
});




Route::get('/blog', function () {
    return view('pages/blog');
});

Route::get('/blog_single', function () {
    return view('pages/blog_single');
});

Auth::routes();

