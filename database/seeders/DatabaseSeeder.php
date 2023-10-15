<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\OfertaTuristica::factory()->create([
        //     'nombre' => 'test',
        // ]);

        // \App\Models\Region::factory()->create(
        //     [
        //         'nombre' => 'Lima',
        //         'descripcion' => 'Centro histórico de Lima, Parque de la Reserva, Museo Larco, Museo Nacional de Arqueología, Antropología e Historia del Perú, Catedral de Lima, Palacio de Gobierno, etc.',
        //         'imagen' => 'ruta_de_la_imagen'
        //     ],
        // );

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
    }
}
