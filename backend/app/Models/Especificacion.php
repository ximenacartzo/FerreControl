<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especificacion extends Model
{
    protected $table = 'Especificacion';

    protected $primaryKey = 'id_especificacion';

    public $incrementing = true;

    protected $keyType = 'int';

    public $timestamps = true;

    protected $fillable = [
        'id_producto',
        'descripcion',
        'valor',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}