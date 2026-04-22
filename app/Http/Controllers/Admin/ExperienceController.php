<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $experiences = Experience::all();
        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id', // Assurez-vous que l'ID de l'utilisateur est valide
            'poste' => 'required|string|max:255',
            'entreprise' => 'required|string|max:255',
            'periode' => 'required|string|max:255',
            'adresse_entreprise' => 'nullable|string|max:255',
            'type_contrat' => 'nullable|string|max:255',
            'secteur_activite' => 'nullable|string|max:255',
            'competences_utilisees' => 'nullable|array|',
            'realisation_principale' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        Experience::create($request->all());

        return redirect()->route('admin.experiences.index')
                         ->with('success', 'Experience created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experiences = Experience::findOrFail($id);
        return view('admin.experience.show', compact('experiences'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experiences = Experience::findOrFail($id);

        return view('admin.experience.edit')->with('experiences', $experiences);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'poste' => 'required|string|max:255',
            'entreprise' => 'required|string|max:255',
            'periode' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $experience = Experience::findOrFail($id);
        $experience->update($request->all());
        return redirect()->route('admin.experiences.index')
                         ->with('success', 'Experience updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
