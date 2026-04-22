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
    public function index($id = 1)
    {       
        if ($id) {
            $owner = User::with(['competences', 'diplomes', 'experiences', 'projects'])->find($id);
        } else {
            $owner = User::with(['competences', 'diplomes', 'experiences', 'projects'])->first();
        }

        if (!$owner) {
            abort(404, 'Portfolio non trouvé');
         }
        // On récupère les compétences par catégorie (professionnelle et language)
        // $skills = Competence::where('category', 'professional')->get();
        // $languages = Competence::where('category', 'language')->get();
        return view('portfolio.Home2', compact('owner')); // On passe l'utilisateur (et ses relations) à la vue pour affichage
    }
}
