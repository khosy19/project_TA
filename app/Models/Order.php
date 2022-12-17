<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'id_order';
    use Sortable;
    public $timestamps = false;
    protected $fillable = [
        // 'id_antrian',
        'id_karyawan',
        'id_pemesanan',
        'id_menu',
        'subtotal',
        'total',
        'metode_pembayaran',
    ];
}
