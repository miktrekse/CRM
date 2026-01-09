<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inspections extends Model
{
protected $keyType = 'string';
        protected $fillable = [
        'case_id',
        'case_id',
        'type',
        'requested_by',
        'start_ts',
        'location',
        'checks',
        'assigned_to',
    ];
    public function keis()
    {
        return $this->belongsTo(Keis::class, 'keis_id');
    }
}
