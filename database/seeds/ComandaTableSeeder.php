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
        $this->crear('Tacos de Guisado Tradicionales','(Incluyen arroz, frijoles, salsas, limones y tortillas)',[
            ['Cochinita','Cantidad en número de personas',Campos::Numero],
            ['Relleno Negro','Cantidad en número de personas',Campos::Numero],
            ['Lechón al horno','Cantidad en número de personas',Campos::Numero],
            ['Poc Chuc','Cantidad en número de personas',Campos::Numero],
            ['Escabeche','Cantidad en número de personas',Campos::Numero],
        ]);

        // Hamburguesas y Hot-Dogs
        $this->crear('Hamburguesas y Hot-Dogs','(Incluyen aderezos como Catsup, Mostaza y Mayonesa)',[
            ['Hamburguesas','Número de personas',Campos::Numero],
            ['Hot-Dogs','Cantidad en número de personas',Campos::Numero],
            ['Papas a la Francesa','Cantidad en número de personas',Campos::Numero],
        ]);

        // Parrillada
        $this->crear('Parrillada','(Incluyen arroz, frijoles, salsas, limones y tortillas)',[
            ['Pollo','Cantidad en número de personas',Campos::Numero],
            ['Arrachera','Cantidad en número de personas',Campos::Numero],
            ['Cortes','Cantidad en número de personas',Campos::Numero],
            ['Costillitas','Cantidad en número de personas',Campos::Numero],
            ['Salchichas','Cantidad en número de personas',Campos::Numero],
        ]);

        // By Wit
        $this->crear('By WIT&trade;','Platos Originales diseñados por nosotros.',[
            ['Plato de fiestas tradicional','Cantidad en número de personas (Incluye Vaporcito, Ensalada de fiesta, Sandwichón, Pavo deshebrado, Pastel)',Campos::Numero],
        ]);

        // Chilaquiles
        $this->crear('Chilaquiles','Tornafiesta',[
            ['Rojos','Cantidad en número de personas',Campos::Numero],
            ['Verdes','Cantidad en número de personas',Campos::Numero],
        ]);

        // Pastel
        $this->crear('Pastel','Opciones de pasteles',[
            ['Pastel temático','(Especificar temática)'Campos::Texto],
            ['Pastel tradicional','Número de personas',Campos::Numero],
            ['Red Velvet','Cantidad en número de personas',Campos::Numero],
            ['Chocolate','Cantidad en número de personas',Campos::Numero],
            ['Tres Leches/Vainilla','Cantidad en número de personas',Campos::Numero],
            ['Almendras','Cantidad en número de personas',Campos::Numero],
            ['Queso Bola','Cantidad en número de personas',Campos::Numero],
        ]);
        

        // Cajita Infantil
        $this->crear('Cajita Infantil','Dulces para los más pequeños',[
            ['Cajita con: dulces para niños bien cool 1','Cantidad en número de niños',Campos::Numero],
            ['Cajita con: otros dulces aún más cool pero más caros','Cantidad en número de niños',Campos::Numero],
        ]);

        // Helados Artesanales
        $this->crear('Helados Artesanales','',[
            ['Mango','Cantidad en número de personas',Campos::Numero],
            ['Chaya','Cantidad en número de personas',Campos::Numero],
            ['Kiwi','Cantidad en número de personas',Campos::Numero],
            ['Napolitano Frutal','Cantidad en número de personas',Campos::Numero],
            ['Sandía','Cantidad en número de personas',Campos::Numero],
        ]);

        // Nieves con espíritu
        $this->crear('Nieves con espíritu','(Alcohol)',[
            ['Mezcal','Cantidad en número de personas',Campos::Numero],
            ['Tequila','Cantidad en número de personas',Campos::Numero],
            ['Whisky','Cantidad en número de personas',Campos::Numero],
            ['Bacardí','Cantidad en número de personas',Campos::Numero],
            ['Baileys','Cantidad en número de personas',Campos::Numero],
        ]);

        // -- Bebidas --

        // Refrescos
        $this->crear('Refrescos y Aguas','',[
            ['Refrescos Surtidos','Cantidad en número de personas',Campos::Numero],
            ['Agua de Horchata','Cantidad en número de personas',Campos::Numero],
            ['Agua de Jamaica','Cantidad en número de personas',Campos::Numero],
            ['Agua de Pepino con Limón','Cantidad en número de personas',Campos::Numero],
        ]);

        // Cervezas
        $this->crear('Cervezas','Surtido Claras, Ambar y Oscuras',[
            ['Montejo','Cantidad en número de personas',Campos::Numero],
            ['Modelo','Cantidad en número de personas',Campos::Numero],
            ['Indio','Cantidad en número de personas',Campos::Numero],
            ['Corona','Cantidad en número de personas',Campos::Numero],
            ['Cerveza de Barril','Cantidad en número de personas',Campos::Numero],
        ]);
        
        // Botellas de Alcohol
        $this->crear('Botellas de Alcohol','',[
            ['Mezcal','Cantidad en número de personas',Campos::Numero],
            ['Tequila','Cantidad en número de personas',Campos::Numero],
            ['Vodka','Cantidad en número de personas',Campos::Numero],
            ['Ron','Cantidad en número de personas',Campos::Numero],
            ['Whisky','Cantidad en número de personas',Campos::Numero],
        ]);

        // Barras Libres
        $this->crear('Barras Libres','(Incluye los licores anteriores, hielos, refrescos)',[
            ['Barra Libre Nacional','Cantidad en número de horas',Campos::Numero]
            ['Barra Libre Internacional','Cantidad en número de horas',Campos::Numero]
        ]);

        // Café, Té
        $this->crear('Café/Té','(Incluye azúcar, sustitutos de azúcar, crema, vasos, removedores y servilletas)',[
            ['Café sencillo','Cantidad en número de horas',Campos::Numero],
            ['Cafetera industrial','Cantidad en número de horas',Campos::Numero],
            ['Café Nesspresso','Cantidad en número de horas',Campos::Numero],
            ['Café Dolce Gusto','Cantidad en número de horas',Campos::Numero],
        ]);

        // Personal
        $this->crear('Personal de Servicio de Alimentos','Opciones de personal para atender a tus comensales',[
            ['Meseros (5 horas)','(Sugerido 1 por cada 15 personas)',Campos::Numero],
            ['Barmans (5 horas)','(Sugerido 1 por cada 30 personas)',Campos::Numero],
        ]);

        // Vajillas
        $this->crear('Vajillas','(Las opciones de material se enviarán a tu correo electrónico en 48 horas)',[
            ['Platos planos para comida','Cantidad en número de personas',Campos::Numero],
            ['Platos chicos para pastel','Cantidad en número de personas',Campos::Numero],
            ['Platos hondos','Cantidad en número de personas',Campos::Numero],
            ['Vasos de fiesta','Cantidad en número de personas',Campos::Numero],
            ['Servilletas','Cantidad en número de personas',Campos::Numero],
            ['Tenedores','Cantidad en número de personas',Campos::Numero],
            ['Cucharas','Cantidad en número de personas',Campos::Numero],
        ]);

        return;

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
