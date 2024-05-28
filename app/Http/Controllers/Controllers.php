<?php

namespace App\Http\Controllers;

use App\Models\articleEnAvant;
use App\Models\Post;
use Illuminate\Http\Request;

class Controllers extends Controller
{
    public function cookie()
    {
        return view('Dashboard.cookies');
    }  
    public function mention()
    {
        return view('Dashboard.mention_legales');
    }   
    public function politique()
    {
        return view('Dashboard.politiques_confidentialite');
    }  
    public function condition()
    {
        return view('Dashboard.condition_general');
    }   
    public function propos()
    {
        return view('Dashboard.propos');
    }

    public function article_avant(Request $request)
    {
        $id = $request->id_article;
        
    
        if ($id != null) {
            try {
                $post_id = Post::findOrFail($id);

                //dd($post_id);
    
                articleEnAvant::create([
                    'id_article' => $post_id ->id
                ]);
    
                $returnMessage = 'L\'article ' . $id . ' a été bien mis en avant';
                $request->session()->flash('success', $returnMessage);
            } catch (\Exception $e) {
                $errorMessage = 'L\'article avec l\'ID ' . $id . ' n\'a pas été trouvé.';
                $request->session()->flash('error', $errorMessage);
            }
        } else {
            $errorMessage = 'Aucun ID d\'article fourni.';
            $request->session()->flash('error', $errorMessage);
        }
    
        return redirect()->route('dashboard');
    }
    public function retirer_article_avant(Request $request)
    {
        $id = $request->id;
    
        try {
            // Trouver l'article par son ID
            $article = Post::findOrFail($id);
    
            // Trouver l'entrée dans articleEnAvant et la supprimer
            $article_avant = articleEnAvant::where('id_article', $id)->first();
    
            if ($article_avant) {
                $article_avant->delete();
                $message = 'L\'article a été retiré des articles mis en avant avec succès';
                return redirect()->route('dashboard')->with('success', $message);
            } else {
                return redirect()->route('dashboard')->with('error', 'L\'article n\'est pas mis en avant.');
            }
        } catch (\Exception $e) {
            // Gérer l'exception ici
            return redirect()->route('dashboard')->with('error', 'L\'article demandé n\'existe pas.');
        }
    }
    
   
    



    
    

}
