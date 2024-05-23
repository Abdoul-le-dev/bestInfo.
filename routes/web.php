<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Article;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'dashborad'])->name('home');

Route::get('/article_data',[PostController::class,'article_data'])->name('article_data');

//login
Route::get('/connexion', [AdminController::class, 'login_view'])->name('login');
Route::post('/connexion', [AdminController::class, 'login'])->name('login_access');

//Dashboard admin
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


//Article
Route::get('/publier-article', [Article::class,'view_section'])->name('session');

Route::post('/publier-article',[PostController::class,'create'])->name('create');

Route::get('/article', [Article::class,'view_article'])->name('article');
Route::get('/update', [Article::class,'update'])->name('update');
Route::post('/update', [PostController::class,'updates'])->name('updates');

Route::get('/delete-article', [Article::class,'delete_article'])->name('delete');

//Categorie
Route::get('/categories', [Article::class, 'categorie'])->name('categorie_view');
Route::post('/categorie', [Article::class, 'categories'])->name('Add_Categorie');
Route::get('/update-categorie', [Article::class, 'update_categorie'])->name('update_categorie');
Route::post('/update-categorie', [Article::class, 'update_categories'])->name('update_categories');

Route::get('/delete-categorie', [Article::class,'delete_categorie'])->name('delete_categorie');




//js sent data /redirect
Route::get('/categorie', [Article::class,'get_categories'])->name('get_categorie');
Route::get('/redirect', [Article::class,'redirect']);

//js get data for blade 
Route::get('/lastest', [Article::class,'lastest']);
Route::get('/articleenavant', [Article::class,'article_en_avant']);
Route::get('/articlepluelue', [Article::class,'article_plus_lue']);
Route::get('/articleplueluecategorie', [Article::class,'article_plus_lue_categorie']);
Route::get('/articleformatvideo', [Article::class,'article_format_video']);
Route::get('/articleformatpoadcast', [Article::class,'article_format_poadcast']);
Route::get('/recherche', [Article::class,'recherche']);
Route::get('/articlesimilaire', [Article::class,'article_similaire']);
Route::get('/articlesearch', [Article::class,'article']);

Route::get('/sectioncategorie', [Article::class,'article_categorie'])->name('article_categorie');

//categorie


// video 
Route::get('/video', [Article::class,'view_video'])->name('video');

//poadcast

Route::get('/poadcast', [Article::class,'view_poadcast'])->name('poadcast');

// web.php
Route::get('/search', [Article::class, 'search']);
Route::get('/contact', [ContactController::class, 'ContactView'])->name('contact');

//article en avant 

Route::get('/article_avant', [Article::class, 'Article_avant'])->name('Article_en_avant');

//admin data blog 


Route::get('/data_admin', [AdminController::class, 'data_admin']);
Route::get('/categorie_article', [Article::class,'article_categories'])->name('articleCategorie_admin');

///404
Route::get('/404', [AdminController::class, '404'])->name('404');








