<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatans';
    protected $primaryKey = 'id_jabatan';
    protected $fillable = [
        'id_jabatan',
        'nama_jabatan',

    ];

    public $timestamps = false;
}
