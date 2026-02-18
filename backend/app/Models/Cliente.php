<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    protected $table = 'Cliente';

    protected $primaryKey = 'id_cliente';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $timestamps = true;

    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno',
        'rfc',
        'correo',
        'telefono',
        'estado',
        'municipio',
        'ciudad',
        'colonia',
        'calle',
        'num_ext',
        'num_int',
        'fecha_nacimiento',
        'sexo',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];


    //Relaciones que tiene con otras tablas
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}