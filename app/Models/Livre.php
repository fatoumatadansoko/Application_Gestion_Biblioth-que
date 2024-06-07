<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Livre extends Model
{
  use HasFactory;

  protected $fillable = [
      'date_publication',
      'nombre_page',
      'auteur',
      'isbn',
      'editeur',
            
  ];

  public function bien(): BelongsTo
  {
      return $this->belongsTo(Livre::class);
  }
}