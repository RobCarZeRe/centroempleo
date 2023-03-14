<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'dni' => '47396647',
            'nombres' => 'Roberto Carlos',
            'apellido_paterno' => 'Zegarra',
            'apellido_materno' => 'Reyes',
            'email' => 'roberto05112@gmail.com',
            'edad' => '30',

            'password' => bcrypt('secret'),
            'celular' => '988182997',
            'departamento' => 'Tacna',
            'provincia' => 'Tacna',
            'distrito' => 'Tacna',
            'sexo' => 'Femenino',
            'actualmente' => 'Trabaja',
            'experiencia' => 'asasdasdasd',
            'archivo_cv_ruta' => '',
            'archivo_cv_nombre' => '',

            'user_rol' => 'admin'
        ]);

        DB::table('users')->insert([
            'dni' => '96325471',
            'nombres' => 'Diego Juan',
            'apellido_paterno' => 'Cordova',
            'apellido_materno' => 'Sanjinez',
            'email' => 'Diegoj@gmail.com',
            'edad' => '35',

            'password' => bcrypt('secret'),
            'celular' => '988524185',
            'departamento' => 'Tacna',
            'provincia' => 'Tacna',
            'distrito' => 'Tacna',
            'sexo' => 'Masculino',
            'actualmente' => 'Trabaja',
            'experiencia' => 'asasdasdasd',
            'archivo_cv_ruta' => '',
            'archivo_cv_nombre' => '',
            'user_rol' => 'usuario'

        ]);

        DB::table('users')->insert([
            'dni' => '98541276',
            'nombres' => 'Maria Seferina',
            'apellido_paterno' => 'Mandamiento',
            'apellido_materno' => 'Sandoval',
            'email' => 'Marias@gmail.com',
            'edad' => '35',

            'password' => bcrypt('secret'),
            'celular' => '976541287',
            'departamento' => 'Tacna',
            'provincia' => 'Tacna',
            'distrito' => 'Tacna',
            'sexo' => 'Femenino',
            'actualmente' => 'Estudia',
            'experiencia' => 'asasdasdasd',
            'archivo_cv_ruta' => '',
            'archivo_cv_nombre' => '',
            'user_rol' => 'usuario'

        ]);

        DB::table('users')->insert([
            'dni' => '78452387',
            'nombres' => 'Alfredo Enrique',
            'apellido_paterno' => 'Mendoza',
            'apellido_materno' => 'Mamani',
            'email' => 'Alfmen@gmail.com',
            'edad' => '10',

            'password' => bcrypt('secret'),
            'celular' => '987245641',
            'departamento' => 'Tacna',
            'provincia' => 'Tacna',
            'distrito' => 'Tacna',
            'sexo' => 'Masculino',
            'actualmente' => 'No estudia ni trabaja',
            'experiencia' => 'asasdasdasd',
            'archivo_cv_ruta' => '',
            'archivo_cv_nombre' => '',
            'user_rol' => 'usuario'

        ]);
        DB::table('users')->insert([
            'dni' => '74328549',
            'nombres' => 'Jesus Abraham',
            'apellido_paterno' => 'Solorzano',
            'apellido_materno' => 'Aguirre',
            'email' => 'Jesusa@gmail.com',
            'edad' => '37',

            'password' => bcrypt('secret'),
            'celular' => '988741236',
            'departamento' => 'Tacna',
            'provincia' => 'Tacna',
            'distrito' => 'Tacna',
            'sexo' => 'Masculino',
            'actualmente' => 'Estudia y trabaja',
            'experiencia' => 'asasdasdasd',
            'archivo_cv_ruta' => '',
            'archivo_cv_nombre' => '',
            'user_rol' => 'usuario'

        ]);

        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'Vegetalesloreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);

        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'Transporteloreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'Vigilancialoreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
        DB::table('anuncios')->insert([
            'empresa' => 'Nombre de empresa',
            'texto_anuncio' => 'loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum
            loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum loreipsum_loreipsum',
            'remuneracion' => '2400',
            'inicio' => '12',
            'fin' => '11'
        ]);
    }
}
