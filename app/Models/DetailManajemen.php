<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailManajemen extends Model
{
    protected $table = 'detailmanajemens';

    protected $fillable = [
        'kodebuku',
        'penulis',
        'penerbit',
        'manajemen_id',
        'tahun_terbit',
    ];

    public function manajemen()
    {
        return $this->belongsTo(Manajemen::class);
    }
}
