<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $table = 'affectations';

    protected $fillable = [
        'date_id',
        'animal_id',
        'box_id',
        'date_fin',
        'regle',
        'carnet_vaccination',
        'poids',
        'age',
        'vaccin_a_jour',
        'vermifuge_a_jour',
    ];

    public function date()
    {
        return $this->belongsTo(DateModel::class, 'date_id');
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function box()
    {
        return $this->belongsTo(Box::class);
    }
}