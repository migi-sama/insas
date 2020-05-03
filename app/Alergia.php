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

    public function tipos(){ //$alergia->tipo->nombre
        return $this->belongsTo('App\tipo_alergia','tipoAlergia_id'); //Pertenece a un Tipo de Alergia.
    }
}
