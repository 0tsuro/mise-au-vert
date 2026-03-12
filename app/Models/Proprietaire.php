<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    protected $table = 'proprietaires';

    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'telephone',
    ];

    public function animaux()
    {
        return $this->hasMany(Animal::class);
    }

    public function user()
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}
}