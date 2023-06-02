<?php

namespace Database\Seeders;

use App\Models\Contacto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contacto = new Contacto();
        $contacto->nombre = "kevin";
        $contacto->telefono = "9613010104";
        $contacto->correo = "kevin@hotmail.com";
        $contacto->conocido_id = 1;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "omar";
        $contacto->telefono = "9614029523";
        $contacto->correo = "omar@hotmail.com";
        $contacto->conocido_id = 1;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "jorge";
        $contacto->telefono = "9614525452";
        $contacto->correo = "jorge@hotmail.com";
        $contacto->conocido_id = 1;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "miguel";
        $contacto->telefono = "9613928454";
        $contacto->correo = "miguel@hotmail.com";
        $contacto->conocido_id = 2;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "andres";
        $contacto->telefono = "9613943435";
        $contacto->correo = "andres@hotmail.com";
        $contacto->conocido_id = 2;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "Octavio";
        $contacto->telefono = "9614362645";
        $contacto->correo = "octavio@hotmail.com";
        $contacto->conocido_id = 2;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "veronica";
        $contacto->telefono = "9614625453";
        $contacto->correo = "veronica@hotmail.com";
        $contacto->conocido_id = 3;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "leticia";
        $contacto->telefono = "9613416452";
        $contacto->correo = "leticia@hotmail.com";
        $contacto->conocido_id = 3;
        $contacto->save();

        $contacto = new Contacto();
        $contacto->nombre = "yazmin";
        $contacto->telefono = "9615312432";
        $contacto->correo = "yazmin@hotmail.com";
        $contacto->conocido_id = 3;
        $contacto->save();

    }
}
