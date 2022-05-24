<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalles extends Model
{
    //

    public $timestamps=false;
    protected $table='facturas_detalles';
    protected $primaryKey='fad_id';

    protected $fillable=[
    'fac_id',
    'pro_id',
    'fad_cantidad',
    'fad_vu',
    'fad_vt' ];

}
