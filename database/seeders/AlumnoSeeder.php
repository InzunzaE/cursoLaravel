<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ALumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Alumno::factory(10)->create();
        Alumno::create([
            'nombre'  =>'Eitan',
            'edad'   =>'17',
            'nc'     =>'42323232',
            'sexo'    =>'1'
        ]);
        Alumno::create([
            'nombre'  =>'Adrian',
            'edad'   =>'12',
            'nc'     =>'65469530',
            'sexo'    =>'2'
        ]);
    }
}
