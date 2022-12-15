<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meja extends Model
{
    use HasFactory;
    protected $table = 'mejas';
    protected $primaryKey = 'no_meja';
    use Sortable;
    public $timestamps = false;
    protected $fillable = [
        'ket_meja',

    ];
}
