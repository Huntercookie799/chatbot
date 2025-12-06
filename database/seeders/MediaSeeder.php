<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->truncate();
        Media::create([
            'item_id' => 3,
            'type' => 'image',
            'path' => 'media/Calendario.jpg',
            'title' => 'Calendario',
            'mime_type' => 'jpg',
        ]);
        Media::create([
            'item_id' => 3,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/resource/img/Calendario%202025-2026-01.jpg',
            'title' => 'Calendario',
        ]);
        Media::create([
            'item_id' => 4,
            'type' => 'image',
            'path' => 'media/Calendario.jpg',
            'title' => 'Calendario',
            'mime_type' => 'jpg',
        ]);
        Media::create([
            'item_id' => 4,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/resource/img/Calendario%202025-2026-01.jpg',
            'title' => 'Calendario',
        ]);
        Media::create([
            'item_id' => 5,
            'type' => 'image',
            'path' => 'media/hackaton.jpg',
            'title' => 'Hackaton',
            'mime_type' => 'jpg',
        ]);
        Media::create([
            'item_id' => 7,
            'type' => 'link',
            'path' => 'https://shre.ink/qSYF',
            'title' => 'Para más información',
        ]);
        Media::create([
            'item_id' => 7,
            'type' => 'image',
            'path' => 'media/docker.jpg',
            'title' => 'Para más información',
            'mime_type' => 'jpg',
        ]);
        Media::create([
            'item_id' => 11,
            'type' => 'video',
            'path' => 'https://youtu.be/brTEmABDBt4',
            'mime_type' => 'mp4',
        ]);
        Media::create([
            'item_id' => 20,
            'type' => 'image',
            'path' => 'media/Calendario.jpg',
            'title' => 'Calendario',
            'mime_type' => 'jpg',
        ]);
        Media::create([
            'item_id' => 20,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/resource/img/Calendario%202025-2026-01.jpg',
            'title' => 'Calendario',
        ]);
        Media::create([
            'item_id' => 22,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/public_html/alumno/reglamento-academico/Reglamento_Academico.pdf',
            'title' => 'Reglamento escolar',
        ]);
        Media::create([
            'item_id' => 23,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/public_html/alumno/reglamento-academico/Reglamento_Academico.pdf',
            'title' => 'Reglamento escolar',
        ]);
        Media::create([
            'item_id' => 25,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/public_html/alumno/reglamento-academico/Reglamento_Academico.pdf',
            'title' => 'Reglamento escolar',
        ]);
        Media::create([
            'item_id' => 28,
            'type' => 'image',
            'path' => 'media/bicis.jpg',
            'title' => 'Bicicletas',
            'mime_type' => 'jpg',
        ]);
        Media::create([
            'item_id' => 31,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/resource/img/Calendario%202025-2026-01.jpg',
            'title' => 'Calendario',
        ]);
        Media::create([
            'item_id' => 33,
            'type' => 'image',
            'path' => 'media/cafe.jpg',
            'title' => 'Cafeteria',
            'mime_type' => 'jpg',
        ]);

    }
}
