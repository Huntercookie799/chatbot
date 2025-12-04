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
            'item_id' => 1,
            'type' => 'image',
            'path' => 'media/prueba.jpg',
            'title' => 'Prueba',
            'mime_type' => 'jpg',
        ]);

        Media::create([
            'item_id' => 1,
            'type' => 'video',
            'path' => 'media/prueba.mp4',
            'mime_type' => 'mp4',
        ]);

        Media::create([
            'item_id' => 1,
            'type' => 'link',
            'path' => 'https://www.utleon.edu.mx/',
            'title' => 'Prueba',
        ]);
    }
}
