<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    protected $table = 'pensions';

protected $fillable = [
    'ville',
    'adresse',
    'telephone',
    'responsable',
    'user_id',
    'description',
    'photo_principale',
];

    public function boxes()
    {
        return $this->hasMany(Box::class);
    }

    public function tarifications()
    {
        return $this->hasMany(Tarification::class);
    }

public function user()
{
    return $this->belongsTo(User::class, 'user_id', 'id');
}
}