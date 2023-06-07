<?php

use App\Http\Livewire\Pages\Admin\AddUser;
use App\Http\Livewire\Pages\Admin\ViewUser;
use App\Http\Livewire\Pages\Dashboard;
use App\Http\Livewire\Pages\Posts;
use Illuminate\Support\Facades\Route;


// Root Route
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/admin/view-user', ViewUser::class)->middleware(['auth'])->name('view-user');
Route::get('/admin/add-user', AddUser::class)->middleware(['auth'])->name('add-user');


Route::get('/admin/posts', Posts::class)->name('posts');
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    // Post Routs
    Route::get('/posts/create', Posts::class, 'create');
});

require __DIR__ . '/auth.php';