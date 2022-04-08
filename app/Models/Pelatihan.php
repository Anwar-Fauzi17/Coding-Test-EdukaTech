<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
   protected $table = 'pelatihan';

    protected $fillable = [
        'id_pel',
        'nama_pelatihan',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
