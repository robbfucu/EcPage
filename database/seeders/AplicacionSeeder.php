<?php

namespace Database\Seeders;

use App\Models\Aplicacion;
use Illuminate\Database\Seeder;

class AplicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aplicacion::create([
            'nombre' => 'Diseño de sistemas de control de motores a Gas o Diesel',
            'descripcion' => 'El “Tablero de control para motor a gas” es un sistema de monitoreo y protección local para motores a gas. Usado para distintas aplicaciones, los parámetros provenientes de los sensores son visualizados en una pantalla monocromática.',
            'logo' => 'images/motor_gas.jpg',
            'pdf' => 'pdf/Tablero de cotrol para Motor a Gas.docx'
        ]);

        Aplicacion::create([
            'nombre' => 'Monitoreo de Detonación, AFR (Relación aire combustible) para aplicaciones de generación',
            'descripcion' => 'La operación de motores de gas requieren una mayor potencia de salida. Más carga significa temperaturas y presiones más altas y un funcionamiento más duro, lo que puede ocasionar daños catastróficos al motor debido a la detonación o pre-encendido.
            No obstante, la detonación se puede detectar de forma profesional con DetCon2 o DetCon20: Los sensores de un solo cilindro monitorean constantemente el nivel de sonido de la cámara de combustión. Si se detecta una detonación, el sistema tomará medidas para eliminar la detonación de inmediato.
            ¡Actualice sus motores y aumente la disponibilidad del equipo!',
            'logo' => 'images/monitoreo.png',
            'pdf' => ''
        ]);

        Aplicacion::create([
            'nombre' => 'Sistemas de ignición',
            'descripcion' => 'Los motores de eficiencia mejorada, las regulaciones de emisiones más estrictas, las mezclas altamente comprimidas, así como el uso de una gran variedad de tipos de gas, están imponiendo exigencias aún mayores a todo el sistema de encendido. La serie MIC3 ofrece una nueva versión mejorada a los clientes para cumplir también con estas mayores demandas en el futuro.
            Con energía primaria de 300 mJ, la serie MIC3 proporciona una combustión fiable en motores de hasta 12 cilindros incluso con valores calóricos del gas más débiles o fluctuantes. Además de una alta energía de encendido variable (MOST *), una sincronización precisa de la chispa y un diagnóstico en línea diversificado ayudan a mejorar la eficiencia del motor, la vida útil de las bujías y la disponibilidad del equipo bajo las regulaciones de emisiones más estrictas.',
            'logo' => 'images/ignicion.png',
            'pdf' => ''
        ]);

        Aplicacion::create([
            'nombre' => 'Desarrollo de interfaz hombre-máquina en diferentes software o plataformas',
            'descripcion' => '',
            'logo' => 'images/interfaz.png',
            'pdf' => ''
        ]);
    }
}
