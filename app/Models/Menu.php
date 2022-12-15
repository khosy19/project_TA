<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $primaryKey = 'id_menu';
    // use Sortable;
    public $timestamps = false;
    protected $fillable = [
        'id_kategori',
        'nama_menu',
        'harga',
        'status_menu',
    ];
}
