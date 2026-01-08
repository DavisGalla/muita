<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Keis;

class Inspections extends Model
{

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'keis_id',
        'type',
        'requested_by',
        'start_ts',
        'location',
        'check',
        'assigned_to',
        'decision',
        'statement',
        'is_reviewed'
    ];

    public function case()
    {
        return $this->belongsTo(Keis::class, 'keis_id');
    }

    public function assigned()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

}
