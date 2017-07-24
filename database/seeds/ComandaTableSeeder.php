<?php

use Illuminate\Database\Seeder;
use WIT\Comanda;

class ComandaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Comida y Bebida
    	Comanda::create(['nombre'=>'Botanas','descripcion'=>'Selecciona entre nuestras opciones de botanas']);
    	Comanda::create(['nombre'=>'Alimentos','descripcion'=>'Estas son las opciones de alimentos para tu evento']);
    	Comanda::create(['nombre'=>'Postres','descripcion'=>'Opciones de postres para tu evento']);
    	Comanda::create(['nombre'=>'Bebidas','descripcion'=>'Opciones de bebidas para tu evento']);
    	Comanda::create(['nombre'=>'Extras Comida y Bebida','descripcion'=>'Opciones extras referentes a la comida/bebida como Meseros, Vajilla etc.']);

        // Mobiliario
    	Comanda::create(['nombre'=>'Mobiliario','descripcion'=>'Opciones de Mobiliario para tu evento']);

        // Música - Visual
    	Comanda::create(['nombre'=>'Música','descripcion'=>'Opciones musicales para amenizar tu evento']);
    	Comanda::create(['nombre'=>'Paquetes Visuales','descripcion'=>'Paquetes de Pantallas o Proyectores para darle imagen a tu evento']);

        // Iluminación
    	Comanda::create(['nombre'=>'Iluminación','descripcion'=>'Opciones de Iluminación para tu evento']);

        // Entretenimiento
    	Comanda::create(['nombre'=>'Entretenimiento','descripcion'=>'Opciones de Entretenimiento para tu evento']);

        // Ambientación
        Comanda::create(['nombre'=>'Fiesta Temática','descripcion'=>'Preparamos tu fiesta acorde a la temática que nos indiques']);
        Comanda::create(['nombre'=>'Fiesta Convencional','descripcion'=>'Adornos y demás para una fiesta convencional']);
        Comanda::create(['nombre'=>'Albercada','descripcion'=>'Opciones para la albercada en tu fiesta']);

        // Fotografía y Video
        Comanda::create(['nombre'=>'Fotografía','descripcion'=>'Opciones de fotografía para tu evento']);
        Comanda::create(['nombre'=>'Video','descripcion'=>'Opciones de video para tu evento']);

        // Recuerdos
        Comanda::create(['nombre'=>'Recuerdos del Evento','descripcion'=>'Opciones para que recuerden tu evento']);

        // Invitaciones
        Comanda::create(['nombre'=>'Invitaciones','descripcion'=>'Opciones para invitar a tus asistentes']);
        Comanda::create(['nombre'=>'Confirmación','descripcion'=>'Opciones para la confirmación de los asistentes a tu evento']);

        // Extras
        Comanda::create(['nombre'=>'Extras','descripcion'=>'Experiencias con Ingenio para tu Evento']);
        Comanda::create(['nombre'=>'Personal','descripcion'=>'Opciones de personal para tu evento']);
        Comanda::create(['nombre'=>'Transporte','descripcion'=>'Opciones de transporte para tus invitados']);
    }
}
