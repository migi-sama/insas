<?php

use App\Alergia;
use App\tipo_alergia;
use Illuminate\Database\Seeder;

class AlergiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoAlergia = new tipo_alergia();
        $tipoAlergia->name = "Respiratoria";
        $tipoAlergia->save();

        $tipoAlergia = new tipo_alergia();
        $tipoAlergia->name = "Dérmica";
        $tipoAlergia->save();

        $tipoAlergia = new tipo_alergia();
        $tipoAlergia->name = "Alimentaria";
        $tipoAlergia->save();

        $tipoAlergia = new tipo_alergia();
        $tipoAlergia->name = "Medicamento";
        $tipoAlergia->save();


        $libro = new Alergia();
        $libro->nombre = "Rinitis";
        $libro->descripcion = "Respiración fea";
        $libro->tipoAlergia_id = 1;
        $libro->save();
        
        $libro = new Alergia();
        $libro->nombre = "Asma";
        $libro->descripcion = "Respira peor";
        $libro->tipoAlergia_id = 1;
        $libro->save();

        $libro = new Alergia();
        $libro->nombre = "Cactus";
        $libro->descripcion = "Piel irritada";
        $libro->tipoAlergia_id = 2;
        $libro->save();

        $libro = new Alergia();
        $libro->nombre = "Mariscos";
        $libro->descripcion = "Malestar general e inflamación de la tráquea";
        $libro->tipoAlergia_id = 3;
        $libro->save();

        $libro = new Alergia();
        $libro->nombre = "Ibuprofeno";
        $libro->descripcion = "Malestar general e inflamación de la tráquea";
        $libro->tipoAlergia_id = 4;
        $libro->save();
    }
}
