<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Article_views;
use App\Models\ArticlesLue;
use App\Models\Utilisateur;
use App\Models\Visiteur;
use App\Models\VisiteurData;

class ArticleViewController extends Controller
{
    public function logViews(Request $request)
    {
        $request->validate([
            'article_id' => 'required|integer|exists:Posts,id',
            'user_id' => 'required|string',
            'ip_address' => 'required|ip',
            'event_type' => 'required|in:view,read',
            'timestamp' => 'required|date'
        ]);
        $cookie = $request->cookie; 
        // Assurez-vous que la valeur du cookie est envoyée dans la requête
        $timestamp = $request->timestamp; // Exemple de valeur venant du front-end
        $timestamp = str_replace('T', ' ', $timestamp); // Remplace T par un espace
        $timestamp = substr($timestamp, 0, strpos($timestamp, '.'));

        $exists = VisiteurData::where('cookie_value', $cookie)->exists();

        if ($exists) {

            $data = VisiteurData::where('cookie_value', $cookie)->get()->first();

            $data_data = Visiteur::where('ip_address', $data->ip_address)->get();
            $trouver = false;

            foreach($data_data as $data)
            {
                if($data->article_id == $request->user_id )
                {   $trouver= true;
                    //faire juste une mise a jour 
                }
            }

            if(!$trouver)
            {
              //cree
            

                $articleView = new Visiteur();
                $articleView->article_id = $request->article_id;
                $articleView->user_id = $request->user_id;
                $articleView->ip_address = $request->ip_address;
                $articleView->event_type = $request->event_type;
                $articleView->timestamp = $timestamp;
                $articleView->save();

            }

            



            
        } else {

            $Visiteurdata = new VisiteurData();
            $Visiteurdata->ip_address = $request->ip_address;
            $Visiteurdata->cookie_value= $request->cookie;
            $Visiteurdata->save();

            $articleView = new Visiteur();
            
            $articleView->ip_address = $request->ip_address;
            $articleView->article_id = $request->article_id;
           // $articleView->user_id = $request->user_id;
            $articleView->event_type = $request->event_type;
            $articleView->timestamp = $timestamp;
            $articleView->save();

            


            
        }

       

        

        return response()->json(['message' => 'Article view logged successfully'], 200);
    }
    public function logViewss(Request $request)
    {
        $request->validate([
            'article_id' => 'required|integer|exists:posts,id',
            'user_id' => 'required|string',
            'ip_address' => 'required|ip',
            'event_type' => 'required|in:view,read',
            'timestamp' => 'required|date'
        ]);

        $cookie = $request->cookie; 
        $timestamp = $request->timestamp;
        $timestamp = str_replace('T', ' ', $timestamp);
        $timestamp = substr($timestamp, 0, strpos($timestamp, '.'));

        $exists = VisiteurData::where('cookie_value', $cookie)->exists();

        if ($exists) {
            $data = VisiteurData::where('cookie_value', $cookie)->first();
            $articleExists = Visiteur::where('ip_address', $data->ip_address)
                                    ->where('article_id', $request->article_id)
                                    ->exists();

            if ($articleExists) {

                $data = Visiteur::where('ip_address', $data->ip_address)
                                ->where('article_id', $request->article_id)
                                ->first();

                            
                if($data) 
                {
                    $data_suite = Visiteur::where('ip_address', $data->ip_address)->first();                

                    $data_suite->event_type = $request->event_type;
                    $data_suite->timestamp = $timestamp;    
                    $data_suite->save(); 
                }               
                
                
            } else {
                
                $articleView = new Visiteur();
                $articleView->article_id = $request->article_id;
                $articleView->ip_address = $data->ip_address;
                $articleView->event_type = $request->event_type;
                $articleView->timestamp = $timestamp;
                $articleView->save();
            }
        } else {
            $VisiteurData = new VisiteurData();
            $VisiteurData->ip_address = $request->ip_address;
            $VisiteurData->cookie_value = $cookie;
            $VisiteurData->save();

            $articleView = new Visiteur();
            $articleView->article_id = $request->article_id;
            $articleView->ip_address = $request->ip_address;
            $articleView->event_type = $request->event_type;
            $articleView->timestamp = $timestamp;
            $articleView->save();
        }

        return response()->json(['message' => 'Article view logged successfully'], 200);
    }
    public function logView(Request $request)
{
    $request->validate([
        'article_id' => 'required|integer|exists:posts,id',
        'user_id' => 'required|string',
        'ip_address' => 'required|ip',
        'event_type' => 'required|in:view,read',
        'timestamp' => 'required|date'
    ]);
    $newUser=false;
    $ancien = false;
    $actualisation =false;
    $vue_miseAjour =false;
    $non_vue =false;


    $cookie = $request->cookie;
    $timestamp = $request->timestamp;
    $timestamp = str_replace('T', ' ', $timestamp);
    $timestamp = substr($timestamp, 0, strpos($timestamp, '.'));

    $exists = VisiteurData::where('cookie_value', $cookie)->exists();
    $articleLue = ArticlesLue::where('article_id', $request->article_id)->first();
    if (!$articleLue) {
        $non_vue =true;
        $articleLue = new ArticlesLue();
        $articleLue->article_id = $request->article_id;
        $articleLue->nbre_lue++;
        $articleLue->nbre_demande++;
        $articleLue->save();
    }
    else
    {
        $VisiteurExists =  $articleExists = Visiteur::where('ip_address', $request->ip_address)
                                                    ->where('article_id', $request->article_id)
                                                    ->exists();
        if($VisiteurExists)
        {

            $VisiteurExists =  $articleExists = Visiteur::where('ip_address', $request->ip_address)
            ->where('article_id', $request->article_id)
            ->first();
            if( $VisiteurExists->event_type == 'view' && $request->event_type == 'read' )
            {
                $articleLue->nbre_vue++;

                $articleLue->save();

            }

        }                                            

    if(!$non_vue)
    {
        $articleLue->nbre_demande++;
    }
}

   

    if ($exists) {
        //si cookie existe
        $data = VisiteurData::where('cookie_value', $cookie)->first();
        $articleExists = Visiteur::where('ip_address', $data->ip_address)
                                ->where('article_id', $request->article_id)
                                ->exists();

        if ($articleExists) { 
            $ancien = true;
            //si l'article a ete vue on faire une mise a jour
            $data = Visiteur::where('ip_address', $data->ip_address)
                            ->where('article_id', $request->article_id)
                            ->first();

            if ($data) {
                $vue_miseAjour= true;
                $data->event_type = $request->event_type;
                $data->timestamp = $timestamp;
                $data->save();
            }
        } else {
            
            $articleView = new Visiteur();
            $articleView->article_id = $request->article_id;
            $articleView->ip_address = $data->ip_address;
            $articleView->event_type = $request->event_type;
            $articleView->timestamp = $timestamp;
            $articleView->save();



           
        }
    } else {
        $newUser=true;
        $VisiteurData = new VisiteurData();
        $VisiteurData->ip_address = $request->ip_address;
        $VisiteurData->cookie_value = $cookie;
        $VisiteurData->save();

        $articleView = new Visiteur();
        $articleView->article_id = $request->article_id;
        $articleView->ip_address = $request->ip_address;
        $articleView->event_type = $request->event_type;
        $articleView->timestamp = $timestamp;
        $articleView->save();

        
    }

   
    
    
    
    // Increment the total_requests counter
   
   

    return response()->json(['message' => 'Article view logged successfully'], 200);
}



    public function cookiesVerifie(Request $request)
    {
        $cookie = $request->input('cookie'); // Assurez-vous que la valeur du cookie est envoyée dans la requête

        $exists = VisiteurData::where('cookie_value', $cookie)->exists();

        if ($exists) {
            return response()->json(['cookie' => 'yes']);
        } else {
            return response()->json(['cookie' => 'no']);
        }
    }
}
