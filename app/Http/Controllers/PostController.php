<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post as RequestsPost;
use App\Http\Requests\PostUpdate;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Details;
use App\Models\PostDetail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashborad()
    {
      
        $post = Post::latest()->first();
        
        $posts_lue = Post::all();

        return view('Dashboard.dashboard',compact('post','posts_lue'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(RequestsPost $request)
    {

        $titre = $request->titre;
        $contenu = $request->description;
       // $categorie = $request->categorie;
        $article1 = $request->article1;
        $article2 = $request->article2;
        $article3 = $request->article3;
        $format = $request->format;
        $video_link = $request->video_link ;
       
        

        $post_id = Post::latest()->first();
        if($post_id !== null ){$post_id = (int) $post_id->id + 1;}
        else
        {
            $post_id=1;

        }
        
        if($format =='Image')
        {
            $fichier = $request->file->store('fichier');
            
            Details::create([
                'post_id'  => $post_id, // Ensure this is the correct field name in your database
                'post_similaire_1' => $article1,
                'post_similaire_2' => $article2,
                'post_similaire_3' => $article3,
            ]);

            $post = Post::create([
                    'title'      =>$titre,
                    'description' =>$contenu,
                    'fichier_image'=>$fichier,
                    'type_article'=>$format,
                    'detail_id'=>$post_id,
                    
            ]);
        }
        if($format =='Video')
        {   
           

            // Extraire l'identifiant de la vidéo de l'URL
            preg_match('/youtu\.be\/([^\?]*)/', $video_link, $matches);
            $video_id = $matches[1];
            $video_id = "https://www.youtube-nocookie.com/embed/".$video_id."?si=sutV20EDxIDLzQLy&amp;controls=0&amp;start=68";
            
            Details::create([
                'post_id'  => $post_id, // Ensure this is the correct field name in your database
                'post_similaire_1' => $article1,
                'post_similaire_2' => $article2,
                'post_similaire_3' => $article3,
            ]);
            $post = Post::create([
                'title'      =>$titre,
                'description' =>$contenu,
               // 'fichier_image'=>$fichier,
                'type_article'=>$format,
                'detail_id'=>$post_id,
                'fichier_link'=>$video_id,
                
            ]);

        }
        if($format =='Poadcast')
        {
            $fichier = $request->file->store('fichier_audio');
            
            Details::create([
                'post_id'  => $post_id, // Ensure this is the correct field name in your database
                'post_similaire_1' => $article1,
                'post_similaire_2' => $article2,
                'post_similaire_3' => $article3,
            ]);

            $post = Post::create([
                    'title'      =>$titre,
                    'description' =>$contenu,
                    'fichier_audio'=>$fichier,
                    'type_article'=>$format,
                    'detail_id'=>$post_id,
                    
            ]);
        }
        
        
        

      
        return redirect()->route('dashboard')->with('sucess','Article ajouter avec succes');
        
    }

    public function create_poadcast(RequestsPost $request)
    {
        $titre = $request->titre;
        $contenu = $request->description;
       // $categorie = $request->categorie;
        $article1 = $request->article1;
        $article2 = $request->article2;
        $article3 = $request->article3;
        $format = $request->format;
        $fichier = $request->file->store('fichier');

    }

    public function updates(PostUpdate $request)
    {
     $titre = $request->titre;
     $contenu = $request->description;
    
     $article1 = $request->article1;
     $article2 = $request->article2;
     $article3 = $request->article3;
     $format = $request->format;
    
     
     
     $tab = [
         'title' => $titre,
         'description' => $contenu,
         'type_article' =>$format
 
     ];
     if($request->file != null)
     {
        $fichier = $request->file->store('fichier');

        $tab = array_merge($tab,
        ['fichier' => $fichier,]
     );

     }

     $id = $request->input('id');

     $article = Post::findOrFail($id);

     $article->update($tab);
     $posts = Post::all();
     $categories = Category::all();
        
     $posts_lue = Post::all();

     
    
      
     return view('Admin.dashboard',compact('posts','posts_lue','categories'));
    }
 

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
