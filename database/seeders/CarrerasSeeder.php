<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Carrera::factory()->create(
            [
                'codigo' => 'ING-INF-01',
                'nombre' => 'Ingeniería Informática',
                'descripcion' => 'Estudia la informática y sus aplicaciones en el mundo real',
                'facultad' => 'FIA'
            ]
        );

        \App\Models\Carrera::factory()->create(
            [
                'codigo' => 'ADM-EMP-03',
                'nombre' => 'Administración de Empresas',
                'descripcion' => 'Estudia la administración de empresas y sus aplicaciones en el mundo real',
                'facultad' => 'FCAE'
            ]
        );

        \App\Models\Carrera::factory()->create(
            [
                'codigo' => 'SMH-MED-07',
                'nombre' => 'Medicina',
                'descripcion' => 'Estudia la medicina y sus aplicaciones en el mundo real',
                'facultad' => 'FSMED'
            ]
        );
    }
}
