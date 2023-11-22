<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Materia;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materia::create([
            'nombre'  =>'Eitan',
            'especialidad'   =>'Programación',
            'semestre'     =>5
            
        ]);
        Materia::create([
            'nombre'  =>'Adrian',
            'especialidad'   =>'Contabilidad',
            'semestre'     =>3
            
        ]);
    }
}
