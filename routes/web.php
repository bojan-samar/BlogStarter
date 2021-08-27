<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('welcome');


Route::get('blog/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');
Route::get('blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['role:admin']], function () {
    Route::view('blog', 'admin.blog')->name('blog.index');
    Route::view('user', 'admin.user')->name('user.index');
});
