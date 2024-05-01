<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Article extends Controller
{
    public function view_section()
    {   
        $categories = Category::all();
        return view('Admin.custom_article',compact('categories'));
    }

    public function view_article(Request $request)
    {
        $id = $request->input('id');
        $post = Post::where('id',$id)->first();
        return view('Admin.afficher_article', compact('post'));
    }
    public function view_update(Request $request)
    {
        $id = $request->input('id');
        $post = Post::where('id',$id)->first();
        return view('Admin.afficher_article', compact('post'));
    }

    public function view_delete(Request $request)
    {
        $id = $request->input('id');
        
        return redirect()->route('dashboard')->with('sucess','Votre article à été supprimé avec succes');
    }

   public function categorie()
   {
    $categories = Category::all();
    return view('Admin.categorie',compact('categories'));
   }
   public function categories(Request $request)
   {
    $request->validate([
        'categorie' => 'required|string|max:255',
        
        
    ]);
    $categorie =$request->categorie;
    $verification = Category::where('name',$categorie)->first();
    $categories = Category::all();
    if($verification != null)
    {
        return view('Admin.categorie',compact('categories'))->with('error', 'La catégorie demandée existe déja.');
    }

    Category::create([
        'name'=> $categorie
    ]);

    return view('Admin.categorie',compact('categories'))->with('succes', 'La catégorie à été bien ajouté.');
   }
   public function update_categorie(Request $request)
   {
    
    $id = $request->input('id');
    $categorie = Category::where('id',$id)->first();
    
    return view('Admin.update_categorie',compact('categorie'));
   }
   public function update_categories(Request $request)
   {
    $id = $request->id;
    $request->validate([
        'categorie' => 'required|string|max:255',
        
        
    ]);
    
    $categorie = $request->categorie;
    try {
        $categories = Category::findOrFail($id);
        // Catégorie trouvée, procédez à vos opérations ici
    } catch (ModelNotFoundException $e) {
        // Gérer l'exception ici, par exemple, rediriger l'utilisateur vers une page d'erreur
        return redirect()->route('404')->with('error', 'La catégorie demandée n\'existe pas.');
    }
    $categories->name = $categorie;
    $categories->save();

    $message = 'La mise a jour de categorie a été effectuer avec succes';

    
    return redirect()->route('categorie')->with('succes',$message );
   }

   public function delete_categorie(Request $request)
   {
     $id = $request->input('id');
     try{
     $categories = Category::findOrFail($id);
     // Catégorie trouvée, procédez à vos opérations ici
     } catch (ModelNotFoundException $e) {
     // Gérer l'exception ici, par exemple, rediriger l'utilisateur vers une page d'erreur
     return redirect()->route('404')->with('error', 'La catégorie demandée n\'existe pas.');
    }
    $categories->delete();
    $message = 'La categorie a été supprimé avec succes';

    return redirect()->route('dashboard')->with('succes',$message );
   }
}
