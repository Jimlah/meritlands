<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\VideoController;

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

Route::get('/', function () {
    $posts = Post::orderByDesc('created_at')->limit(3)->get();
    $categories = Post::select('category')->distinct()->get();
    return view('welcome', compact('posts', 'categories'));
})->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('video/', [BlogController::class, 'videoIndex'])->name('video.index');

Route::post('/subscribers', [SubscriberController::class, 'store'])->name('subscribers.store');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'registerView'])->name('register.view');
    Route::post('/register', [AuthController::class, 'register'])->name('register.create');

    Route::get('/login', [AuthController::class, 'loginView'])->name('login.view');
    Route::post('/login', [AuthController::class, 'login'])->name('login.check');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/subscribers', [SubscriberController::class, 'index'])->name('subscribers.index');

    Route::resource('/posts', PostController::class);
    Route::resource('/videos', VideoController::class);
    Route::post('/ckeditor/image-upload', [CkeditorController::class, 'imageUpload'])->name('ckeditor.image-upload');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});