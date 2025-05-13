<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manajemen extends Model
{
    protected $table = 'manajemens';

    protected $fillable = [
        'judulbuku',
        'gambarbuku',
        'deskripsi'
    ];

    public function detailmanajemen () 
    {
        return $this->hasOne(DetailManajemen::class);
    }
}
