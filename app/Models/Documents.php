<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Keis;

class Documents extends Model
{
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'keis_id',
        'filename',
        'mime_type',
        'category',
        'pages',
        'uploaded_by'
    ];

    public function keis()
    {
        return $this->belongsTo(Keis::class, 'keis_id');
    }
}
