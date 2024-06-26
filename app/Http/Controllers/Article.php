<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostUpdate;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Detail;
use App\Models\articleEnAvant;
use App\Models\Category;
use App\Models\Details;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Article extends Controller
{
    public function view_section()
    {   
        $categories = Category::all();
        return view('Admin.custom_article',compact('categories'));
    }
    public function Article_avant()
    {
        $posts = articleEnAvant::latest()->take(3)->get();
        $categories = Category::all();
        $article_avant = articleEnAvant::all();

        $data =[];
        foreach( $posts as $post )
        {
          
            $posts_get = Post::where('id',$post->id_article)->first();
            $data[]=$posts_get;
        }

        return view('Admin.article_en_avant',compact('data','categories','article_avant'));

    }
    public function article_categorie(Request $request)
    {
        $id = $request->input('id');
        $posts = Post::where('category_id',$id)->get();

        return view('Dashboard.recherche', compact('posts'));

    }
    public function article_categories(Request $request)
    {
        $id = $request->input('id');
        $categories = Category::all();
        $article_avant = articleEnAvant::all();
 
        $posts = Post::where('category_id',$id)->get();

        return view('Admin.categorielist', compact('posts','categories','article_avant'));

    }
    
    public function search(Request $request)
{
    // Récupérer le terme de recherche depuis la requête
    $searchTerm = $request->input('query');
   

    // Recherche des articles avec le titre ou la description correspondant au terme de recherche
    $posts = Post::where('title', 'like', '%' . $searchTerm . '%')
                 ->with('category', 'user')
                 ->get();
    
    // Retourner les résultats au format JSON
    return response()->json(['posts' => $posts, 'searchTerm' => $searchTerm]);
}

    
    
   

    public function view_article(Request $request)
    {
        $id = $request->input('id');
        $post = Post::where('id',$id)->first();
        return view('Admin.afficher_article', compact('post'));
    }
    public function view_articles(Request $request)
    {
        $id = $request->input('id');
        $post = Post::where('id',$id)->first();
        return view('Dashboard.article', compact('post'));
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
   public function category()
   {
    $categories = Category::all();
    return view('Admin.category');
   }
   public function categories(Request $request)
   {
    $request->validate([
        'categorie' => 'required|string|max:255',
        
        
    ]);
    $categorie =$request->categorie;
    $verification = Category::where('name',$categorie)->first();
    $categories = Category::all();
    $posts = Post::all();
    if($verification != null)
    {
        return view('Admin.dashboard',compact('categories','posts'))->with('error', 'La catégorie demandée existe déja.');
    }

    Category::create([
        'name'=> $categorie
    ]);

    return redirect()->route('dashboard',compact('categories','posts'))->with('success', 'La catégorie à été bien ajouté.');
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

    
    return redirect()->route('dashboard')->with('succes',$message );
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

    return redirect()->route('dashboard')->with('success',$message );
   }
  
   public function delete_article(Request $request)
   {
     $id = $request->input('id');
     
     try{
     $article = Post::findOrFail($id);
     $article_detail = Detail::where('id',$id)->first();
     $article_avant = articleEnAvant::where('id_article',$id)->first();
     // Catégorie trouvée, procédez à vos opérations ici
     } catch (ModelNotFoundException $e) {
     // Gérer l'exception ici, par exemple, rediriger l'utilisateur vers une page d'erreur
     return redirect()->route('404')->with('error', 'L\'article demandée n\'existe pas.');
    }
    $article->delete();
    if( $article_detail)
    {
        $article_detail->delete();
    }
    if( $article_avant)
    {
        $article_avant->delete();
    }
    $message = 'L\'article a été supprimé avec succes';

    $posts = Post::all();
    $categories = Category::all();
    $article_avant = articleEnAvant::all();
       
    


   
     
    return view('Admin.dashboard',compact('posts','categories','article_avant'));
   }

   public function update(Request $request)
   {
    $id = $request->input('id');

     $article = Post::findOrFail($id);
     $article_similaire = Detail::where('post_id',$id)->first();
     $categories = Category::all();
     
    return view('Admin.update_article',compact('article','article_similaire','categories'));
   }

   public function get_categories()
   {
    if(isset($_GET["categorie"]) && $_GET["categorie"] == 1 )
    {

        $categorie = Category::select('id', 'name')->get();
        return response()->json(["categorie" => $categorie]);

        //var_dump($produit);
        //die();
    }
   }

   public function redirect(Request $request)
   {
     $id = $request->query('id');

     //return tous les post avec la category demander;

     return 'yes';

   }

   public function view_video()
   {

    return view('Dashboard.video');

   }
   public function view_poadcast()
   {

    return view('Dashboard.poadcast');

   }

   public function lastest()
   {
    // 20 dernier article sinon 10 sinon 5

    $post_count = Post::count();

    if($post_count < 5)
    {
        return 'impossible';
    }
    if($post_count >= 5)
    {
        if($post_count = 5)
        {
            $post_data = Post::latest()->take(5)->get();
            return response()->json(["data" => $post_data  ]);
        }
        if($post_count  > 5 && $post_count  <10   )
        {
            $post_data = Post::latest()->take(5)->get();
            return response()->json(["data" => $post_data  ]);
        }
        if($post_count = 10)
        {
            $post_data = Post::latest()->take(10)->get();
            return response()->json(["data" => $post_data  ]);
        }
        if($post_count  > 10 && $post_count  <20   )
        {
            $post_data = Post::latest()->take(10)->get();
            return response()->json(["data" => $post_data  ]);
        }
        if($post_count = 20)
        {
            $post_data = Post::latest()->take(20)->get();
            return response()->json(["data" => $post_data  ]);
        }
        if($post_count  > 20    )
        {
            $post_data = Post::latest()->take(20)->get();
             return response()->json(["data" => $post_data  ]);
        }
    }

   } 
   public function article_en_avant()
   {

    $article_count = articleEnAvant::count();
    if($article_count>0 && $article_count <= 3)
    {
        $article_en_avant = articleEnAvant::all();
        
        return response()->json(["data" => $article_en_avant ]);

    }
    elseif($article_count>3 )
    {
        $article_en_avant = articleEnAvant::latest()->take(3)->get();
        return response()->json(["data" => $article_en_avant ]);
    } 
    return 'impossible';


   } 
   public function article_plus_lue()
   {

   } 
   public function article_plus_lue_categorie()
   {

   } 

   public function article_format_video()
   {

   } 
   public function article_format_poadcast()
   {

   } 
   public function recherche(Request $request)
   {
        // Récupérer l'ID depuis le paramètre de requête 'recherche'
        $id = $request->input('recherche');

        // Logique pour traiter l'ID et récupérer les données associées
        $data = Post::find($id);

        if ($data) {
            // Retourner une réponse JSON avec les données trouvées
            return response()->json(['data' => $data], 200);
        } else {
            // Retourner une réponse JSON avec un message d'erreur si les données ne sont pas trouvées
            return response()->json(['error' => 'Données non trouvées'], 404);
        }
    }

   /* public function article_similaires()
    {
        $data = Post::latest()->first();
        $data_avant = articleEnAvant::latest()->first();
        $count =0;
        $data_table = [];
        if($data)
        {
            $data_details = Detail::find($data->id);

            if($data_details)
            {
                foreach($data_details as $datas)
                {
                    if($datas->post_similaire_1 != null)
                    {
                        $count++;
                        $data_table[] = $datas->post_similaire_1;
                    }
                    if($datas->post_similaire_2 != null)
                    {
                        $count++;
                        $data_table[] = $datas->post_similaire_3;
                    }
                    if($datas->post_similaire_1 != null)
                    {
                        $count++;
                        $data_table[] = $datas->post_similaire_3;
                    }
                }
            }
        }
        if($data_avant)
        {   
            $article_count = articleEnAvant::count();
            if($article_count>0 && $article_count <= 3)
            {
                $article_en_avant = articleEnAvant::all();
                foreach($article_en_avant as $datas)
                {
                        $count++;
                        $data_table[] = $datas->id_article;
                    
                    
                }
                
                
        
            }
            elseif($article_count>3 )
            {
                $article_en_avant = articleEnAvant::latest()->take(3)->get();
                foreach($article_en_avant as $datas)
                {
                        $count++;
                        $data_table[] = $datas->id_article;
                    
                    
                }
                
            } 

        }
        $data_all = Post::all();

        
            for($i = 0; $i< $data_table.length; $i++ )
            {   
                $data_details = Detail::find($data_table[$i]);

                foreach($data_details  as $datas)
                {
                    if($datas->post_similaire_1 != null)
                    {  
                        $view =0;
                        foreach($data_table as $data)

                        {
                            if($data != $datas->post_similaire_1)
                            {
                               $view++; 
                            }

                        }
                        if($view ==0)
                        {
                            $count++;
                             $data_table[] = $datas->post_similaire_1;
                        }
                    }
                    
                    if($datas->post_similaire_2 != null)
                    {  
                        $view =0;
                        foreach($data_table as $data)

                        {
                            if($data != $datas->post_similaire_2)
                            {
                               $view++; 
                            }

                        }
                        if($view ==0)
                        {
                            $count++;
                             $data_table[] = $datas->post_similaire_2;
                        }
                    }
                    
                    if($datas->post_similaire_3 != null)
                    {  
                        $view =0;
                        foreach($data_table as $data)

                        {
                            if($data != $datas->post_similaire_3)
                            {
                               $view++; 
                            }

                        }
                        if($view ==0)
                        {
                            $count++;
                             $data_table[] = $datas->post_similaire_3;
                        }
                    }
                    
                }
            }

        
    }*/
    public function article_similaire()
    {
        $data = Post::latest()->first();
        $data_avant = articleEnAvant::latest()->get();
        $count = 0;
        $data_table = [];
    
        // Récupérer les articles similaires du post le plus récent
        if ($data) {
            $data_details = Detail::where('post_id', $data->id)->get(); // Récupérer tous les détails associés au post
    
            if ($data_details->isNotEmpty()) {
                $this->addSimilarPostsToTable($data_details, $data_table, $count);
            }
        }
    
        // Récupérer les articles en avant
        if ($data_avant) {   
            $article_count = articleEnAvant::count();
            if ($article_count > 0) {
                $article_en_avant = $article_count <= 3 ? articleEnAvant::all() : articleEnAvant::latest()->take(3)->get();
                foreach ($article_en_avant as $datas) {

                   
                        $data_details = Detail::where('id', $datas->id_article)->get(); // Récupérer tous les détails associés au post
    
                        $this->addSimilarPostsToTable($data_details, $data_table, $count);

                    
                    
                        
                    
                   
                }
            }
        }
    
        // Récupérer les articles similaires pour chaque élément de $data_table
        foreach ($data_table as $data_id) {
            $data_details = Detail::where('post_id', $data_id)->get();
            if ($data_details->isNotEmpty()) {
                $this->addSimilarPostsToTable($data_details, $data_table, $count);
            }
        }
    
        // Retourner la réponse ou afficher les données comme nécessaire
        return response()->json(["data" => $data_table ]);
    }
    
    private function addSimilarPostsToTable($data_details, &$data_table, &$count)
    {
        foreach ($data_details as $detail) {
            if ($detail->post_similaire_1 != null && !in_array($detail->post_similaire_1, $data_table)) {
                $count++;
                $data_table[] = $detail->post_similaire_1;
            }
            if ($detail->post_similaire_2 != null && !in_array($detail->post_similaire_2, $data_table)) {
                $count++;
                $data_table[] = $detail->post_similaire_2;
            }
            if ($detail->post_similaire_3 != null && !in_array($detail->post_similaire_3, $data_table)) {
                $count++;
                $data_table[] = $detail->post_similaire_3;
            }
        }
    }

    public function article(Request $request)
    {
        $id = $request->input('id');
        $post = Post::where('id',$id)->first();
        return response()->json(["data" => $post]);
    }
    
}
  
