<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClanesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clanes')->insert([
        [
            'nombre' => 'Konoe',
            'imagen' => 'https://i.pinimg.com/736x/b4/f8/39/b4f8393cd7ca2aa6d2c5a80302dabda5.jpg',
            'residencia' => 'Sakurako',
            'descripcion' => 'Después de la guerra de Konoe Kano, el clan de los Cerezos intenta sobrevivir tras la prohibición del shogunato a la expansión de su clan.'
        ],
        [
            'nombre' => 'Eda',
            'imagen' => 'https://i.pinimg.com/736x/d9/90/74/d99074da50b5a77cb975d8d47900bebb.jpg',
            'residencia' => 'Montaña del té verde',
            'descripcion' => 'Años de tradición reinan en la casa del té, los tigres y las bestias',
        ],
         [
            'nombre' => 'Harada',
            'imagen' => 'https://i.pinimg.com/736x/e3/0b/8d/e30b8dab44fe8e0eb4a93556b5a6d03a.jpg',
            'residencia' => 'Pueblo de la arcilla',
            'descripcion' => 'Cuna del arte del shogunato, reino de los dragones de arcilla',
        ],
            ]);
    
    }

}
