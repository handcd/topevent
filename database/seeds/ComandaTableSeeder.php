<?php

use Illuminate\Database\Seeder;
use WIT\Comanda;
use WIT\Product;

/**
* Abstract Class for Ennumeration of Campos
*/
abstract class Campos
{
    const SiNo = 0;
    const Numero = 1;
    const Texto = 2;
}

class ComandaTableSeeder extends Seeder
{
    /**
     * Simplify the process of creating a product
     *
     * @return void
    */
    function crearProducto($nombre,$desc,$precio,$comanda,$tipoCampo)
    {
        return Product::create([
            'nombre' => $nombre,
            'descripcion' => $desc,
            'precio' => $precio,
            'comanda_id' => $comanda,
            'campo_id' => $tipoCampo,
        ]);
    }

    function crearComanda($nombre,$descripcion)
    {
        return Comanda::create([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
        ]);
    }

    function crear($nombreComanda,$descripcionComanda,$matrizProductos)
    {
        $comanda = $this->crearComanda($nombreComanda,$descripcionComanda);

        foreach ($matrizProductos as $producto) {
            $this->crearProducto($producto[0],$producto[1],100,$comanda->id,$producto[2]);
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
        * Comida y Bebida
        */

        // --- Comida ---

        // Botanas
        $this->crear('Botanas','Selecciona entre nuestras opciones de botanas',[
            ['Surtidas de Línea (papas, frituras, cacahuates etc...)','Se recomienda 1 por cada asistente',Campos::SiNo],
            ['Crudités (Palitos de verduras con chile y limón)','Se recomienda 1 por cada asistente',Campos::SiNo],
        ]);

        //Canapés
        $this->crear('Canapés','Deliciosos canapés',[
            ['6 Salados y 2 Dulces por persona','Se recomienda uno por persona',Campos::Numero],
            ['8 Salados y 2 Dulces por persona','Se recomienda uno por persona',Campos::Numero],
        ]);

        // Tacos de Guisado
        $this->crear('Tacos de Guisado','(Incluyen arroz, frijoles, salsas, limones y tortillas)',[
            ['Tinga','Cantidad en número de personas',Campos::Numero],
            ['Chicharrón en Salsa Verde','Cantidad en número de personas',Campos::Numero],
            ['Pollo con Mole','Cantidad en número de personas',Campos::Numero],
            ['Picadillo','Cantidad en número de personas',Campos::Numero],
            ['Rajas Poblanas','Cantidad en número de personas',Campos::Numero],
        ]);

        // Tacos de Guisado Tradicionales
        $this->crearProducto('Tacos de Guisado Tradicionales','(Incluyen arroz, frijoles, salsas, limones y tortillas)',0,2,true);
        $this->crearProducto('Cochinita','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Relleno Negro','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Lechón al horno','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Poc Chuc','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Escabeche','Cantidad en número de personas',1,2,false);

        // Hamburguesas y Hot-Dogs
        $this->crearProducto('Hamburguesas y Hot Dogs','(Incluyen aderezos como Catsup, Mostaza y Mayonesa)',0,2,true);
        $this->crearProducto('Hamburguesas','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Hot-Dogs','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Papas a la francesa','Cantidad en número de personas',1,2,false);

        // Parrillada
        $this->crearProducto('Parrillada','(Incluyen arroz, frijoles, salsas, limones y tortillas)',0,2,true);
        $this->crearProducto('Pollo','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Arrachera','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Cortes','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Costillitas','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Salchichas','Cantidad en número de personas',1,2,false);

        // By Wit
        $this->crearProducto('By WIT&trade;','Platos Originales diseñados por nosotros.',0,2,true);
        $this->crearProducto('Plato de fiestas tradicional','Cantidad en número de personas (Incluye Vaporcito, Ensalada de fiesta, Sandwichón, Pavo deshebrado, Pastel)',1,2,false);

        // Chilaquiles
        $this->crearProducto('Chilaquiles','Tornafiesta',0,2,true);
        $this->crearProducto('Rojos','Cantidad en número de personas',1,2,false);
        $this->crearProducto('Verdes','Cantidad en número de personas',1,2,false);

        // Postres
        Comanda::create(['nombre'=>'Postres','descripcion'=>'Opciones de postres para tu evento']);

        // Pastel
        $this->crearProducto('Pastel temático','(Especificar temática)',0,3,false);
        $this->crearProducto('Pastel tradicional','',0,3,true);
        $this->crearProducto('Red Velvet','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Chocolate','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Tres Leches/Vainilla','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Almendras','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Queso Bola','Cantidad en número de personas',1,3,false);

        // Cajita Infantil
        $this->crearProducto('Cajita Infantil','Dulces para los más pequeños',0,3,true);
        $this->crearProducto('Cajita con: dulces para niños bien cool 1','Cantidad en número de niños',1,3,false);
        $this->crearProducto('Cajita con: otros dulces aún más cool pero más caros','Cantidad en número de niños',1,3,false);

        // Helados Artesanales
        $this->crearProducto('Helados Artesanales','',0,3,true);
        $this->crearProducto('Mango','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Chaya','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Kiwi','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Napolitano Frutal','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Sandía','Cantidad en número de personas',1,3,false);

        // Nieves con espíritu
        $this->crearProducto('Nieves con espíritu','(Alcohol)',0,3,true);
        $this->crearProducto('Mezcal','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Tequila','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Whisky','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Bacardí','Cantidad en número de personas',1,3,false);
        $this->crearProducto('Baileys','Cantidad en número de personas',1,3,false);

        // -- Bebidas --

        // Refrescos
        $this->crearProducto('Refrescos y Aguas','',0,4,true);
        $this->crearProducto('Refrescos Surtidos','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Agua de Horchata','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Agua de Jamaica','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Agua de Pepino con Limón','Cantidad en número de personas',1,4,false);

        // Cervezas
        Comanda::create(['nombre'=>'Bebidas','descripcion'=>'Opciones de bebidas para tu evento']);
        $this->crearProducto('Cervezas','(Surtido Claras, Ambar y Oscuras)',0,4,true);
        $this->crearProducto('Montejo','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Modelo','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Indio','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Corona','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Cerveza de Barril','Cantidad en número de personas',1,4,false);

        // Botellas de Alcohol
        $this->crearProducto('Botellas de Alcohol','',0,4,true);
        $this->crearProducto('Mezcal','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Tequila','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Vodka','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Ron','Cantidad en número de personas',1,4,false);
        $this->crearProducto('Whisky','Cantidad en número de personas',1,4,false);

        // Barras Libres
        $this->crearProducto('Barras Libres','(Incluye los licores anteriores, hielos, refrescos)',0,4,true);
        $this->crearProducto('Barra Libre Nacional','Cantidad en número de horas',1,4,false);
        $this->crearProducto('Barra Libre Internacional','Cantidad en número de horas',1,4,false);

        // Café, Té
        $this->crearProducto('Café/Té','(Incluye azúcar, sustitutos de azúcar, crema, vasos, removedores y servilletas)',0,4,true);
        $this->crearProducto('Café sencillo','Cantidad en número de horas',1,4,false);
        $this->crearProducto('Cafetera industrial','Cantidad en número de horas',1,4,false);
        $this->crearProducto('Café Nesspresso','Cantidad en número de horas',1,4,false);
        $this->crearProducto('Café Dolce Gusto','Cantidad en número de horas',1,4,false);

        // Extras Comida y Bebida
        $this->crearProducto('Meseros (5 horas)','(Sugerido 1 por cada 15 personas)',1,5,false);
        $this->crearProducto('Barmans (5 horas)','(Sugerido 1 por cada 30 personas)',1,5,false);

        $this->crearProducto('Vajillas','(Las opciones de material se enviarán a tu correo electrónico en 48 horas)',0,5,true);
        $this->crearProducto('Platos planos para comida','Cantidad en número de personas',1,5,false);
        $this->crearProducto('Platos chicos para pastel','Cantidad en número de personas',1,5,false);
        $this->crearProducto('Platos hondos','Cantidad en número de personas',1,5,false);
        $this->crearProducto('Vasos de fiesta','Cantidad en número de personas',1,5,false);
        $this->crearProducto('Servilletas','Cantidad en número de personas',1,5,false);
        $this->crearProducto('Tenedores','Cantidad en número de personas',1,5,false);
        $this->crearProducto('Cucharas','Cantidad en número de personas',1,5,false);
        Comanda::create(['nombre'=>'Extras Comida y Bebida','descripcion'=>'Opciones extras referentes a la comida/bebida como Meseros, Vajilla etc.']);

        /**
        * Mobiliario
        */
        Comanda::create(['nombre'=>'Mobiliario','descripcion'=>'Opciones de Mobiliario para tu evento']);
        // Mesas y Sillas altura estándar
        $this->crearProducto('Mesas y Sillas altura estándar','',0,6,true);
        $this->crearProducto('Mesa redonda para 10 personas','Cantidad en número de mesas (incluye mantel blanco)',1,6,false);
        $this->crearProducto('Mesa cuadrada para 12 personas','Cantidad en número de mesas (incluye mantel blanco)',1,6,false);
        $this->crearProducto('Tablón de servicio','Cantidad en número de tablones (incluye mantel blanco)',1,6,false);
        $this->crearProducto('Silla banquete estándar acojinada','Cantidad en número de sillas (no incluye fundas)',1,6,false);
        $this->crearProducto('Silla tiffany blanca','Cantidad en número de sillas',1,6,false);
        $this->crearProducto('Silla tiffany chocolate','Cantidad en número de sillas',1,6,false);

        // Mesas y sillas altas
        $this->crearProducto('Mesas y Sillas altas','',0,6,true);
        $this->crearProducto('Mesa periquera para 4 personas blanca','Cantidad en número de mesas',1,6,false);
        $this->crearProducto('Mesa periquera para 4 personas chocolate','Cantidad en número de mesas',1,6,false);
        $this->crearProducto('Mesa alta 6 personas vintage','Cantidad en número de mesas',1,6,false);
        $this->crearProducto('Banco periquera chocolate','Cantidad en número de bancos',1,6,false);
        $this->crearProducto('Banco periquera blanco','Cantidad en número de bancos',1,6,false);
        $this->crearProducto('Banco periquera vintage','Cantidad en número de bancos',1,6,false);

        // Mayor comodidad
        $this->crearProducto('Mayor Comodidad','',0,6,true);
        $this->crearProducto('Sala lounge blanca para 10 personas','Cantidad en número de salas',1,6,false);
        $this->crearProducto('Sala vintage para 10 personas','Cantidad en número de salas',1,6,false);

        // Para pool party
        $this->crearProducto('Para Pool Party','',0,6,true);
        $this->crearProducto('Camastros para alberca','Cantidad en número de camastros',1,6,false);
        $this->crearProducto('Sombrillas para jardín o alberca','Cantidad en número de sombrillas',1,6,false);
        $this->crearProducto('Bancos para alberca','Cantidad en número de bancos',1,6,false);
        

        /**
        * Música - Visual
        */

        // Música
        Comanda::create(['nombre'=>'Música','descripcion'=>'Opciones musicales para amenizar tu evento']);
        $this->crearProducto('DJ Hasta 50 Personas','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',1,7,false);
        $this->crearProducto('DJ Hasta 100 Personas','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',1,7,false);
        $this->crearProducto('Karaoke','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',1,7,false);
        $this->crearProducto('Grupo versátil','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',1,7,false);
        $this->crearProducto('Cantante con pista / piano','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',1,7,false);
        $this->crearProducto('Trío','Cantidad en horas deseadas (Incluye equipo básico de audio  e iluminación)',1,7,false);
        $this->crearProducto('Mariachis','Cantidad en horas deseadas (Incluye equipo básico de audio  e iluminación)',1,7,false);

        // Paquetes Visuales
        Comanda::create(['nombre'=>'Paquetes Visuales','descripcion'=>'Paquetes de Pantallas o Proyectores para darle imagen a tu evento']);
        $this->crearProducto('Pantallas 50 pulgadas con videos musicales','Especificar número (Se pueden proyectar videos on-demand)',1,8,false);
        $this->crearProducto('Proyector con videos musicales','Especificar número (Se pueden proyectar videos on-demand)',1,8,false);


        /**
        * Iluminación
        */
        Comanda::create(['nombre'=>'Iluminación','descripcion'=>'Opciones de Iluminación para tu evento']);
        $this->crearProducto('Luz LED color definible','Número en horas de uso',1,9,false);
        $this->crearProducto('Romántica (paquete de 15 velas y 6 antorchas)','Número de paquetes (Hasta que se consuman)',1,9,false);

        /**
        * Entretenimiento
        */
        Comanda::create(['nombre'=>'Entretenimiento','descripcion'=>'Opciones de Entretenimiento para tu evento']);
        
        // Niños
        $this->crearProducto('Niños','',1,10,true);
        $this->crearProducto('Inflables','(Especificar cantidad)<strong><small> En 48 horas recibirás opciones y la cotización correspondiente</small></strong>',1,10,false);
        $this->crearProducto('Trampolin','(Especificar cantidad)<strong><small> En 48 horas recibirás opciones y la cotización correspondiente</small></strong>',1,10,false);
        $this->crearProducto('Piñatas','(Especificar temática de la piñata)<strong><small> En 48 horas recibirás la cotización correspondiente</small></strong>',1,10,false);
        $this->crearProducto('Payaso','(Especificar temática del payaso)<strong><small> En 48 horas recibirás la cotización correspondiente</small></strong>',1,10,false);
        $this->crearProducto('Show Infantil (Botarga, Princesas, Hombres de acción)','(Especificar temática)<strong><small> En 48 horas recibirás opciones y la cotización correspondiente</small></strong>',1,10,false);

        // Adolescentes
        $this->crearProducto('Adolescentes','',1,10,true);
        $this->crearProducto('Consola Play Station (1 pantalla, 1 consola, 3 Juegos)','Cantidad de paquetes',1,10,false);
        $this->crearProducto('Consola X-Box (1 pantalla, 1 consola, 3 Juegos)','Cantidad de paquetes',1,10,false);
        $this->crearProducto('Consola Nintendo (1 pantalla, 1 consola, 3 Juegos)','Cantidad de paquetes',1,10,false);

        // Genéricos
        $this->crearProducto('Genéricos','',1,10,true);
        $this->crearProducto('Juegos de mesa, (Jenga, Scrabble y X)','Cantidad de juegos de mesa',1,10,false);
        $this->crearProducto('Casinos, incluye mesa y Animador (Juegos: X, X y X)','Cantidad de juegos',1,10,false);
        $this->crearProducto('Animador de Fiesta','Cantidad de animadores (recomendado 1 por cada 30 personas)',1,10,false);
        $this->crearProducto('Gios','Cantidad de Gios (Se recomienda 1 Gío por cada 30 personas)',1,10,false);

        // Adultos
        $this->crearProducto('Adultos','',1,10,true);
        $this->crearProducto('Standup Comedy','Número de horas (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',1,10,false);
        $this->crearProducto('Cantante','Número de horas (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',1,10,false);

        // Sólo adultos
        $this->crearProducto('Sólo Adultos','',1,10,true);
        $this->crearProducto('Stripper Despedida Solteras','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',1,10,false);
        $this->crearProducto('Stripper Despedida Solteros','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',1,10,false);
        $this->crearProducto('Stripper ellos para ellos','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',1,10,false);
        $this->crearProducto('Stripper ellas para ellas','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',1,10,false);

        /**
        * Ambientación
        */

        // Fiesta temática
        Comanda::create(['nombre'=>'Fiesta Temática','descripcion'=>'Preparamos tu fiesta acorde a la temática que nos indiques']);
        $this->crearProducto('Fiesta temática','(Especificar temática)',1,11,false);
        $this->crearProducto('Adornos de acuerdo a la temática','(Simple, Cargado o Recargado)',1,11,false);
        $this->crearProducto('Globos y demás','(Simple, Cargado o Recargado)',1,11,false);
        
        // Fiesta Convencional
        Comanda::create(['nombre'=>'Fiesta Convencional','descripcion'=>'Adornos y demás para una fiesta convencional']);
        $this->crearProducto('Fiesta convencional','',1,12,true);
        $this->crearProducto('Globos (incluye globos de aire y globos de gas)','(Simple, Cargado o Recargado)',1,12,false);
        $this->crearProducto('Flores (incluye arreglo floral por mesa)','(Simple, Cargado o Recargado)',1,12,false);
        $this->crearProducto('Disfraces de fiesta (Gorros, Antifaces y artilugios chistosos)','(Simple, Cargado o Recargado)',1,12,false);

        // Albercada
        Comanda::create(['nombre'=>'Albercada','descripcion'=>'Opciones para la albercada en tu fiesta']);
        $this->crearProducto('Máquina para fiesta de espuma','Número de horas',1,13,false);

        /**
        * Foto, Video y Recuerdos
        */

        // Fotografía
        Comanda::create(['nombre'=>'Fotografía','descripcion'=>'Opciones de fotografía para tu evento']);
        $this->crearProducto('Cobertura del evento','Número de horas (Entrega de material en USB)',1,14,false);
        
        // Video
        Comanda::create(['nombre'=>'Video','descripcion'=>'Opciones de video para tu evento']);
        $this->crearProducto('Cobertura del evento','Número de horas (Entrega de material en USB)',1,15,false);
        $this->crearProducto('Cobertura del evento (Con edición)','Número de horas (Entrega de material en USB)',1,15,false);

        // Recuerdos
        Comanda::create(['nombre'=>'Recuerdos del Evento','descripcion'=>'Opciones para que recuerden tu evento']);
        $this->crearProducto('Fotografías en marcos de cartón','Número de recuerdos',1,16,false);
        $this->crearProducto('Fotobooth (Tiras de 4 fotos divertidas)','Número de recuerdos',1,16,false);
        $this->crearProducto('Fotografías en marcos de madera','Número de recuerdos',1,16,false);

        /**
        * Invitaciones
        */

        // Invitaciones
        Comanda::create(['nombre'=>'Invitaciones','descripcion'=>'Opciones para invitar a tus asistentes']);
        $this->crearProducto('Diseño de invitación para envío a través de correo electrónico (elige 1 de 3 propuestas)','Sí/No',1,17,false);
        $this->crearProducto('Invitaciones impresas según el tipo de evento (elige 1 de 3 propuestas)','Sí/No',1,17,false);

        // Confirmación
        Comanda::create(['nombre'=>'Confirmación','descripcion'=>'Opciones para la confirmación de los asistentes a tu evento']);
        $this->crearProducto('Confirmación telefónica de invitados (Incluye listado electrónico)','Sí/No',1,18,false);
        $this->crearProducto('Confirmación electrónica de invitados (Incluye listado electrónico)','Sí/No',1,18,false);

        /**
        * Extras
        */

        // WIT
        Comanda::create(['nombre'=>'Extras','descripcion'=>'Experiencias con Ingenio para tu Evento']);
        $this->crearProducto('Flash mov antes o durante tu fiesta','Sí/No',1,19,false);
        $this->crearProducto('Prepara un video con tus amigos para sorprender a tu festejado','Sí/No',1,19,false);

        // Personal
        Comanda::create(['nombre'=>'Personal','descripcion'=>'Opciones de personal para tu evento']);
        $this->crearProducto('Requiero Edecanes Mujeres para sorprender','Sí/No',1,20,false);
        $this->crearProducto('Requiero Edecanes Hombres para sorprender','Sí/No',1,20,false);
        $this->crearProducto('Requiero Edecanes Hombres y Mujeres para sorprender','Sí/No',1,20,false);
        $this->crearProducto('Requiero un Host Mujer  para mi evento','Sí/No',1,20,false);
        $this->crearProducto('Requiero un Host Hombre  para mi evento','Sí/No',1,20,false);
        
        // Transporte
        Comanda::create(['nombre'=>'Transporte','descripcion'=>'Opciones de transporte para tus invitados']);
        $this->crearProducto('Transporte para llegar al evento desde un punto determinado','Sí/No',1,21,false);
        $this->crearProducto('Transporte para salir del evento a un punto determinado','Sí/No',1,21,false);
        $this->crearProducto('Servicio de UBER (tus invitados llegan seguros a sus hogares). Costo corre a cargo del client','Sí/No',1,21,false);
        $this->crearProducto('Requiero transportación durante el evento','Sí/No',1,21,false);
    }
}
