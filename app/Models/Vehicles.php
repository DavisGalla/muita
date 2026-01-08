<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Keis;

class Vehicles extends Model
{

    protected $keyType = 'string';


    protected $fillable = [
        'id',
        'plate_no',
        'country',
        'make',
        'model',
        'vin'
    ];

    public function keis()
     {
         return $this->hasMany(Keis::class, 'vehicle_id');
     }
}
