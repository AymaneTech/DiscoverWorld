<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

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
        Category::create([
            'name' => 'Adventure Travel',
            'description' => 'Experience thrilling adventures and adrenaline-pumping activities.',
            'image' => 'adventure.jpg',
        ]);

        Category::create([
            'name' => 'Beach Holidays',
            'description' => 'Relax and unwind on pristine beaches with crystal-clear waters.',
            'image' => 'beach.jpg',
        ]);

        Category::create([
            'name' => 'Cultural Exploration',
            'description' => 'Immerse yourself in diverse cultures and traditions around the globe.',
            'image' => 'culture.jpg',
        ]);

        Category::create([
            'name' => 'Ecotourism',
            'description' => 'Discover and support sustainable travel initiatives and eco-friendly destinations.',
            'image' => 'ecotourism.jpg',
        ]);

        Category::create([
            'name' => 'Family Vacations',
            'description' => 'Plan memorable trips for the whole family with activities for all ages.',
            'image' => 'family.jpg',
        ]);

        Category::create([
            'name' => 'Luxury Travel',
            'description' => 'Indulge in opulent experiences and lavish accommodations.',
            'image' => 'luxury.jpg',
        ]);

        Category::create([
            'name' => 'Solo Travel',
            'description' => 'Embark on soul-searching journeys and embrace the freedom of solo exploration.',
            'image' => 'solo.jpg',
        ]);

    }
}
