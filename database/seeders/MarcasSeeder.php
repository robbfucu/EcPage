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
            'nombre' => 'FW Murphy Production Controls',
            'descripcion' => 'es un desarrollador y fabricante internacional de sistemas de encendido, sistemas de control de relación de aire / combustible, sistemas de control de motores de gas y otros accesorios para la industria mundial de generación de energía con motores de gas estacionarios.',
            'logo' => 'images/murphy.jpeg',
            'url' => 'http://www.fwmurphy.com'
        ]);
        Marca::create([
            'nombre' => 'Ashcroft',
            'descripcion' => 'Nuestra pasión es diseñar, fabricar y entregar los instrumentos de temperatura y presión más innovadores y mejor diseñados para que siempre pueda confiar en el escudo.',
            'logo' => 'images/murphy.jpeg',
            'url' => 'http://www.ashcroft.com'
        ]);
        Marca::create([
            'nombre' => 'Automation Direct',
            'descripcion' => 'es una empresa de controles industriales que utiliza las mejores ideas del mundo del consumidor para servir al mercado de la automatización.',
            'logo' => 'images/autodirect.png',
            'url' => 'https://www.automationdirect.com/'
        ]);
        Marca::create([
            'nombre' => 'Autrol',
            'descripcion' => 'como Smart Transmitter es para medir el diferencial, calibre, absoluto, temperatura y nivel, que es fabricado y ofrecido por DUON System Co., Ltd.',
            'logo' => 'images/autrol.png',
            'url' => 'https://www.autrol.com/'
        ]);
        Marca::create([
            'nombre' => 'KROHNE Insights',
            'descripcion' => 'es su socio confiable para la instrumentación y automatización de procesos.',
            'logo' => 'images/krohne.png',
            'url' => 'https://insights.krohne.com/'
        ]);
        Marca::create([
            'nombre' => 'Phoenix Contact',
            'descripcion' => 'es un fabricante de soluciones de interfaz, interconexión y automatización industrial.',
            'logo' => 'images/phoenix.png',
            'url' => 'https://www.phoenixcontact.com/'
        ]);
        Marca::create([
            'nombre' => 'Weidmuller',
            'descripcion' => 'especialistas en productos, soluciones y servicios en el entorno industrial de la energía, las señales y los datos.',
            'logo' => 'images/weidmuller.png',
            'url' => 'https://www.weidmuller.com.mx/'
        ]);
    }
    }
