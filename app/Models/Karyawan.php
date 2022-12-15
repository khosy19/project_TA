<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawans';
    protected $primaryKey = 'id_karyawan';
    use Sortable;
    public $timestamps = false;
    protected $fillable = [
        'id_jabatan',
        'nama_karyawan',
        'kelamin',
    ];
    // public $sortable = ['nama_karyawan','kelamin'];
}
