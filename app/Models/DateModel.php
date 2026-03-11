<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DateModel extends Model
{
    protected $table = 'dates';

    protected $fillable = [
        'date',
    ];

    public function affectations()
    {
        return $this->hasMany(Affectation::class, 'date_id');
    }
}