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
    public function index($id = null)
    {       
        if ($id) {
            // Si un ID est fourni dans l'URL, on essaie de trouver cet utilisateur avec id $id
            $owner = User::with(['competences', 'diplomes', 'experiences', 'projets'])->where('id', $id)->first();// on récupère l'utilisateur avec ses relations (compétences, diplômes, expériences, projets) en fonction de l'ID passé dans l'URL
        } else {
            $owner = User::with(['competences', 'diplomes', 'experiences', 'projets'])->first();
        }

        if (!$owner) {
            abort(404, 'Portfolio non trouvé');
         }
        // On récupère les compétences par catégorie (professionnelle et language)
        // $skills = Competence::where('category', 'professional')->get();
        // $languages = Competence::where('category', 'language')->get();
        return view('portfolio.Home', compact('owner')); // On passe l'utilisateur (et ses relations) à la vue pour affichage
    }
}
