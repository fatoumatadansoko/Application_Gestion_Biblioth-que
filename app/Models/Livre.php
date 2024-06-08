<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'date_publication',
        'nombre_page',
        'auteur',
        'isbn',
        'editeur',
        'rayon_id',
        'category_id'
    ];

    public function rayon()
    {
        return $this->belongsTo(Rayon::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
