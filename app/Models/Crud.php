<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'nama',
        'jurusan'
    ];
    protected $table = 'pagi_b_s';
}
