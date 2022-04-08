<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datauser extends Model
{
    protected $table = 'datauser';

    protected $fillable = [
        'id_user',
        'nama',
        'telp',
        'email',
        'tanggal',
        'tempat',
        'alamatdom',
        'kel',
        'namains',
        'alamatins',
        'pek',
        'jabatan',
        'pelatihan',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
