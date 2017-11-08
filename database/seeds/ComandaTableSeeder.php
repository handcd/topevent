<?php

use Illuminate\Database\Seeder;
use WIT\Comanda;
use WIT\Product;

/**
* Abstract Class for Ennumeration of Campos
*/
abstract class Campos
{
    const SiNo = 1;
    const Numero = 2;
    const Texto = 3;
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
            ['Pastel temático','(Especificar temática)',Campos::Texto],
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
            ['Barra Libre Nacional','Cantidad en número de horas',Campos::Numero],
            ['Barra Libre Internacional','Cantidad en número de horas',Campos::Numero],
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

        /**
        * Mobiliario
        */
        // Mesas y Sillas altura estándar
        $this->crear('Mesas y Sillas (Altura estándar)','',[
            ['Mesa redonda para 10 personas','Cantidad en número de mesas (incluye mantel blanco)',Campos::Numero],
            ['Mesa cuadrada para 12 personas','Cantidad en número de mesas (incluye mantel blanco)',Campos::Numero],
            ['Tablón de servicio','Cantidad en número de tablones (incluye mantel blanco)',Campos::Numero],
            ['Silla banquete estándar acojinada','Cantidad en número de sillas (no incluye fundas)',Campos::Numero],
            ['Silla tiffany blanca','Cantidad en número de sillas',Campos::Numero],
            ['Silla tiffany chocolate','Cantidad en número de sillas',Campos::Numero],
        ]);

        // Mesas y sillas altas
        $this->crear('Mesas y Sillas (Altas)','',[
            ['Mesa periquera para 4 personas blanca','Cantidad en número de mesas',Campos::Numero],
            ['Mesa periquera para 4 personas chocolate','Cantidad en número de mesas',Campos::Numero],
            ['Mesa alta 6 personas vintage','Cantidad en número de mesas',Campos::Numero],
            ['Banco periquera chocolate','Cantidad en número de bancos',Campos::Numero],
            ['Banco periquera blanco','Cantidad en número de bancos',Campos::Numero],
            ['Banco periquera vintage','Cantidad en número de bancos',Campos::Numero],
        ]);

        // Mayor comodidad
        $this->crear('Mayor Comodidad','Opciones más confortables para tus invitads',[
            ['Sala lounge blanca para 10 personas','Cantidad en número de salas',Campos::Numero],
            ['Sala vintage para 10 personas','Cantidad en número de salas',Campos::Numero],
        ]);

        // Para pool party
        $this->crear('Para Pool Party','Opciones para su evento con alberca',[
            ['Camastros para alberca','Cantidad en número de camastros',Campos::Numero],
            ['Sombrillas para jardín o alberca','Cantidad en número de sombrillas',Campos::Numero],
            ['Bancos para alberca','Cantidad en número de bancos',Campos::Numero],
        ]);

        /**
        * Música - Visual
        */

        // Música
        $this->crear('Música','Opciones musicales para amenizar tu evento',[
            ['DJ Hasta 50 Personas','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',Campos::Numero],
            ['DJ Hasta 100 Personas','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',Campos::Numero],
            ['Karaoke','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',Campos::Numero],
            ['Grupo versátil','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',Campos::Numero],
            ['Cantante con pista / piano','Incluye 5 horas, cantidad en horas incluyendo las primeras cinco (Incluye equipo básico de audio  e iluminación)',Campos::Numero],
            ['Trío','Cantidad en horas deseadas (Incluye equipo básico de audio  e iluminación)',Campos::Numero],
            ['Mariachis','Cantidad en horas deseadas (Incluye equipo básico de audio  e iluminación)',Campos::Numero],
        ]);

        // Paquetes Visuales
        $this->crear('Paquetes Visuales','Paquetes de Pantallas o Proyectores para darle imagen a tu evento',[
            ['Pantallas 50 pulgadas con videos musicales','Especificar número (Se pueden proyectar videos on-demand)',Campos::Numero],
            ['Proyector con videos musicales','Especificar número (Se pueden proyectar videos on-demand)',Campos::Numero],
        ]);

        /**
        * Iluminación
        */
       $this->crear('Iluminación','Opciones de Iluminación para tu evento',[
            ['Luz LED color definible','Número en horas de uso',Campos::Numero],
            ['Romántica (paquete de 15 velas y 6 antorchas)','Número de paquetes (Hasta que se consuman)',Campos::Numero],
        ]);

        /**
        * Entretenimiento
        */
        
        // Niños
        $this->crear('Niños','',[
            ['Inflables','(Especificar cantidad). En 48 horas recibirás opciones y la cotización correspondiente',Campos::Numero],
            ['Trampolin','(Especificar cantidad). En 48 horas recibirás opciones y la cotización correspondiente',Campos::Numero],
            ['Piñatas','(Especificar temática de la piñata). En 48 horas recibirás la cotización correspondiente',Campos::Numero],
            ['Payaso','(Especificar temática del payaso). En 48 horas recibirás la cotización correspondiente',Campos::Numero],
            ['Show Infantil (Botarga, Princesas, Hombres de acción)','(Especificar temática). En 48 horas recibirás opciones y la cotización correspondiente',Campos::Numero],
        ]);

        // Adolescentes
        $this->crear('Adolescentes','',[
            ['Consola Play Station (1 pantalla, 1 consola, 3 Juegos)','Cantidad de paquetes',Campos::Numero],
            ['Consola X-Box (1 pantalla, 1 consola, 3 Juegos)','Cantidad de paquetes',Campos::Numero],
            ['Consola Nintendo (1 pantalla, 1 consola, 3 Juegos)','Cantidad de paquetes',Campos::Numero],
        ]);

        // Genéricos
        $this->crear('Genéricos','',[
            ['Juegos de mesa, (Jenga, Scrabble y X)','Cantidad de juegos de mesa',Campos::Numero],
            ['Casinos, incluye mesa y Animador (Juegos: X, X y X)','Cantidad de juegos',Campos::Numero],
            ['Animador de Fiesta','Cantidad de animadores (recomendado 1 por cada 30 personas)',Campos::Numero],
            ['Gios','Cantidad de Gios (Se recomienda 1 Gío por cada 30 personas)',Campos::Numero],
        ]);

        // Adultos
        $this->crear('Adultos','',[
            ['Standup Comedy','Número de horas (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',Campos::SiNo],
            ['Cantante','Número de horas (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',Campos::SiNo],
        ]);

        // Sólo adultos
        $this->crear('Sólo Adultos','',[
            ['Stripper Despedida Solteras','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',Campos::Numero],
            ['Stripper Despedida Solteros','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',Campos::Numero],
            ['Stripper ellos para ellos','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',Campos::Numero],
            ['Stripper ellas para ellas','Número de strippers (En un máximo de 48hrs recibirás opciones y el presupuesto correspondiente")',Campos::Numero],
        ]);

        /**
        * Ambientación
        */

        // Fiesta temática
        $this->crear('Fiesta Temática','Preparamos tu fiesta acorde a la temática que nos indiques',[
            ['Fiesta temática','(Especificar temática)',Campos::Texto],
            ['Adornos de acuerdo a la temática','(Simple, Cargado o Recargado)',Campos::Texto],
            ['Globos y demás','(Simple, Cargado o Recargado)',Campos::Texto],
        ]);
        
        // Fiesta Convencional
        $this->crear('Fiesta Convencional','Adornos y demás para una fiesta convencional',[
            ['Globos (incluye globos de aire y globos de gas)','(Simple, Cargado o Recargado)',Campos::Texto],
            ['Flores (incluye arreglo floral por mesa)','(Simple, Cargado o Recargado)',Campos::Texto],
            ['Disfraces de fiesta (Gorros, Antifaces y artilugios chistosos)','(Simple, Cargado o Recargado)',Campos::Texto],
        ]);

        // Albercada
        $this->crear('Albercada','Opciones para la albercada en tu fiesta',[
            ['Máquina para fiesta de espuma','Número de horas',Campos::Numero],
        ]);

        /**
        * Foto y Video
        */

        // Fotografía
        $this->crear('Fotografía','Opciones de fotografía para tu evento',[
            ['Cobertura del evento','Número de horas (Entrega de material en USB)',Campos::SiNo],
        ]);

        // Video
        $this->crear('Video','Opciones de video para tu evento',[
            ['Cobertura del evento','Número de horas (Entrega de material en USB)',Campos::SiNo],
            ['Cobertura del evento (Con edición)','Número de horas (Entrega de material en USB)',Campos::SiNo],
        ]);

        /**
        * Recuerdos
        */
        $this->crear('Recuerdos','Opciones para que recuerden tu evento',[
            ['Fotografías en marcos de cartón','Número de recuerdos',Campos::Numero],
            ['Fotobooth (Tiras de 4 fotos divertidas)','Número de recuerdos',Campos::Numero],
            ['Fotografías en marcos de madera','Número de recuerdos',Campos::Numero],
        ]);

        /**
        * Invitaciones
        */

        // Invitaciones
        $this->crear('Invitaciones','Opciones para invitar a tus asistentes',[
            ['Diseño de invitación para envío a través de correo electrónico (elige 1 de 3 propuestas)','Sí/No',Campos::SiNo],
            ['Invitaciones impresas según el tipo de evento (elige 1 de 3 propuestas)','Sí/No',Campos::SiNo],
        ]);

        // Confirmación
        $this->crear('Confirmación','Opciones para la confirmación de los asistentes a tu evento',[
            ['Confirmación telefónica de invitados (Incluye listado electrónico)','Sí/No',Campos::SiNo],
            ['Confirmación electrónica de invitados (Incluye listado electrónico)','Sí/No',Campos::SiNo],
        ]);

        /**
        * Extras
        */

        // WIT
        $this->crear('Extras','Experiencias con Ingenio para tu Evento',[
            ['Flash mov antes o durante tu fiesta','Sí/No',Campos::SiNo],
            ['Prepara un video con tus amigos para sorprender a tu festejado','Sí/No',Campos::SiNo],
        ]);

        // Personal
        $this->crear('Personal','Opciones de personal para tu evento',[
            ['Requiero Edecanes Mujeres para sorprender','Sí/No',Campos::SiNo],
            ['Requiero Edecanes Hombres para sorprender','Sí/No',Campos::SiNo],
            ['Requiero Edecanes Hombres y Mujeres para sorprender','Sí/No',Campos::SiNo],
            ['Requiero un Host Mujer  para mi evento','Sí/No',Campos::SiNo],
            ['Requiero un Host Hombre  para mi evento','Sí/No',Campos::SiNo],
        ]);

        // Transporte
        $this->crear('Transporte','Opciones de transporte para tus invitados',[
            ['Transporte para llegar al evento desde un punto determinado','Sí/No',Campos::SiNo],
            ['Transporte para salir del evento a un punto determinado','Sí/No',Campos::SiNo],
            ['Servicio de UBER (tus invitados llegan seguros a sus hogares). Costo corre a cargo del client','Sí/No',Campos::SiNo],
            ['Requiero transportación durante el evento','Sí/No',Campos::SiNo],
        ]);

    }
}
