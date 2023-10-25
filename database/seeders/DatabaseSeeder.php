<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\OfertaTuristica;
use App\Models\LugarTuristico;
use Illuminate\Support\Facades\Redis;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'senati',
            'email' => 'senati@senati.pe',
            'password' => 'senati'
        ]);
        Region::create([
            'nombre' => 'Lima',
            'descripcion' => 'Centro histórico de Lima, Parque de la Reserva, Museo Larco, Museo Nacional de Arqueología, Antropología e Historia del Perú, Catedral de Lima, Palacio de Gobierno, etc.',
            'imagen' => 'lima.jpg'
        ]);

        Region::create([
            'nombre' => 'Cusco',
            'descripcion' => 'Ciudadela de Machu Picchu, Sacsayhuamán, Ollantaytambo, Pisac, Chinchero, Maras, Moray, etc.',
            'imagen' => 'cusco.jpg'
        ]);

        Region::create([
            'nombre' => 'Puno',
            'descripcion' => 'Lago Titicaca, Isla Taquile, Isla Amantani, Uros, Ciudadela de Sillustani, Raqchi, etc.',
            'imagen' => 'puno.jpg'
        ]);

        Region::create([
            'nombre' => 'Trujillo',
            'descripcion' => 'Chan Chan, Huacas del Sol y de la Luna, Huaca de la Esmeralda, Museo de Arte Colonial, etc.',
            'imagen' => 'trujillo.jpg'
        ]);

        Region::create([
            'nombre' => 'Ayacucho',
            'descripcion' => 'Santuario Histórico de la Pampa de Ayacucho, Catedral de Ayacucho, Museo Histórico Regional, etc.',
            'imagen' => 'ayacucho.jpg'
        ]);

        Region::create([
            'nombre' => 'Chiclayo',
            'descripcion' => 'Chan Chan, Museo de Arte Colonial, Museo Nacional de Sicán, etc.',
            'imagen' => 'chiclayo.jpg'
        ]);

        Region::create([
            'nombre' => 'Ica',
            'descripcion' => 'Líneas de Nazca, Huacachina, Bodega Tacama, etc.',
            'imagen' => 'ica.jpg'
        ]);

        Region::create([
            'nombre' => 'Arequipa',
            'descripcion' => 'Catedral de Arequipa, Castillo de San Sebastián, Mirador de Yanahuara, Valle del Colca, etc.',
            'imagen' => 'arequipa.jpg'
        ]);

        Region::create([
            'nombre' => 'Amazonas',
            'descripcion' => 'Río Amazonas, Reserva Nacional Pacaya-Samiria, Reserva Nacional Allpahuayo-Mishana, etc.',
            'imagen' => 'amazonas.jpg'
        ]);

        Region::create([
            'nombre' => 'Ancash',
            'descripcion' => 'Cordillera Blanca, Parque Nacional Huascaran, Laguna 69, etc.',
            'imagen' => 'ancash.jpg'
        ]);

        Region::create([
            'nombre' => 'Madre de Dios',
            'descripcion' => 'Selva amazónica, Diversidad biológica, Cataratas de Manu, etc.',
            'imagen' => 'madre_de_dios.jpg'
        ]);

        Region::create([
            'nombre' => 'Huánuco',
            'descripcion' => 'Cueva de las Lechuzas, Cataratas de Ahuashiyacu, Laguna de Lauricocha, etc.',
            'imagen' => 'huanuco.jpg'
        ]);

        Region::create([
            'nombre' => 'Tumbes',
            'descripcion' => 'Bosque seco ecuatorial, Diversidad biológica, Laguna de Huacachina, etc.',
            'imagen' => 'tumbes.jpg'
        ]);

        Region::create([
            'nombre' => 'San Martín',
            'descripcion' => 'Selva amazónica, Reserva Nacional Cordillera Escalera, Cataratas de Ahuashiyacu, etc.',
            'imagen' => 'san_martin.jpg'
        ]);


        $lima = Region::where('nombre', 'Lima')->first();
        $cusco = Region::where('nombre', 'Cusco')->first();
        $puno = Region::where('nombre', 'Puno')->first();
        $trujillo = Region::where('nombre', 'Trujillo')->first();
        $ayacucho = Region::where('nombre', 'Ayacucho')->first();
        $chiclayo = Region::where('nombre', 'Chiclayo')->first();
        $ica = Region::where('nombre', 'Ica')->first();
        $arequipa = Region::where('nombre', 'Arequipa')->first();
        $amazonas = Region::where('nombre', 'Amazonas')->first();
        $madre_de_dios = Region::where('nombre', 'Madre de Dios')->first();
        $san_martin = Region::where('nombre', 'San Martín')->first();
        $huanuco = Region::where('nombre', 'Huánuco')->first();
        $tumbes = Region::where('nombre', 'Tumbes')->first();
        $ancash = Region::where('nombre', 'Ancash')->first();

        LugarTuristico::create([
            'nombre' => 'Parque de la Reserva',
            'descripcion' => 'El Parque de la Reserva es un parque impresionante en Lima que alberga el famoso Circuito Mágico del Agua. Puedes disfrutar de espectáculos de luces y fuentes de agua, lo que lo convierte en un lugar perfecto para un paseo en familia o una cita romántica.',
            'imagen' => '01.jpg',
            'region_id' => $lima->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Museo Larco',
            'descripcion' => 'Un museo que exhibe una impresionante colección de arte precolombino.',
            'imagen' => '02.jpg',
            'region_id' => $lima->id,
        ]);

        LugarTuristico::create([
            'nombre' => 'Machu Picchu',
            'descripcion' => 'Una emocionante experiencia de trekking que...',
            'imagen' => '03.jpg',
            'region_id' => $cusco->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Sacsayhuamán',
            'descripcion' => 'Un impresionante complejo arqueológico inca en las afueras de Cusco.',
            'imagen' => '04.jpg',
            'region_id' => $cusco->id,
        ]);

        LugarTuristico::create([
            'nombre' => 'Ollantaytambo',
            'descripcion' => 'Un impresionante complejo arqueológico inca en el Valle Sagrado de los Incas. Ollantaytambo es conocido por sus terrazas agrícolas, templos y fortalezas bien conservados.',
            'imagen' => '05.jpg',
            'region_id' => $cusco->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Pisac',
            'descripcion' => 'Un pintoresco pueblo en el Valle Sagrado de los Incas, conocido por su mercado de artesanías y su sitio arqueológico, que incluye terrazas agrícolas y antiguas construcciones incas.',
            'imagen' => '06.jpg',
            'region_id' => $cusco->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Chinchero',
            'descripcion' => 'Un pintoresco pueblo en el Valle Sagrado de los Incas, famoso por su hermosa iglesia colonial y su mercado de artesanías. Chinchero también tiene impresionantes terrazas agrícolas incaicas.',
            'imagen' => '07.jpg',
            'region_id' => $cusco->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Maras',
            'descripcion' => 'Un pueblo en el Valle Sagrado de los Incas, conocido por sus salinas en terrazas que han sido utilizadas desde la época incaica para la producción de sal.',
            'imagen' => '08.jpg',
            'region_id' => $cusco->id, // Asegúrate de que el ID de Cusco sea el correcto
        ]);

        LugarTuristico::create([
            'nombre' => 'Moray',
            'descripcion' => 'Un sitio arqueológico en el Valle Sagrado de los Incas que contiene terrazas agrícolas circulares utilizadas para experimentos de cultivo incaicos.',
            'imagen' => '09.jpg',
            'region_id' => $cusco->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Vinicunca',
            'descripcion' => 'La montaña de colores ubicada en la región de Cusco. Ofrece un impresionante paisaje de montañas de colores naturales.',
            'imagen' => '10.jpg',
            'region_id' => $cusco->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Lago Titicaca',
            'descripcion' => 'El lago navegable más alto del mundo, hogar de varias islas y comunidades indígenas, incluyendo las Islas Flotantes de los Uros.',
            'imagen' => '11.jpg',
            'region_id' => $puno->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Isla Taquile',
            'descripcion' => 'Isla Taquile, ubicada en el Lago Titicaca, es conocida por su cultura tradicional y su impresionante paisaje. Puedes explorar la isla, conocer a los amables habitantes locales y disfrutar de las vistas panorámicas del lago.',
            'imagen' => '12.jpg',
            'region_id' => $puno->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Isla Amantani',
            'descripcion' => 'Una de las islas en el Lago Titicaca, conocida por su belleza natural y la hospitalidad de sus habitantes. Es un destino popular para la estadía en casas de familia.',
            'imagen' => '13.jpg',
            'region_id' => $puno->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Islas Flotantes de los Uros',
            'descripcion' => 'Islas artificiales hechas de totora, habitadas por la comunidad indígena Uro. Una experiencia única en el Lago Titicaca.',
            'imagen' => '14.jpg',
            'region_id' => $puno->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Ciudadela de Sillustani',
            'descripcion' => 'La ciudadela de Sillustani es un sitio arqueológico en las orillas del Lago Umayo. Aquí encontrarás tumbas funerarias de la cultura Kolla y un paisaje impresionante. Es un lugar perfecto para explorar la historia preincaica de la región.',
            'imagen' => '15.jpg',
            'region_id' => $puno->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Raqchi',
            'descripcion' => 'Un sitio arqueológico en la región de Cusco que contiene las ruinas de un antiguo templo inca dedicado a Wiracocha.',
            'imagen' => '16.jpg',
            'region_id' => $cusco->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Chan Chan',
            'descripcion' => 'Chan Chan es la ciudad de barro más grande de América. Explora las impresionantes ruinas de esta ciudad preincaica y admira las intrincadas decoraciones en barro. Es un sitio arqueológico fascinante.',
            'imagen' => '17.jpg',
            'region_id' => $trujillo->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Huacas del Sol y de la Luna',
            'descripcion' => 'Las Huacas del Sol y de la Luna son templos adorados por la civilización Moche. Puedes visitar estas estructuras arqueológicas, que ofrecen una visión única de la cultura Moche y su religión.',
            'imagen' => '18.jpg',
            'region_id' => $trujillo->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Huaca de la Esmeralda',
            'descripcion' => 'Una antigua huaca en Trujillo, que contiene restos arqueológicos precolombinos. Se cree que es un lugar ceremonial utilizado por la civilización Moche.',
            'imagen' => '19.jpg',
            'region_id' => $trujillo->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Santuario Histórico de la Pampa de Ayacucho',
            'descripcion' => 'Un área protegida en Ayacucho que conmemora la batalla de Ayacucho, un evento clave en la independencia de Perú. El lugar contiene monumentos y sitios históricos.',
            'imagen' => '20.jpg',
            'region_id' => $ayacucho->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Líneas de Nazca',
            'descripcion' => 'Las Líneas de Nazca son geoglifos misteriosos que se extienden en el desierto de Nazca. Puedes sobrevolar la región y observar las figuras de animales y formas geométricas grabadas en la tierra.',
            'imagen' => '21.jpg',
            'region_id' => $ica->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Huacachina',
            'descripcion' => 'Huacachina es un oasis en medio del desierto de Ica. Puedes disfrutar de actividades como el sandboard en las dunas, paseos en buggies y relajación en la laguna rodeada de palmeras.',
            'imagen' => '22.jpg',
            'region_id' => $ica->id
        ]);

        LugarTuristico::create([
            'nombre' => 'Bodega Tacama',
            'descripcion' => 'Una bodega vinícola en la región de Lima que ofrece tours y degustaciones de vinos y piscos.',
            'region_id' => $ica->id,
            'imagen' => '23.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Castillo de San Sebastián',
            'descripcion' => 'Un castillo histórico en la ciudad de Arequipa con vistas panorámicas de la ciudad.',
            'region_id' => $arequipa->id,
            'imagen' => '24.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Valle del Colca',
            'descripcion' => 'Un impresionante valle en la región de Arequipa, conocido por su cañón profundo y sus vistas espectaculares.',
            'region_id' => $arequipa->id,
            'imagen' => '25.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Río Amazonas',
            'descripcion' => 'Uno de los ríos más grandes y biodiversos del mundo, que atraviesa la región de Amazonas.',
            'region_id' => $amazonas->id,
            'imagen' => '26.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Reserva Nacional Pacaya-Samiria',
            'descripcion' => 'Una vasta área de selva amazónica protegida en la región de Amazonas, con una increíble diversidad de vida silvestre.',
            'region_id' => $amazonas->id,
            'imagen' => '27.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Reserva Nacional Allpahuayo-Mishana',
            'descripcion' => 'Una reserva natural en la región de Loreto, conocida por su biodiversidad y ecosistemas únicos.',
            'region_id' => $amazonas->id,
            'imagen' => '28.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Cordillera Blanca',
            'descripcion' => 'Una impresionante cordillera de montañas en la región de Áncash, conocida por el trekking y el montañismo.',
            'region_id' => $ancash->id,
            'imagen' => '29.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Laguna 69',
            'descripcion' => 'Una hermosa laguna de alta montaña en la región de Áncash, rodeada de picos nevados.',
            'region_id' => $ancash->id,
            'imagen' => '30.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Mirador de Yanahuara',
            'descripcion' => 'Un mirador en Arequipa que ofrece vistas panorámicas de los volcanes y la ciudad.',
            'region_id' => $arequipa->id,
            'imagen' => '31.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Parque Nacional Manu',
            'descripcion' => 'Un vasto parque nacional en la región de Madre de Dios, que abarca selva tropical y es conocido por su rica biodiversidad y la preservación de la vida silvestre.',
            'region_id' => $madre_de_dios->id,
            'imagen' => '32.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Cueva de las Lechuzas',
            'descripcion' => 'Una cueva en la selva amazónica, en el Parque Nacional Manu, que alberga una colonia de lechuzas.',
            'region_id' => $huanuco->id,
            'imagen' => '33.jpg'
        ]);


        LugarTuristico::create([
            'nombre' => 'Cataratas de Ahuashiyacu',
            'descripcion' => 'Impresionantes cataratas en la selva amazónica, en el Parque Nacional Manu.',
            'region_id' => $huanuco->id,
            'imagen' => '34.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Laguna de Lauricocha',
            'descripcion' => 'Una hermosa laguna de alta montaña en la región de Huánuco, parte del Parque Nacional Huascarán.',
            'region_id' => $huanuco->id,
            'imagen' => '35.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Bosque Nuboso',
            'descripcion' => 'Un bosque nuboso en la región de San Martín, conocido por su flora y fauna únicas.',
            'region_id' => $san_martin->id,
            'imagen' => '36.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Montañas de Raura',
            'descripcion' => 'Un espectacular sistema montañoso en la región de Huanuco, perfecto para montañismo.',
            'region_id' => $huanuco->id,
            'imagen' => '37.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Río Urubamba',
            'descripcion' => 'Un río en la región de Cusco, que fluye a través del Valle Sagrado de los Incas y es popular para actividades como el rafting.',
            'region_id' => $cusco->id,
            'imagen' => '38.jpg'
        ]);

        LugarTuristico::create([
            'nombre' => 'Las Islas Lobos de Tierra',
            'descripcion' => 'Un grupo de islas frente a la costa de Huanchaco, Trujillo, conocido por su biodiversidad marina.',
            'region_id' => $trujillo->id,
            'imagen' => '39.jpg'
        ]);

        $parqueDeLaReserva = LugarTuristico::where('nombre', 'Parque de la Reserva')->first();
        $machuPicchu = LugarTuristico::where('nombre', 'Machu Picchu')->first();
        $sacsayhuaman = LugarTuristico::where('nombre', 'Sacsayhuamán')->first();
        $ollantaytambo = LugarTuristico::where('nombre', 'Ollantaytambo')->first();
        $pisac = LugarTuristico::where('nombre', 'Pisac')->first();
        $miradorYanahuara = LugarTuristico::where('nombre', 'Mirador de Yanahuara')->first();
        $parqueNacionalManu = LugarTuristico::where('nombre', 'Parque Nacional Manu')->first();
        $allpahuayoMishana = LugarTuristico::where('nombre', 'Reserva Nacional Allpahuayo-Mishana')->first();
        $bodegaTacama = LugarTuristico::where('nombre', 'Bodega Tacama')->first();
        $sillustani = LugarTuristico::where('nombre', 'Ciudadela de Sillustani')->first();
        $parqueReserva = LugarTuristico::where('nombre', 'Parque de la Reserva')->first();
        $museoLarco = LugarTuristico::where('nombre', 'Museo Larco')->first();
        $rioUrubamba = LugarTuristico::where('nombre', 'Río Urubamba')->first();
        $lobosTierra = LugarTuristico::where('nombre', 'Las Islas Lobos de Tierra')->first();
        $lagunaLauricocha = LugarTuristico::where('nombre', 'Laguna de Lauricocha')->first();
        $bosqueNuboso = LugarTuristico::where('nombre', 'Bosque Nuboso')->first();
        $montanasRaura = LugarTuristico::where('nombre', 'Montañas de Raura')->first();
        $parqueManu = LugarTuristico::where('nombre', 'Parque Nacional Manu')->first();
        $cuevaLechuzas = LugarTuristico::where('nombre', 'Cueva de las Lechuzas')->first();
        $cataratasAhuashiyacu = LugarTuristico::where('nombre', 'Cataratas de Ahuashiyacu')->first();
        $cordilleraBlanca = LugarTuristico::where('nombre', 'Cordillera Blanca')->first();
        $laguna69 = LugarTuristico::where('nombre', 'Laguna 69')->first();
        $yanahuara = LugarTuristico::where('nombre', 'Mirador de Yanahuara')->first();
        $valleColca = LugarTuristico::where('nombre', 'Valle del Colca')->first();
        $rioAmazonas = LugarTuristico::where('nombre', 'Río Amazonas')->first();
        $pacayaSamiria = LugarTuristico::where('nombre', 'Reserva Nacional Pacaya-Samiria')->first();
        $huacachina = LugarTuristico::where('nombre', 'Huacachina')->first();
        $tacama = LugarTuristico::where('nombre', 'Bodega Tacama')->first();
        $castilloSanSebastian = LugarTuristico::where('nombre', 'Castillo de San Sebastián')->first();
        $huacaEsmeralda = LugarTuristico::where('nombre', 'Huaca de la Esmeralda')->first();
        $pampaAyacucho = LugarTuristico::where('nombre', 'Santuario Histórico de la Pampa de Ayacucho')->first();
        $lineasNazca = LugarTuristico::where('nombre', 'Líneas de Nazca')->first();
        $raqchi = LugarTuristico::where('nombre', 'Raqchi')->first();
        $chanChan = LugarTuristico::where('nombre', 'Chan Chan')->first();
        $huacasSolLuna = LugarTuristico::where('nombre', 'Huacas del Sol y de la Luna')->first();
        $islaAmantani = LugarTuristico::where('nombre', 'Isla Amantani')->first();
        $islasFlotantesUros = LugarTuristico::where('nombre', 'Islas Flotantes de los Uros')->first();
        $ciudadelaSillustani = LugarTuristico::where('nombre', 'Ciudadela de Sillustani')->first();
        $vinicunca = LugarTuristico::where('nombre', 'Vinicunca')->first();
        $lagoTiticaca = LugarTuristico::where('nombre', 'Lago Titicaca')->first();
        $islaTaquile = LugarTuristico::where('nombre', 'Isla Taquile')->first();
        $chinchero = LugarTuristico::where('nombre', 'Chinchero')->first();
        $maras = LugarTuristico::where('nombre', 'Maras')->first();
        $moray = LugarTuristico::where('nombre', 'Moray')->first();

        OfertaTuristica::create([
            'nombre' => 'Exploración nocturna en Parque de la Reserva',
            'descripcion' => 'Disfruta de una fascinante exploración nocturna en el Parque de la Reserva. Este recorrido te llevará a través de las impresionantes fuentes de agua iluminadas, creando un ambiente mágico y relajante. Descubre la historia y la belleza de este icónico lugar turístico.',
            'cartera_posibilidades' => 'Cultura, naturaleza, entretenimiento nocturno',
            'precio' => 50.00,
            'imagen_principal' => '1697413318389.jpeg',
            'imagenes' => '1697413318389.jpeg,1697413324567.jpeg,1697413332084.jpeg,1697413338524.jpeg,1697413350919.png,1697413358528.jpeg,1697413375609.jpeg',
            'lugar_turistico_id' => $parqueDeLaReserva->id
        ]);

        OfertaTuristica::create([
            'nombre' => 'Tour cultural en el Museo Larco',
            'descripcion' => 'Embárcate en un fascinante tour cultural en el Museo Larco. Explora una impresionante colección de arte precolombino, descubre la historia de la civilización peruana y admira piezas únicas de la antigüedad. Una experiencia enriquecedora que te sumergirá en la rica herencia cultural de Perú.',
            'cartera_posibilidades' => 'Cultura, historia, arte',
            'precio' => 40.00,
            'imagen_principal' => '1697413514324.jpeg',
            'imagenes' => '1697413514324.jpeg,1697413535057.jpeg,1697413542211.jpeg,1697413545976.jpeg,1697413549026.jpeg,1697413555339.jpeg,1697413559060.jpeg,1697413562685.jpeg',
            'lugar_turistico_id' => $museoLarco->id
        ]);

        OfertaTuristica::create([
            'nombre' => 'Aventura en Machu Picchu',
            'descripcion' => 'Vive una emocionante aventura en Machu Picchu. Explora las antiguas ruinas incas, admira las impresionantes vistas de las montañas y siente la magia de este lugar histórico. Un viaje que te llevará a través de la historia y la naturaleza de los Andes peruanos.',
            'cartera_posibilidades' => 'Aventura, historia, naturaleza',
            'precio' => 250.00,
            'imagen_principal' => '1697413604852.jpeg',
            'imagenes' => '1697413604852.jpeg,1697413610181.jpeg,1697413622062.jpeg,1697413635568.jpeg,1697413642183.jpeg,1697413677728.jpeg,1697413680541.jpeg,1697413687530.jpeg',
            'lugar_turistico_id' => $machuPicchu->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Tour histórico en Sacsayhuamán',
            'descripcion' => 'Explora la impresionante fortaleza de Sacsayhuamán, una joya arquitectónica inca. Este tour te llevará a través de las ruinas, permitiéndote conocer la historia y la cultura inca. Admira las vistas panorámicas de Cusco desde este lugar emblemático.',
            'cartera_posibilidades' => 'Historia, cultura, paisajes',
            'precio' => 70.00,
            'imagen_principal' => '1697414221601.jpeg',
            'imagenes' => '1697414271653.png,1697414282666.jpeg,1697414287828.jpeg,1697414289496.jpeg,1697414291647.jpeg',
            'lugar_turistico_id' => $sacsayhuaman->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Exploración en Ollantaytambo',
            'descripcion' => 'Descubre el encanto de Ollantaytambo, una antigua ciudad inca. Este recorrido te llevará a través de sus calles empedradas, plazas y terrazas. Conoce la historia de este importante sitio arqueológico y disfruta de la belleza del Valle Sagrado.',
            'cartera_posibilidades' => 'Historia, cultura, naturaleza',
            'precio' => 60.00,
            'imagen_principal' => '1697414337136.jpeg',
            'imagenes' => '1697414341431.jpeg,1697414351874.jpeg,1697414363236.jpeg,1697414368855.jpeg,1697414395981.jpeg',
            'lugar_turistico_id' => $ollantaytambo->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Tour de mercados en Pisac',
            'descripcion' => 'Embárcate en un emocionante recorrido por los mercados de Pisac. Descubre la artesanía local, prueba la deliciosa comida peruana y sumérgete en la cultura andina. Una experiencia única que te conectará con la vida cotidiana de la región.',
            'cartera_posibilidades' => 'Cultura, gastronomía, compras',
            'precio' => 30.00,
            'imagen_principal' => '1697414468262.jpeg',
            'imagenes' => '1697414476284.jpeg,1697414480418.jpeg,1697414495518.webp,1697472187597.jpeg',
            'lugar_turistico_id' => $pisac->id,
        ]);


        OfertaTuristica::create([
            'nombre' => 'Visita a Chinchero y sus textiles',
            'descripcion' => 'Explora el pintoresco pueblo de Chinchero y descubre su rica tradición textil. Conoce a los artesanos locales y aprende sobre la elaboración de tejidos andinos. Disfruta de las hermosas vistas de los Andes.',
            'cartera_posibilidades' => 'Artesanía, cultura, paisajes',
            'precio' => 45.00,
            'imagen_principal' => '1697416185518.jpeg',
            'imagenes' => '1697416190865.jpeg,1697416199479.jpeg,1697416210286.jpeg,1697416220981.jpeg,1697416225011.jpeg',
            'lugar_turistico_id' => $chinchero->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Tour gastronómico en Maras',
            'descripcion' => 'Experimenta un tour gastronómico en el pueblo de Maras. Prueba platos auténticos de la región y disfruta de la comida peruana en su máxima expresión. Descubre los sabores locales en un entorno encantador.',
            'cartera_posibilidades' => 'Gastronomía, cultura, experiencias culinarias',
            'precio' => 55.00,
            'imagen_principal' => '1697416522112.jpeg',
            'imagenes' => '1697416523935.jpeg,1697416526795.jpeg,1697416531028.jpeg,1697416546334.jpeg,1697416552053.jpeg',
            'lugar_turistico_id' => $maras->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Exploración de los círculos de Moray',
            'descripcion' => 'Sumérgete en la historia agrícola de los incas con un recorrido por los círculos de Moray. Descubre cómo esta estructura era utilizada para experimentar con diferentes cultivos en un entorno impresionante. Una experiencia educativa y única.',
            'cartera_posibilidades' => 'Historia, agricultura, cultura',
            'precio' => 40.00,
            'imagen_principal' => '1697416691925.jpeg',
            'imagenes' => '1697416695942.jpeg,1697416701764.jpeg,1697416703550.jpeg,1697416719718.jpeg,1697416727003.jpeg',
            'lugar_turistico_id' => $moray->id,
        ]);


        OfertaTuristica::create([
            'nombre' => 'Excursión a Vinicunca - La Montaña de Colores',
            'descripcion' => 'Embárcate en una emocionante excursión a la Montaña de Colores, Vinicunca. Descubre el impresionante paisaje de colores naturales que parece sacado de un sueño. Disfruta de la belleza de la naturaleza andina en su máxima expresión.',
            'cartera_posibilidades' => 'Naturaleza, aventura, paisajes únicos',
            'precio' => 80.00,
            'imagen_principal' => '1697416821508.jpeg',
            'imagenes' => '1697416826670.jpeg,1697416833379.jpeg,1697416857729.jpeg,1697416859881.jpeg,1697416864766.jpeg',
            'lugar_turistico_id' => $vinicunca->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Exploración del Lago Titicaca',
            'descripcion' => 'Descubre el Lago Titicaca, el lago navegable más alto del mundo. Realiza un recorrido en bote por sus aguas cristalinas, visita las islas flotantes de los Uros y disfruta de la cultura local en la Isla Taquile. Una experiencia inolvidable en el corazón de los Andes.',
            'cartera_posibilidades' => 'Naturaleza, cultura, aventura',
            'precio' => 120.00,
            'imagen_principal' => '1697416902966.jpeg',
            'imagenes' => '1697416907750.jpeg,1697416911456.jpeg,1697416914974.jpeg,1697416920322.webp,1697416922983.jpeg',
            'lugar_turistico_id' => $lagoTiticaca->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Estadía en Isla Taquile',
            'descripcion' => 'Disfruta de una estadía única en la hermosa Isla Taquile en el Lago Titicaca. Vive como un local, conoce sus tradiciones y disfruta de la tranquilidad de esta isla pintoresca. Una experiencia cultural auténtica en un entorno natural impresionante.',
            'cartera_posibilidades' => 'Cultura, naturaleza, tranquilidad',
            'precio' => 90.00,
            'imagen_principal' => '1697417015257.jpeg',
            'imagenes' => '1697417033060.jpeg,1697417045027.jpeg,1697417046543.jpeg,1697417055343.jpeg',
            'lugar_turistico_id' => $islaTaquile->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Estadía en Isla Amantani',
            'descripcion' => 'Disfruta de una experiencia inolvidable en la tranquila Isla Amantani en el Lago Titicaca. Conoce a las familias locales, participa en actividades culturales y admira los impresionantes paisajes del lago y los Andes.',
            'cartera_posibilidades' => 'Cultura, naturaleza, comunidad local',
            'precio' => 80.00,
            'imagen_principal' => '1697417143704.jpeg',
            'imagenes' => '1697417146879.jpeg,1697417153385.jpeg,1697417156263.jpeg,1697417162144.jpeg',
            'lugar_turistico_id' => $islaAmantani->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Tour a las Islas Flotantes de los Uros',
            'descripcion' => 'Explora las fascinantes Islas Flotantes de los Uros en el Lago Titicaca. Conoce a la comunidad Uro, descubre sus técnicas de construcción con totora y disfruta de un paseo en bote único por estas islas artificiales.',
            'cartera_posibilidades' => 'Cultura, naturaleza, experiencia acuática',
            'precio' => 40.00,
            'imagen_principal' => '1697417310880.jpeg',
            'imagenes' => '1697417330910.jpeg,1697417336686.jpeg,1697417340679.jpeg,1697417348433.jpeg,1697417349777.jpeg,1697417354723.jpeg',
            'lugar_turistico_id' => $islasFlotantesUros->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Visita a la Ciudadela de Sillustani',
            'descripcion' => 'Descubre la Ciudadela de Sillustani, un impresionante sitio arqueológico en las orillas del Lago Umayo. Explora las torres funerarias (chullpas) que datan de la época preincaica y disfruta de las vistas panorámicas del lago.',
            'cartera_posibilidades' => 'Historia, arqueología, paisajes',
            'precio' => 50.00,
            'imagen_principal' => '1697417388421.jpeg',
            'imagenes' => '1697417408702.jpeg,1697417411206.jpeg,1697417422245.jpeg,1697417432828.jpeg',
            'lugar_turistico_id' => $ciudadelaSillustani->id,
        ]);


        OfertaTuristica::create([
            'nombre' => 'Exploración en Raqchi, el Templo de Wiracocha',
            'descripcion' => 'Embárcate en una emocionante exploración en Raqchi, hogar del impresionante Templo de Wiracocha. Admira la arquitectura incaica y descubre la historia de este importante sitio arqueológico.',
            'cartera_posibilidades' => 'Historia, cultura, arqueología',
            'precio' => 60.00,
            'imagen_principal' => '1697417540816.jpeg',
            'imagenes' => '1697417549526.jpeg,1697417552977.jpeg,1697417556149.webp,1697417559076.jpeg,1697417562606.jpeg,1697417566536.jpeg',
            'lugar_turistico_id' => $raqchi->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Recorrido por Chan Chan, la Ciudad de Barro',
            'descripcion' => 'Explora las ruinas de Chan Chan, la Ciudad de Barro, una de las ciudades preincaicas más grandes del mundo. Descubre la impresionante arquitectura de adobe y la rica historia de esta civilización.',
            'cartera_posibilidades' => 'Historia, arqueología, cultura',
            'precio' => 70.00,
            'imagen_principal' => '1697417683355.jpeg',
            'imagenes' => '1697417686416.jpeg,1697417691399.jpeg,1697417695357.jpeg,1697417701953.jpeg,1697417711061.webp',
            'lugar_turistico_id' => $chanChan->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Visita a las Huacas del Sol y de la Luna',
            'descripcion' => 'Descubre las Huacas del Sol y de la Luna, dos templos mochicas ubicados en la región de Trujillo. Explora la arquitectura, la iconografía y la cultura de la antigua civilización mochica.',
            'cartera_posibilidades' => 'Historia, arqueología, cultura',
            'precio' => 50.00,
            'imagen_principal' => '1697417771177.jpeg',
            'imagenes' => '1697417789054.jpeg,1697417801865.jpeg,1697417805902.jpeg,1997472187597.jpeg',
            'lugar_turistico_id' => $huacasSolLuna->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Visita a la Huaca de la Esmeralda',
            'descripcion' => 'Explora la Huaca de la Esmeralda, un antiguo templo mochica situado en la región de Lambayeque. Admira la arquitectura y los relieves ornamentales de este sitio arqueológico bien conservado.',
            'cartera_posibilidades' => 'Historia, arqueología, cultura',
            'precio' => 45.00,
            'imagen_principal' => '1697417999153.jpeg',
            'imagenes' => '1697418028448.jpeg,1697418041382.jpeg,1697418044890.jpeg,1697418052204.jpeg,1697418057616.jpeg,1697418069616.jpeg',
            'lugar_turistico_id' => $huacaEsmeralda->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Recorrido por el Santuario Histórico de la Pampa de Ayacucho',
            'descripcion' => 'Explora el Santuario Histórico de la Pampa de Ayacucho, un importante sitio de la guerra de independencia peruana. Descubre los monumentos y la historia de esta área que desempeñó un papel clave en la lucha por la independencia del Perú.',
            'cartera_posibilidades' => 'Historia, cultura, patrimonio',
            'precio' => 35.00,
            'imagen_principal' => '1697418141636.jpeg',
            'imagenes' => '1697418156153.jpeg,1697418162088.jpeg,1697418165537.jpeg,1697418183722.jpeg',
            'lugar_turistico_id' => $pampaAyacucho->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Sobrevuelo de las Líneas de Nazca',
            'descripcion' => 'Experimenta un emocionante sobrevuelo de las Líneas de Nazca, un misterio arqueológico en el desierto de Nazca. Desde el aire, podrás apreciar las famosas figuras grabadas en la tierra, incluyendo animales y diseños geométricos.',
            'cartera_posibilidades' => 'Arqueología, misterio, naturaleza',
            'precio' => 150.00,
            'imagen_principal' => '1697418322776.jpeg',
            'imagenes' => '1697418327356.jpeg,1697418331458.jpeg,1697418335259.jpeg,1697418342044.jpeg,1697418355400.jpeg',
            'lugar_turistico_id' => $lineasNazca->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Aventura en Huacachina',
            'descripcion' => 'Embárcate en una emocionante aventura en Huacachina, un oasis en medio del desierto peruano. Realiza emocionantes recorridos en buggies y practica sandboarding en las dunas de arena. Una experiencia llena de adrenalina y diversión.',
            'cartera_posibilidades' => 'Aventura, deportes extremos, diversión',
            'precio' => 70.00,
            'imagen_principal' => '1697418396381.jpeg',
            'imagenes' => '1697418401144.jpeg,1697418408293.jpeg,1697418411326.jpeg,1697418419364.jpeg',
            'lugar_turistico_id' => $huacachina->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Degustación en Bodega Tacama',
            'descripcion' => 'Disfruta de una experiencia de degustación en la Bodega Tacama. Explora la tradición vinícola peruana y prueba una selección de vinos de alta calidad. Sumérgete en la cultura del vino y marida con deliciosos platos peruanos.',
            'cartera_posibilidades' => 'Enología, gastronomía, cultura',
            'precio' => 60.00,
            'imagen_principal' => '1697418575069.png',
            'imagenes' => '1697418582703.jpeg,1697418584471.jpeg,1697418588280.jpeg,1697418594108.jpeg',
            'lugar_turistico_id' => $tacama->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Visita al Castillo de San Sebastián',
            'descripcion' => 'Explora el Castillo de San Sebastián en Cusco, una estructura histórica que ofrece vistas panorámicas de la ciudad. Conoce la historia del castillo y admira la arquitectura colonial en un entorno pintoresco.',
            'cartera_posibilidades' => 'Historia, arquitectura, paisajes',
            'precio' => 40.00,
            'imagen_principal' => '1697418691297.jpeg',
            'imagenes' => '1697418703214.jpeg,1697418705276.jpeg,1697418711868.jpeg,1697472452227.jpeg',
            'lugar_turistico_id' => $castilloSanSebastian->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Exploración del Valle del Colca',
            'descripcion' => 'Embárcate en una emocionante exploración del Valle del Colca, uno de los cañones más profundos del mundo. Disfruta de vistas impresionantes, observa el majestuoso vuelo de los cóndores y explora los pueblos tradicionales en la región.',
            'cartera_posibilidades' => 'Naturaleza, aventura, cultura',
            'precio' => 90.00,
            'imagen_principal' => '1697418921907.jpeg',
            'imagenes' => '1697418934246.png,1697418937269.jpeg,1697418942569.jpeg,1697418959957.jpeg',
            'lugar_turistico_id' => $valleColca->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Navegación por el Río Amazonas',
            'descripcion' => 'Descubre la inmensidad del Río Amazonas en una emocionante excursión de navegación. Explora la selva amazónica, observa la fauna y la flora únicas y sumérgete en la belleza de uno de los ríos más grandes del mundo.',
            'cartera_posibilidades' => 'Naturaleza, aventura, ecoturismo',
            'precio' => 120.00,
            'imagen_principal' => '1697419076525.jpeg',
            'imagenes' => '1697419090906.jpeg,1697419096178.png,1697419102527.jpeg,1697419105032.png,1697419114546.jpeg',
            'lugar_turistico_id' => $rioAmazonas->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Aventura en la Reserva Nacional Pacaya-Samiria',
            'descripcion' => 'Vive una emocionante aventura en la Reserva Nacional Pacaya-Samiria, una de las áreas protegidas más grandes de Perú. Explora la selva, observa la vida silvestre y sumérgete en la naturaleza exuberante de la Amazonía.',
            'cartera_posibilidades' => 'Naturaleza, aventura, ecoturismo',
            'precio' => 150.00,
            'imagen_principal' => '1697419210628.jpeg',
            'imagenes' => '1697419217094.jpeg,1697419222262.jpeg,1697419224625.jpeg,1697472529600.jpeg',
            'lugar_turistico_id' => $pacayaSamiria->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Trekking en la Cordillera Blanca',
            'descripcion' => 'Embárcate en una emocionante aventura de trekking en la Cordillera Blanca. Explora paisajes alpinos impresionantes, camina por senderos escénicos y admira lagunas de alta montaña. Una experiencia para amantes de la naturaleza y la aventura.',
            'cartera_posibilidades' => 'Naturaleza, aventura, trekking',
            'precio' => 110.00,
            'imagen_principal' => '1697419311536.jpeg',
            'imagenes' => '1697419288168.jpeg,1697419307919.jpeg,1697419301975.jpeg,1697472616468.jpeg',
            'lugar_turistico_id' => $cordilleraBlanca->id,
        ]);

        OfertaTuristica::create([
            'nombre' => 'Excursión a la Laguna 69',
            'descripcion' => 'Descubre la belleza de la Laguna 69 en la Cordillera Blanca. Realiza una caminata para llegar a esta impresionante laguna de aguas azules rodeada de montañas nevadas. Disfruta de un día en la naturaleza.',
            'cartera_posibilidades' => 'Naturaleza, aventura, senderismo',
            'precio' => 75.00,
            'imagen_principal' => '1697420406325.jpeg',
            'imagenes' => '1697420408831.jpeg,1697420417290.jpeg,1697420434243.jpeg,1697420439716.jpeg',
            'lugar_turistico_id' => $laguna69->id,
        ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita al Mirador de Yanahuara',
        //     'descripcion' => 'Explora el Mirador de Yanahuara en Arequipa y admira las vistas panorámicas de la ciudad y el volcán Misti. Disfruta de un paseo tranquilo por este hermoso mirador y captura fotos impresionantes de la ciudad blanca.',
        //     'cartera_posibilidades' => 'Paisajes, cultura, fotografía',
        //     'precio' => 20.00,
        //     'imagen_principal' => 'mirador_yanahuara.jpg',
        //     'imagenes' => 'mirador_yanahuara1.jpg,mirador_yanahuara2.jpg,mirador_yanahuara3.jpg',
        //     'lugar_turistico_id' => $yanahuara->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Expedición al Parque Nacional Manu',
        //     'descripcion' => 'Embárcate en una emocionante expedición al Parque Nacional Manu, una reserva de biosfera en la Amazonía peruana. Explora la selva virgen, observa la biodiversidad única y sumérgete en la belleza natural de la región.',
        //     'cartera_posibilidades' => 'Naturaleza, ecoturismo, aventura',
        //     'precio' => 200.00,
        //     'imagen_principal' => 'parque_manu.jpg',
        //     'imagenes' => 'parque_manu1.jpg,parque_manu2.jpg,parque_manu3.jpg',
        //     'lugar_turistico_id' => $parqueManu->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración de la Cueva de las Lechuzas',
        //     'descripcion' => 'Descubre la Cueva de las Lechuzas en Amazonas, una cueva llena de estalactitas y estalagmitas, y hogar de una colonia de lechuzas. Realiza una emocionante expedición subterránea y admira las maravillas geológicas y la vida silvestre.',
        //     'cartera_posibilidades' => 'Naturaleza, espeleología, aventura',
        //     'precio' => 50.00,
        //     'imagen_principal' => 'cueva_lechuzas.jpg',
        //     'imagenes' => 'cueva_lechuzas1.jpg,cueva_lechuzas2.jpg,cueva_lechuzas3.jpg',
        //     'lugar_turistico_id' => $cuevaLechuzas->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Excursión a las Cataratas de Ahuashiyacu',
        //     'descripcion' => 'Disfruta de una emocionante excursión a las Cataratas de Ahuashiyacu en la región de Tarapoto. Camina por la selva, cruza puentes colgantes y admira la belleza de las cataratas en medio de la naturaleza exuberante.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, senderismo',
        //     'precio' => 40.00,
        //     'imagen_principal' => 'cataratas_ahuashiyacu.jpg',
        //     'imagenes' => 'cataratas_ahuashiyacu1.jpg,cataratas_ahuashiyacu2.jpg,cataratas_ahuashiyacu3.jpg',
        //     'lugar_turistico_id' => $cataratasAhuashiyacu->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Excursión a la Laguna de Lauricocha',
        //     'descripcion' => 'Descubre la belleza natural de la Laguna de Lauricocha en la región de Huánuco. Realiza una caminata para llegar a esta laguna de alta montaña, rodeada de montañas y paisajes impresionantes.',
        //     'cartera_posibilidades' => 'Naturaleza, senderismo, paisajes',
        //     'precio' => 70.00,
        //     'imagen_principal' => 'laguna_lauricocha.jpg',
        //     'imagenes' => 'laguna_lauricocha1.jpg,laguna_lauricocha2.jpg,laguna_lauricocha3.jpg',
        //     'lugar_turistico_id' => $lagunaLauricocha->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración del Bosque Nuboso',
        //     'descripcion' => 'Embárcate en una emocionante exploración del Bosque Nuboso en la región de San Martín. Descubre la biodiversidad única de esta región y camina entre las nubes mientras admiras la flora y fauna de la selva nublada.',
        //     'cartera_posibilidades' => 'Naturaleza, ecoturismo, aventura',
        //     'precio' => 80.00,
        //     'imagen_principal' => 'bosque_nuboso.jpg',
        //     'imagenes' => 'bosque_nuboso1.jpg,bosque_nuboso2.jpg,bosque_nuboso3.jpg',
        //     'lugar_turistico_id' => $bosqueNuboso->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Senderismo en las Montañas de Raura',
        //     'descripcion' => 'Vive una emocionante experiencia de senderismo en las Montañas de Raura en la región de Huancavelica. Explora paisajes alpinos y camina por las montañas de Raura mientras disfrutas de la naturaleza virgen.',
        //     'cartera_posibilidades' => 'Naturaleza, senderismo, aventura',
        //     'precio' => 60.00,
        //     'imagen_principal' => 'montanas_raura.jpg',
        //     'imagenes' => 'montanas_raura1.jpg,montanas_raura2.jpg,montanas_raura3.jpg',
        //     'lugar_turistico_id' => $montanasRaura->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Rafting en el Río Urubamba',
        //     'descripcion' => 'Experimenta la emoción del rafting en el Río Urubamba, uno de los ríos más importantes del Perú. Disfruta de rápidos emocionantes y hermosos paisajes mientras recorres el río con un equipo de expertos.',
        //     'cartera_posibilidades' => 'Aventura, deportes acuáticos, naturaleza',
        //     'precio' => 85.00,
        //     'imagen_principal' => 'rio_urubamba.jpg',
        //     'imagenes' => 'rio_urubamba1.jpg,rio_urubamba2.jpg,rio_urubamba3.jpg',
        //     'lugar_turistico_id' => $rioUrubamba->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración de las Islas Lobos de Tierra',
        //     'descripcion' => 'Embárcate en una exploración de las Islas Lobos de Tierra en la región de Lambayeque. Observa la abundante vida marina, incluyendo leones marinos y aves, y disfruta de la belleza natural de estas islas remotas.',
        //     'cartera_posibilidades' => 'Naturaleza, avistamiento de vida marina, aventura',
        //     'precio' => 75.00,
        //     'imagen_principal' => 'lobos_tierra.jpg',
        //     'imagenes' => 'lobos_tierra1.jpg,lobos_tierra2.jpg,lobos_tierra3.jpg',
        //     'lugar_turistico_id' => $lobosTierra->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Noche Mágica en el Parque de la Reserva',
        //     'descripcion' => 'Vive una noche mágica en el Parque de la Reserva en Lima. Explora el Circuito Mágico del Agua, una maravilla de fuentes iluminadas. Disfruta de un espectáculo de luces y agua que te dejará maravillado.',
        //     'cartera_posibilidades' => 'Cultura, entretenimiento, espectáculo',
        //     'precio' => 25.00,
        //     'imagen_principal' => 'parque_reserva.jpg',
        //     'imagenes' => 'parque_reserva1.jpg,parque_reserva2.jpg,parque_reserva3.jpg',
        //     'lugar_turistico_id' => $parqueReserva->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita al Museo Larco en Lima',
        //     'descripcion' => 'Explora el Museo Larco en Lima y admira su impresionante colección de arte precolombino. Descubre la historia y la cultura de Perú a través de las exposiciones de cerámica, textiles y objetos antiguos.',
        //     'cartera_posibilidades' => 'Cultura, historia, arte',
        //     'precio' => 20.00,
        //     'imagen_principal' => 'museo_larco.jpg',
        //     'imagenes' => 'museo_larco1.jpg,museo_larco2.jpg,museo_larco3.jpg',
        //     'lugar_turistico_id' => $museoLarco->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Trekking a Vinicunca, la Montaña de los Siete Colores',
        //     'descripcion' => 'Embárcate en una emocionante caminata hasta Vinicunca, la famosa Montaña de los Siete Colores en Cusco. Disfruta de vistas panorámicas de los paisajes multicolores y la naturaleza excepcional de la región.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, trekking',
        //     'precio' => 75.00,
        //     'imagen_principal' => 'vinicunca.jpg',
        //     'imagenes' => 'vinicunca1.jpg,vinicunca2.jpg,vinicunca3.jpg',
        //     'lugar_turistico_id' => $vinicunca->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Expedición al Lago Titicaca',
        //     'descripcion' => 'Embárcate en una emocionante expedición al Lago Titicaca, el lago navegable más alto del mundo. Explora las islas flotantes de los Uros, conoce las comunidades locales y disfruta de vistas impresionantes de la naturaleza y la cultura andina.',
        //     'cartera_posibilidades' => 'Naturaleza, cultura, aventura',
        //     'precio' => 80.00,
        //     'imagen_principal' => 'lago_titicaca.jpg',
        //     'imagenes' => 'lago_titicaca1.jpg,lago_titicaca2.jpg,lago_titicaca3.jpg',
        //     'lugar_turistico_id' => $lagoTiticaca->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Estadía en Isla Taquile',
        //     'descripcion' => 'Vive una auténtica experiencia en Isla Taquile, en el Lago Titicaca. Conoce la cultura de la comunidad taquileña, disfruta de la hospitalidad local y explora los paisajes pintorescos de la isla. Una experiencia única.',
        //     'cartera_posibilidades' => 'Cultura, ecoturismo, experiencia local',
        //     'precio' => 65.00,
        //     'imagen_principal' => 'isla_taquile.jpg',
        //     'imagenes' => 'isla_taquile1.jpg,isla_taquile2.jpg,isla_taquile3.jpg',
        //     'lugar_turistico_id' => $islaTaquile->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Aventura en Isla Amantani',
        //     'descripcion' => 'Embárcate en una emocionante aventura en Isla Amantani, en el Lago Titicaca. Explora la naturaleza y la cultura de la isla, camina por sus senderos y disfruta de la belleza escénica del lago y las montañas circundantes.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, cultura',
        //     'precio' => 75.00,
        //     'imagen_principal' => 'isla_amantani.jpg',
        //     'imagenes' => 'isla_amantani1.jpg,isla_amantani2.jpg,isla_amantani3.jpg',
        //     'lugar_turistico_id' => $islaAmantani->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita a la Ciudadela de Sillustani',
        //     'descripcion' => 'Explora la Ciudadela de Sillustani en Puno, un impresionante complejo arqueológico junto al Lago Umayo. Descubre las impresionantes tumbas funerarias y las vistas panorámicas del lago y las torres funerarias.',
        //     'cartera_posibilidades' => 'Arqueología, cultura, paisajes',
        //     'precio' => 40.00,
        //     'imagen_principal' => 'sillustani.jpg',
        //     'imagenes' => 'sillustani1.jpg,sillustani2.jpg,sillustani3.jpg',
        //     'lugar_turistico_id' => $sillustani->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración de Raqchi',
        //     'descripcion' => 'Embárcate en una emocionante exploración de Raqchi, un importante sitio arqueológico en el Valle Sagrado de los Incas. Descubre el templo de Wiracocha y aprende sobre la cultura inca en este lugar histórico.',
        //     'cartera_posibilidades' => 'Arqueología, historia, cultura',
        //     'precio' => 50.00,
        //     'imagen_principal' => 'raqchi.jpg',
        //     'imagenes' => 'raqchi1.jpg,raqchi2.jpg,raqchi3.jpg',
        //     'lugar_turistico_id' => $raqchi->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita a Chan Chan, la Ciudad de Barro',
        //     'descripcion' => 'Explora Chan Chan en Trujillo, la ciudad de barro más grande de América. Descubre las impresionantes estructuras de adobe, los murales y la historia de esta antigua civilización. Una experiencia arqueológica única.',
        //     'cartera_posibilidades' => 'Arqueología, historia, cultura',
        //     'precio' => 35.00,
        //     'imagen_principal' => 'chan_chan.jpg',
        //     'imagenes' => 'chan_chan1.jpg,chan_chan2.jpg,chan_chan3.jpg',
        //     'lugar_turistico_id' => $chanChan->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita a las Huacas del Sol y de la Luna',
        //     'descripcion' => 'Explora las Huacas del Sol y de la Luna en Trujillo, dos templos de la cultura Moche. Descubre las impresionantes estructuras, las decoraciones murales y la historia de esta civilización preincaica.',
        //     'cartera_posibilidades' => 'Arqueología, historia, cultura',
        //     'precio' => 30.00,
        //     'imagen_principal' => 'huacas_sol_luna.jpg',
        //     'imagenes' => 'huacas_sol_luna1.jpg,huacas_sol_luna2.jpg,huacas_sol_luna3.jpg',
        //     'lugar_turistico_id' => $huacasSolLuna->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración de la Huaca de la Esmeralda',
        //     'descripcion' => 'Embárcate en una emocionante exploración de la Huaca de la Esmeralda en Trujillo. Descubre esta pirámide trunca y su historia, y admira las reliquias encontradas en el lugar. Una experiencia arqueológica fascinante.',
        //     'cartera_posibilidades' => 'Arqueología, historia, cultura',
        //     'precio' => 25.00,
        //     'imagen_principal' => 'huaca_esmeralda.jpg',
        //     'imagenes' => 'huaca_esmeralda1.jpg,huaca_esmeralda2.jpg,huaca_esmeralda3.jpg',
        //     'lugar_turistico_id' => $huacaEsmeralda->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita al Santuario Histórico de la Pampa de Ayacucho',
        //     'descripcion' => 'Explora el Santuario Histórico de la Pampa de Ayacucho, un sitio histórico importante en la región de Ayacucho. Descubre las huellas de la Batalla de Ayacucho y aprende sobre la independencia del Perú.',
        //     'cartera_posibilidades' => 'Historia, cultura, patrimonio',
        //     'precio' => 20.00,
        //     'imagen_principal' => 'pampa_ayacucho.jpg',
        //     'imagenes' => 'pampa_ayacucho1.jpg,pampa_ayacucho2.jpg,pampa_ayacucho3.jpg',
        //     'lugar_turistico_id' => $pampaAyacucho->id,
        // ]);


        // OfertaTuristica::create([
        //     'nombre' => 'Sobrevuelo de las Líneas de Nazca',
        //     'descripcion' => 'Realiza un emocionante sobrevuelo sobre las famosas Líneas de Nazca en Ica. Observa las enigmáticas figuras y líneas grabadas en el desierto que han intrigado a arqueólogos y viajeros durante siglos.',
        //     'cartera_posibilidades' => 'Arqueología, misterio, aventura',
        //     'precio' => 120.00,
        //     'imagen_principal' => 'lineas_nazca.jpg',
        //     'imagenes' => 'lineas_nazca1.jpg,lineas_nazca2.jpg,lineas_nazca3.jpg',
        //     'lugar_turistico_id' => $lineasNazca->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Aventura en Huacachina',
        //     'descripcion' => 'Embárcate en una emocionante aventura en Huacachina, un oasis en el desierto de Ica. Realiza sandboarding en las dunas de arena, disfruta de un paseo en buggy y admira los hermosos paisajes del desierto.',
        //     'cartera_posibilidades' => 'Aventura, deportes extremos, naturaleza',
        //     'precio' => 65.00,
        //     'imagen_principal' => 'huacachina.jpg',
        //     'imagenes' => 'huacachina1.jpg,huacachina2.jpg,huacachina3.jpg',
        //     'lugar_turistico_id' => $huacachina->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita a la Bodega Tacama',
        //     'descripcion' => 'Descubre la tradición vinícola peruana en la Bodega Tacama en Ica. Realiza un recorrido por los viñedos, conoce el proceso de producción de vinos y pisco, y disfruta de degustaciones de vinos y piscos de alta calidad.',
        //     'cartera_posibilidades' => 'Gastronomía, enología, cultura',
        //     'precio' => 40.00,
        //     'imagen_principal' => 'bodega_tacama.jpg',
        //     'imagenes' => 'bodega_tacama1.jpg,bodega_tacama2.jpg,bodega_tacama3.jpg',
        //     'lugar_turistico_id' => $bodegaTacama->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Visita al Castillo de San Sebastián',
        //     'descripcion' => 'Explora el Castillo de San Sebastián en Piura, un impresionante castillo construido en el siglo XVII. Admira la arquitectura colonial y disfruta de las vistas panorámicas de la ciudad de Piura desde la torre.',
        //     'cartera_posibilidades' => 'Cultura, historia, arquitectura',
        //     'precio' => 15.00,
        //     'imagen_principal' => 'castillo_san_sebastian.jpg',
        //     'imagenes' => 'castillo_san_sebastian1.jpg,castillo_san_sebastian2.jpg,castillo_san_sebastian3.jpg',
        //     'lugar_turistico_id' => $castilloSanSebastian->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración del Valle del Colca',
        //     'descripcion' => 'Embárcate en una emocionante exploración del Valle del Colca en Arequipa. Descubre el majestuoso cañón del Colca, observa cóndores en su hábitat natural y disfruta de las vistas de los paisajes andinos.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, avistamiento de aves',
        //     'precio' => 60.00,
        //     'imagen_principal' => 'valle_colca.jpg',
        //     'imagenes' => 'valle_colca1.jpg,valle_colca2.jpg,valle_colca3.jpg',
        //     'lugar_turistico_id' => $valleColca->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Navegación por el Río Amazonas',
        //     'descripcion' => 'Embárcate en una emocionante aventura de navegación por el Río Amazonas, el río más grande del mundo. Explora la selva amazónica, observa la fauna y la flora exótica y disfruta de la vida en la jungla.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, selva amazónica',
        //     'precio' => 120.00,
        //     'imagen_principal' => 'rio_amazonas.jpg',
        //     'imagenes' => 'rio_amazonas1.jpg,rio_amazonas2.jpg,rio_amazonas3.jpg',
        //     'lugar_turistico_id' => $rioAmazonas->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Expedición a la Reserva Nacional Pacaya-Samiria',
        //     'descripcion' => 'Embárcate en una emocionante expedición a la Reserva Nacional Pacaya-Samiria en Loreto, la reserva natural más grande de Perú. Descubre la selva amazónica, observa la vida silvestre y disfruta de la biodiversidad única de la región.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, selva amazónica',
        //     'precio' => 90.00,
        //     'imagen_principal' => 'pacaya_samiria.jpg',
        //     'imagenes' => 'pacaya_samiria1.jpg,pacaya_samiria2.jpg,pacaya_samiria3.jpg',
        //     'lugar_turistico_id' => $pacayaSamiria->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración de la Reserva Nacional Allpahuayo-Mishana',
        //     'descripcion' => 'Embárcate en una emocionante exploración de la Reserva Nacional Allpahuayo-Mishana en Loreto. Descubre la biodiversidad única de esta reserva, que alberga una gran variedad de especies de aves y plantas.',
        //     'cartera_posibilidades' => 'Naturaleza, avistamiento de aves, ecoturismo',
        //     'precio' => 55.00,
        //     'imagen_principal' => 'allpahuayo_mishana.jpg',
        //     'imagenes' => 'allpahuayo_mishana1.jpg,allpahuayo_mishana2.jpg,allpahuayo_mishana3.jpg',
        //     'lugar_turistico_id' => $allpahuayoMishana->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Trekking en la Cordillera Blanca',
        //     'descripcion' => 'Embárcate en una emocionante caminata en la Cordillera Blanca en Áncash. Descubre los paisajes de montaña, los glaciares y las lagunas de alta montaña en uno de los destinos de trekking más impresionantes de Perú.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, trekking',
        //     'precio' => 70.00,
        //     'imagen_principal' => 'cordillera_blanca.jpg',
        //     'imagenes' => 'cordillera_blanca1.jpg,cordillera_blanca2.jpg,cordillera_blanca3.jpg',
        //     'lugar_turistico_id' => $cordilleraBlanca->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Excursión a la Laguna 69',
        //     'descripcion' => 'Embárcate en una emocionante excursión a la Laguna 69 en Áncash. Camina por hermosos senderos de montaña y llega a esta impresionante laguna de aguas turquesas en el Parque Nacional Huascarán.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, trekking',
        //     'precio' => 45.00,
        //     'imagen_principal' => 'laguna_69.jpg',
        //     'imagenes' => 'laguna_691.jpg,laguna_692.jpg,laguna_693.jpg',
        //     'lugar_turistico_id' => $laguna69->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Vista panorámica desde el Mirador de Yanahuara',
        //     'descripcion' => 'Disfruta de una vista panorámica excepcional desde el Mirador de Yanahuara en Arequipa. Contempla los volcanes, la ciudad blanca de Arequipa y las iglesias históricas desde este hermoso mirador.',
        //     'cartera_posibilidades' => 'Naturaleza, cultura, vistas panorámicas',
        //     'precio' => 10.00,
        //     'imagen_principal' => 'mirador_yanahuara.jpg',
        //     'imagenes' => 'mirador_yanahuara1.jpg,mirador_yanahuara2.jpg,mirador_yanahuara3.jpg',
        //     'lugar_turistico_id' => $miradorYanahuara->id,
        // ]);

        // OfertaTuristica::create([
        //     'nombre' => 'Exploración del Parque Nacional Manu',
        //     'descripcion' => 'Embárcate en una emocionante exploración del Parque Nacional Manu en Madre de Dios. Descubre la biodiversidad única de la selva amazónica, observa animales silvestres y explora las profundidades de la selva.',
        //     'cartera_posibilidades' => 'Naturaleza, aventura, selva amazónica',
        //     'precio' => 100.00,
        //     'imagen_principal' => 'parque_nacional_manu.jpg',
        //     'imagenes' => 'parque_nacional_manu1.jpg,parque_nacional_manu2.jpg,parque_nacional_manu3.jpg',
        //     'lugar_turistico_id' => $parqueNacionalManu->id,
        // ]);
    }
}
