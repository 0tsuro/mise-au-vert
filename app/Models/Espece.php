<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{
    protected $table = 'especes';

    protected $fillable = [
        'libelle',
    ];

    public function animaux()
    {
        return $this->hasMany(Animal::class);
    }
}