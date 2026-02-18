<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_pedido_proveedor extends Model
{
    protected $table = 'Detalle_pedido_proveedor';

    protected $primaryKey = 'id_detalle_pedido_prov';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = true;

    protected $fillable = [
        'cantidad',
        'precio_compra',
        'id_pedido_proveedor',
        'id_producto',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}