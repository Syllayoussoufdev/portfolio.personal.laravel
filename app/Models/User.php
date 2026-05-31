<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Competence;
use App\Models\Diplome;
use App\Models\Experience;
use App\Models\Projet;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'titre_professionnel',
        'slug', // Ajout du champ slug pour les URL conviviales
        'biographie',
        'photo_profil',
        'a_propos',
        'cv',
        'role',
    ];

    public function isAdmin(): bool {
    return $this->role === 'admin';
    }
    
    function competences()
    {
        return $this->hasMany(Competence::class);
    }
    function diplomes()
    {
        return $this->hasMany(Diplome::class);
    }
    function experiences()
    {
        return $this->hasMany(Experience::class);
    }
    function projets()
    {
        return $this->hasMany(Projet::class);
    }    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
