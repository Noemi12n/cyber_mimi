<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //

         protected $table='clientes';
    protected $primaryKey='cli_id';
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'cli_nombre', 'cli_apellido','cli_cedula','cli_telefono','cli_direccion','email',
    ];
}
