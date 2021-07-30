<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            'nombre' => 'Motortech GmbH',
            'descripcion' => 'Es un desarrollador y fabricante internacional de sistemas de encendido, sistemas de control de relación de aire / combustible, sistemas de control de motores de gas y otros accesorios para la industria mundial de generación de energía con motores de gas estacionarios.',
            'logo' => 'images/Mot_logo.png',
            'url' => 'http://www.motortech.de'
        ]);
        Marca::create([
            'nombre' => 'Ennovation Controls',
            'descripcion' => 'es un desarrollador y fabricante internacional de sistemas de encendido, sistemas de control de relación de aire / combustible, sistemas de control de motores de gas y otros accesorios para la industria mundial de generación de energía con motores de gas estacionarios.',
            'logo' => 'images/ennovation.svg',
            'url' => 'https://www.enovationcontrols.com/'
        ]);
        Marca::create([
            'nombre' => 'Ashcroft',
            'descripcion' => 'Nuestra pasión es diseñar, fabricar y entregar los instrumentos de temperatura y presión más innovadores y mejor diseñados para que siempre pueda confiar en el escudo.',
            'logo' => 'images/ashcroft.png',
            'url' => 'http://www.ashcroft.com'
        ]);
    }
}
