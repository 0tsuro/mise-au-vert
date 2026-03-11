<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeGardiennage extends Model
{
    protected $table = 'type_gardiennages';

    protected $fillable = [
        'libelle',
    ];

    public function boxes()
    {
        return $this->hasMany(Box::class);
    }

    public function tarifications()
    {
        return $this->hasMany(Tarification::class);
    }
}