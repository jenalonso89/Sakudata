<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('personajes')->insert([
            [
                'nombre'=>'Tensai',
                'apellidos'=>'Konoe',
                'edad'=>'50',
                'imagen'=>'https://i.pinimg.com/736x/e6/ea/f9/e6eaf9996520f83ac3a78f5fcc08fc94.jpg',
                'combate'=>'katana larga',
                'arma'=>'Yonaka',
                'estado'=>'vivo',
                'clan_id'=>'1'
            
            ],
             [
                'nombre'=>'Ryo',
                'apellidos'=>'Konoe',
                'edad'=>'26',
                'imagen'=>'https://i.pinimg.com/736x/20/8f/ef/208fef0496c254861278b6fd0e0759ba.jpg',
                'combate'=>'katana larga',
                'arma'=>'Tamotsu',
                'estado'=>'vivo',
                'clan_id'=>'1'
            
            ],
             [
                'nombre'=>'Akako',
                'apellidos'=>'Konoe',
                'edad'=>'26',
                'imagen'=>'https://i.pinimg.com/736x/e6/ea/f9/e6eaf9996520f83ac3a78f5fcc08fc94.jpg',
                'combate'=>'katana',
                'arma'=>'no me acuerdo',
                'estado'=>'vivo',
                'clan_id'=>'1'
            
            ],
            [
                'nombre'=>'Hayate',
                'apellidos'=>'Eda',
                'edad'=>'40',
                'imagen'=>'https://i.pinimg.com/736x/33/05/0d/33050d335f3b3b112fc98ea8a7b5ef88.jpg',
                'combate'=>'Laido',
                'arma'=>'Byako',
                'estado'=>'vivo',
                'clan_id'=>'2'
            
            ],
             [
                'nombre'=>'Kiyoshi',
                'apellidos'=>'Eda',
                'edad'=>'55',
                'imagen'=>'https://i.pinimg.com/736x/df/a9/89/dfa989f3f0f552657e9a1251b939327a.jpg',
                'combate'=>'Katana larga,arco, caballeria',
                'arma'=>'Yoquese',
                'estado'=>'vivo',
                'clan_id'=>'2'
            
            ],
             [
                'nombre'=>'Souta',
                'apellidos'=>'Eda',
                'edad'=>'17',
                'imagen'=>'https://i.pinimg.com/736x/1a/53/8b/1a538b1562c9a8c61fb49e013461f1e7.jpg',
                'combate'=>'Arco, caballeria',
                'arma'=>'Yoquese',
                'estado'=>'vivo',
                'clan_id'=>'2'
            
            ],
               [
                'nombre'=>'Narue',
                'apellidos'=>'Harada',
                'edad'=>'38',
                'imagen'=>'https://i.pinimg.com/736x/5d/da/8f/5dda8facb0b4e342409abe22d7e8d34a.jpg',
                'combate'=>'lanza',
                'arma'=>'Yamata no se que',
                'estado'=>'vivo',
                'clan_id'=>'3'
            
            ],
            [
                'nombre'=>'Hibiki',
                'apellidos'=>'Harada',
                'edad'=>'24',
                'imagen'=>'https://i.pinimg.com/736x/c0/c1/db/c0c1dbc751dd2a10aac475efc511e388.jpg',
                'combate'=>'Abanico',
                'arma'=>'yo que se',
                'estado'=>'vivo',
                'clan_id'=>'3'
            
            ],
            
            

            

         ]);
    }
}
