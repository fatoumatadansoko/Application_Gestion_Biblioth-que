<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Rayon extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'partie',
    ];

    public function livres()
    {//Spécifie que le modèle actuel possède plusieurs instances du modèle `Livre`
        return $this->hasMany(Livre::class);
    }
}
