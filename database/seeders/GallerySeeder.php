<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GalleryItem::insert([
            ['title'=>'Wedding Glam','image_url'=>'https://picsum.photos/600?1', 'category'=>'Wedding'],
            ['title'=>'Corporate Setup','image_url'=>'https://picsum.photos/600?2','category'=>'Corporate'],
            ['title'=>'Birthday Bash', 'image_url'=>'https://picsum.photos/600?3','category'=>'Birthday'],
        ]);
    }
}
