<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Keis;

class Parties extends Model
{
    protected $keyType = 'string';


    protected $fillable = [
        'id',
        'type',
        'name',
        'reg_code',
        'vat',
        'country',
        'email',
        'phone'
    ];

    public function declarant()
     {
         return $this->hasMany(Keis::class, 'declarant_id');
     }

    public function consignee()
     {
         return $this->hasMany(Keis::class, 'consignee_id');
     }
    
}
