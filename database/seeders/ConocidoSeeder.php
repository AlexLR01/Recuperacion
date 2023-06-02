<?php

namespace Database\Seeders;

use App\Models\Conocido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConocidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $conocido = new Conocido();
        $conocido->nombre = "llaven Rodriguez";
        $conocido->usuario = "llaven05";
        $conocido->clave = "conocido";
        $conocido->save();

        $conocido = new Conocido();
        $conocido->nombre = "Manuel Climaco";
        $conocido->usuario = "climaco10";
        $conocido->clave = "conocido";
        $conocido->save();

        $conocido = new Conocido();
        $conocido->nombre = "Jorge Penagos";
        $conocido->usuario = "jorge18";
        $conocido->clave = "conocido";
        $conocido->save();


    }
}
