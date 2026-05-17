<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Diplome;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Competence extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nom_competence', 'niveau', 'pourcentage', 'category', 'description', 'icon','type'];
    
    
    public function diplome(): BelongsToMany 
    {
        return $this->belongsToMany(Diplome::class,'diplome_competence');
    }
    public function experience(): BelongsToMany 
    {
        return $this->belongsToMany(Experience::class,'experience_competence');
    }
    public function projet(): BelongsToMany 
    {
        return $this->belongsToMany(Projet::class,'competence_projet');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
