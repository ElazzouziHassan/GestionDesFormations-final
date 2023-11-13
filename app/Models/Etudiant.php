<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiant';

    protected $fillable = [
        'cin', 'nom', 'prenom', 'date_naissance', 'adresse', 'adresse_email', 'numero_telephone'
    ];

    public function formations() {
        return $this->belongsToMany('formation');
    }
}
