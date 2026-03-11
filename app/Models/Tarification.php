<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarification extends Model
{
    protected $table = 'tarifications';

    protected $fillable = [
        'pension_id',
        'type_gardiennage_id',
        'tarif',
    ];

    public function pension()
    {
        return $this->belongsTo(Pension::class);
    }

    public function typeGardiennage()
    {
        return $this->belongsTo(TypeGardiennage::class);
    }
}