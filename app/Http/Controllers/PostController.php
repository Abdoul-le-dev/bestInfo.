<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post as RequestsPost;
use App\Http\Requests\PostUpdate;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Detail;
use App\Models\Details;
use App\Models\articleEnAvant;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;

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

        if($post && $post->type_article == 'Image')
        {
            return view('Dashboard.dashboard',compact('post','posts_lue',));
        }
        if($post && $post->type_article == 'Video')
        {
            return view('Dashboard.video',compact('post','posts_lue',));
        }
        if($post && $post->type_article == 'Poadcast' || $post->type_article == 'Mixte' )
        {
            return view('Dashboard.poadcast',compact('post','posts_lue',));
        }

        

       
        
       

    }
    public function article_data(Request $request)
    {
        $id = $request->input('id');
        $post = Post::where('id',$id)->get()->first();
      //  dd($post);

        if($post->type_article == 'Image')
        {
            return view('Dashboard.dashboard',compact('post'));
        }
        if($post->type_article == 'Poadcast' || $post->type_article == 'mixte'  )
        {
            return view('Dashboard.poadcast',compact('post'));
        }
        if($post->type_article == 'Video')
        {
           return view('Dashboard.video',compact('post'));
        }
        

    }
    public function article_similaire()
    {
        $data = Post::latest()->first();
        $data_avant = articleEnAvant::latest()->get();
        $count = 0;
        $data_table = [];
    
        // Récupérer les articles similaires du post le plus récent
        if ($data) {
            $data_details = Detail::where('id', $data->id)->get(); // Récupérer tous les détails associés au post
    
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
           
            if (preg_match('/youtu\.be\/([^\?]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            }
            // Match long URL format (youtube.com)
            elseif (preg_match('/youtube\.com\/.*v=([^&]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            }
            // Match embed URL format
            elseif (preg_match('/youtube\.com\/embed\/([^&]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            } else {
                // If no match is found, return null or handle the error appropriately
                return null;
            }
            // Extraire l'identifiant de la vidéo de l'URL
           // preg_match('/youtu\.be\/([^\?]*)/', $video_link, $matches);

            //$video_id = $matches[1];
            
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
       // $categorie = $request->categorie;
        $article1 = $request->article1;
        $article2 = $request->article2;
        $article3 = $request->article3;
        $format = $request->format;
        $video_link = $request->video_link ;
       
        $tab = [ ];
        $tabs = [];
        $post_id = $request->input('id');

        if($titre)
        {
            $tab = array_merge($tab,['title' => $titre]);
        }
        if($contenu)
        {
            $tab = array_merge($tab,['description' => $contenu]);
        }
        

      
        
        if($format =='Image')
        {
            $fichier = $request->file->store('fichier');

            $tab = array_merge($tab,['fichier_image' => $fichier]);
            
        }
        if($format =='Video')
        {   
           
            if (preg_match('/youtu\.be\/([^\?]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            }
            // Match long URL format (youtube.com)
            elseif (preg_match('/youtube\.com\/.*v=([^&]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            }
            // Match embed URL format
            elseif (preg_match('/youtube\.com\/embed\/([^&]*)/', $video_link, $matches)) {
                $video_id = $matches[1];
            } else {
                // If no match is found, return null or handle the error appropriately
                return null;
            }
            // Extraire l'identifiant de la vidéo de l'URL
           // preg_match('/youtu\.be\/([^\?]*)/', $video_link, $matches);

            //$video_id = $matches[1];
            
            $video_id = "https://www.youtube-nocookie.com/embed/".$video_id."?si=sutV20EDxIDLzQLy&amp;controls=0&amp;start=68";
            
          
            $tab = array_merge($tab,['fichier_link' => $video_id]);

        }
        if($format =='Poadcast')
        {
            $fichier = $request->file->store('fichier_audio');
            
           
            $tab = array_merge($tab,['fichier_audio' => $fichier]);

           
        }
        if($format =='Mixte')
        {
            $fichier = $request->file->store('fichier_audio');
            $fichiers = $request->file->store('fichier');
            
            
           
            $tab = array_merge($tab,['fichier_audio' => $fichier]);
            $tab = array_merge($tab,['fichier_image' => $fichiers]);


           
        }
        $post_detail = Detail::where('post_id',$post_id)->first();

        if($article1)
        {
            if($post_detail->post_similaire_1 != $article1)
            {
                $tabs = array_merge($tabs,['post_similaire_1' => $article1 ]);
            }

        }
        if($article2)
        {
            if($post_detail->post_similaire_2 != $article2)
            {
                $tabs = array_merge($tabs,['post_similaire_2' => $article2 ]);
            }

        }
        if($article3)
        {
            if($post_detail->post_similaire_3 != $article3)
            {
                $tabs = array_merge($tabs,['post_similaire_3' => $article3 ]);
            }

        }

        $article = Post::findOrFail($post_id);

        $article->update($tab);
        $post_detail->update($tabs);

        return redirect()->route('dashboard')->with('sucess','L\'article à été mise a jour avec succes');


       
        
        
        
    }
 

    
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
