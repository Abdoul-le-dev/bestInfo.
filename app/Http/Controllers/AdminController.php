<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auths;
use App\Http\Requests\Post;
use App\Models\articleEnAvant;
use App\Models\Category;
use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login_view()
    {   
       /* User::create([
            'name'  => 'Abdoul',
            'email' => 'abdoul51@gmail.com',
            'password' => Hash::make('Abdoul51')
        ]);*/
        return view('Admin.login');
    }
    public function R404()
    {
        return view('404');
    }
    public function login(Auths $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials))
        {
            session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return  view('Admin.login');
    }
    public function dashboard()
    {
       $posts = ModelsPost::latest()->take(5)->get();
       $categories = Category::all();
       $article_avant = articleEnAvant::all();

       return view('Admin.dashboard',compact('posts','categories','article_avant'));
    }
    public function data_admin()
    {
        // Comptage total des posts
        $posts = ModelsPost::count();
        $data = [];
        $data[] = [
            'Total' => 'Total',
            'count' => $posts
        ];
    
        // Initialisation des tableaux pour les catégories et les types
        $data_categorie = [];
        $data_type = [];
    
        // Récupération de toutes les catégories
        $categories = Category::all();
    
        // Comptage des posts par catégorie
        foreach ($categories as $category) {
            $posts_count = ModelsPost::where('category_id', $category->id)->count();
            $data_categorie[] = [
                'Categorie' => $category->id,
                'count' => $posts_count
            ];
        }
    
        // Comptage des posts par type
        $posts_Image = ModelsPost::where('type_article', 'Image')->count();
        if ($posts_Image) {
            $data_type[] = [
                'Type' => 'Image',
                'count' => $posts_Image
            ];
        }
    
        $posts_Poadcast = ModelsPost::where('type_article', 'Poadcast')->count();
        if ($posts_Poadcast) {
            $data_type[] = [
                'Type' => 'Poadcast',
                'count' => $posts_Poadcast
            ];
        }
    
        $posts_Video = ModelsPost::where('type_article', 'Video')->count();
        if ($posts_Video) {
            $data_type[] = [
                'Type' => 'Video',
                'count' => $posts_Video
            ];
        }
    
        // Retour des données sous forme de JSON
        return response()->json([
            'data' => $data,
            'data_categorie' => $data_categorie,
            'data_type' => $data_type
        ]);
    }
    

}
