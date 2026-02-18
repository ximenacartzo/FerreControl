<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    protected $table = 'Detalle_venta';

    protected $primaryKey = 'id_detalle_venta';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = true;

    protected $fillable = [
        'id_venta',
        'id_producto',
        'cantidad',
        'precio_unitario',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}