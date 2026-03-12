<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $table = 'boxes';

protected $fillable = [
    'pension_id',
    'superficie',
    'type_gardiennage_id'
];

    public function pension()
    {
        return $this->belongsTo(Pension::class);
    }

    public function typeGardiennage()
    {
        return $this->belongsTo(TypeGardiennage::class);
    }

    public function affectations()
    {
        return $this->hasMany(Affectation::class);
    }
}