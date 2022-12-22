<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanans';
    protected $primaryKey = 'id_pemesanan';
    use Sortable;
    public $timestamps = false;
    protected $fillable = [
        'id_menu',
        'id_order',
        'nama_pemesan',
        'nama_menu',
        'id_kategori',
        'no_meja',
        'jumlah',
        'subtotal',
        'total',
        'status_pemesanan',
    ];}
