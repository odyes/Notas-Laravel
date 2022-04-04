<?php

//namespace Database\Seeders;
use App\Providers\Notas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notas::create([
            'titulo'=>'Mi primera nota',
            'contenido'=>'Contenido de prueba',
        ]);

        Notas::create([
            'titulo'=>'Instalación de Laravel',
            'contenido'=>File::get(__DIR__.'/notas/install.html'),
        ]);

        Notas::create([
            'titulo'=>'Rutas y JSON',
            'contenido'=>File::get(__DIR__.'/notas/rutas.html'),
        ]);

        Notas::create([
            'titulo'=>'Front Controller',
            'contenido'=>File::get(__DIR__.'/notas/controller.html'),
        ]);

        Notas::create([
            'titulo'=>'Cambia el formato de parámetros dinámicos',
            'contenido'=>File::get(__DIR__.'/notas/parametros.html'),
        ]);

    }
}
