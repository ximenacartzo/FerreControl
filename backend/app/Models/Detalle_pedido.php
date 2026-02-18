<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_pedido extends Model
{
    protected $table = 'Detalle_pedido';

    protected $primaryKey = 'id_detalle_pedido';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = true;

    protected $fillable = [
        'id_pedido',
        'id_producto',
        'cantidad',
        'precio_unitario',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}