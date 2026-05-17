<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Competence;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Diplome extends Model
{
    use HasFactory;    
    protected $fillable = ['user_id', 'Nom_diplome', 'Annee_obtention','type_diplome', 'Centre_formateur', 'niveau_diplome','Domaine_etude', 'Description'];
    
    public function competence(): BelongsToMany
    {
        return $this->belongsToMany(Competence::class,'diplome_competence');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
