<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    protected $fillable = [
        'plate_no',
        'country',
        'make',
        'model',
        'vin',
    ];
    public function keis()
    {
        return $this->hasMany(Keis::class, 'vehicle_id');
    }
}
