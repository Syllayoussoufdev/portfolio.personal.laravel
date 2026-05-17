<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competence;
use App\Models\Diplome;
use Illuminate\Http\Response;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$competences = Competence::all();
        $competences= Competence::with('diplome')->get();
        return view('admin.competences.index', compact('competences'));
        // return response()->json($competences); utiliser pour API
    }
    public function create()
    {
        $diplomes = Diplome::all();
        return view('admin.competences.create', compact('diplomes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id', // Assurez-vous que l'ID de l'utilisateur est valide
            'nom_competence' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'category' => 'required|in:Professionnelle,Language,Informatiques,Soft Skills',
            'pourcentage' => 'required|integer|min:0|max:100',
            'description' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'diplome_id' => 'nullable|array',
            'diplome_id.*' => 'exists:diplomes,id',
        ]);
        $competence = Competence::create($validated);
        if ($request->has('diplome_id')) {
            // La méthode attach() insère les entrées dans la table pivot (diplome_competence)
            $competence->diplome()->attach($validated['diplome_id']);
        }

        return redirect()->route('competence')
            ->with('success', 'Compétence créée avec succès.');
        // return response()->json(['message' => 'Compétence créée avec succès.'], 201); retourner pour API
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id = Competence::findOrFail($id);
        return view('admin.competences.show', compact('competence'));
    }
    public function edit(string $id)
    {
        $competence = Competence::findOrFail($id);
        $diplomes = Diplome::all();
        return view('admin.competences.edit', compact('competence', 'diplomes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'category' => 'required|in:Professionnelle,Language,Informatiques,Soft Skills',
            'pourcentage' => 'required|integer|min:0|max:100',
            'description' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
            'diplome_id' => 'nullable|array',
            'diplome_id.*' => 'exists:diplomes,id',
        ]);
        $competence= Competence::findOrFail($id);
        $competence->update($request->all());
        If ($request->has('diplome_id')) {
            // La méthode sync() met à jour les entrées dans la table pivot (diplome_competence)
            $competence->diplome()->sync($request->input('diplome_id'));
        } else {
            // Si aucun diplôme n'est sélectionné, détacher tous les diplômes associés
            $competence->diplome()->detach();
        }
        return redirect()->route('competence')
            ->with('success', 'Compétence mise à jour avec succès.');
        // return response()->json(['message' => 'Compétence mise à jour avec succès.'], 200); utiliser pour API
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $competence = Competence::findOrFail($id);
        $competence->delete();
        return redirect()->route('competence')
            ->with('success', 'Compétence supprimée avec succès.');
        // return response()->json(['message' => 'Compétence supprimée avec succès.'], 200); utiliser pour API
    }
}
