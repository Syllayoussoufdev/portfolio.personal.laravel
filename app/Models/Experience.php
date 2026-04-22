<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Competence;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', // Ajout de la clé étrangère pour l'utilisateur
        'poste',
        'entreprise',
        'Adresse_entreprise',
        'periode',
        'type_contrat',
        'secteur_activite',
        'competences_utilisees',
        'realisation_principale',
        // 'equipe_geree',
        'projet_principal',
        'resultats_obtenus',
        'description'
    ];

    function competence(): BelongsToMany 
    {
        return $this->belongsToMany(Competence::class,'experience_competence');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
