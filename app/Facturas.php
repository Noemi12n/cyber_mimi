<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
          protected $table='facturas';
    protected $primaryKey='fac_id';
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'fac_id',
    'cli_id',
    'fac_no', 
    'fac_fecha',
    'fac_total',
    'fac_iva',
    'fac_tipo_pago',
    'fac_descuento',
    'fac_observaciones',
    
    ];
}
