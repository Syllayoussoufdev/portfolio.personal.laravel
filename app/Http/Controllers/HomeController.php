<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Competence;
use App\Models\Diplome;
use App\Models\Experience;
use App\Models\Projet;


use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    public function index($slug = null)
    {
               
        if ($slug) {
            // Si un slug est fourni dans l'URL, on essaie de trouver cet utilisateur avec slug $slug
            $owner = User::with(['competences', 'diplomes', 'experiences', 'projets'])->where('slug', $slug)->first();// on récupère l'utilisateur avec ses relations (compétences, diplômes, expériences, projets) en fonction du slug passé dans l'URL
        } else {
            $owner = User::with(['competences', 'diplomes', 'experiences', 'projets'])->first();
        }

        if (!$owner) {
            abort(404, 'Portfolio non trouvé');
         }

        $certificats = $owner->diplomes()->where('type_diplome', 'certificat')->get(); // On récupère les certificats associés à l'utilisateur
        $certificats_grouped = $certificats->groupBy('annee_obtention'); // On regroupe les certificats par année d'obtention


        // On récupère les compétences par catégorie (professionnelle et language)
        // $skills = Competence::where('category', 'professional')->get();
        // $languages = Competence::where('category', 'language')->get();
        return view('portfolio.Home', compact('owner', 'certificats', 'certificats_grouped')); // On passe l'utilisateur (et ses relations) à la vue pour affichage
    }
}
