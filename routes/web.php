<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Article;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard.dashboard');
});

//login
Route::get('/connexion', [AdminController::class, 'login_view'])->name('login');
Route::post('/connexion', [AdminController::class, 'login'])->name('login_access');

//Dashboard admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


//Article
Route::get('/publier-article', [Article::class,'view_section'])->name('session');
Route::post('/publier-article',[PostController::class,'create'])->name('create');
Route::get('/article', [Article::class,'view_article'])->name('article');
Route::get('/update-article', [Article::class,'update_article'])->name('update');
Route::delete('/delete-article', [Article::class,'delete_article'])->name('delete');

//Categorie
Route::get('/categorie', [Article::class, 'categorie'])->name('categorie');
Route::post('/categorie', [Article::class, 'categories'])->name('Add_Categorie');
Route::get('/update-categorie', [Article::class, 'update_categorie'])->name('update_categorie');
Route::post('/update-categorie', [Article::class, 'update_categories'])->name('update_categories');

Route::get('/delete-categorie', [Article::class,'delete_categorie'])->name('delete_categorie');



