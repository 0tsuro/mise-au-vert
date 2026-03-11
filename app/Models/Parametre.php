<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    protected $table = 'parametres';

    protected $fillable = [
        'nom',
        'adresse_siege_social',
        'nom_dirigeant',
        'adresse_logo',
        'prix_vaccin',
        'prix_vermifuge',
    ];
}