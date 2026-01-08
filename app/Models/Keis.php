<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Documents;
use App\Models\Inspections;
use App\Models\Vehicles;
use App\Models\Parties;

class Keis extends Model
{
    protected $keyType = 'string';

     protected $fillable = [
        'id',
        'external_ref',
        'status',
        'priority',
        'arrival_ts',
        'checkpoint_id',
        'origin_country',
        'destination_country',
        'risk_flags',
        'declarant_id',
        'consignee_id',
        'vehicle_id'
     ];

     public function documents()
     {
        return $this->hasMany(Documents::class, 'keis_id');
     }
     public function inspections()
     {
        return $this->hasMany(Inspections::class, 'keis_id');
     }
     public function vehicles()
    {
        return $this->belongsTo(Vehicles::class, 'vehicle_id');
    }
    public function declarant()
    {
        return $this->belongsTo(Parties::class, 'declarant_id');

    }
    public function consignee()
    {
        return $this->belongsTo(Parties::class, 'consignee_id');

    }


}
