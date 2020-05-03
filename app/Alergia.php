<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alergia extends Model
{
    protected $fillable=[
        'nombre',
        'descripcion',
        'tipoAlergia_id',
    ];

    public function tipoAlergia(){ //$alergia->tipo->nombre
        return $this->belongsTo('App\tipoAlergia'); //Pertenece a un Tipo de Alergia.
    }
}
