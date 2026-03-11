<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animaux';

    protected $fillable = [
        'nom',
        'espece_id',
        'proprietaire_id',
    ];

    public function espece()
    {
        return $this->belongsTo(Espece::class);
    }

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }
}