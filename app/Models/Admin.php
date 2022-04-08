<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     protected $table = 'admin';

    protected $fillable = [
        'id',
        'name',
        'email',
        'telp',
        'password',
        'created_at',
        'updated_at'
    ];
    use HasFactory;
}
