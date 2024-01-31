<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Destination;
use App\Models\Post;
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

// Categories with slug
        Destination::create([
            'name' => 'Adventure Travel',
            'description' => 'Experience thrilling adventures and adrenaline-pumping activities.',
            'slug' => 'adventure-travel',
        ]);

        Destination::create([
            'name' => 'Beach Holidays',
            'description' => 'Relax and unwind on pristine beaches with crystal-clear waters.',
            'slug' => 'beach-holidays',
        ]);

        Destination::create([
            'name' => 'Cultural Exploration',
            'description' => 'Immerse yourself in diverse cultures and traditions around the globe.',
            'slug' => 'cultural-exploration',
        ]);

        Destination::create([
            'name' => 'Ecotourism',
            'description' => 'Discover and support sustainable travel initiatives and eco-friendly destinations.',
            'slug' => 'ecotourism',
        ]);

        Destination::create([
            'name' => 'Family Vacations',
            'description' => 'Plan memorable trips for the whole family with activities for all ages.',
            'slug' => 'family-vacations',
        ]);

        Destination::create([
            'name' => 'Luxury Travel',
            'description' => 'Indulge in opulent experiences and lavish accommodations.',
            'slug' => 'luxury-travel',
        ]);

        Destination::create([
            'name' => 'Solo Travel',
            'description' => 'Embark on soul-searching journeys and embrace the freedom of solo exploration.',
            'slug' => 'solo-travel',
        ]);

// Posts with slug
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 6,
//            'title' => "A Serene Journey Through Coastal Charms",
//            'description' => "Embark on a picturesque journey along the sun-kissed coastlines...",
//            'body' => "As the sun rises over the horizon, casting a golden glow upon the tranquil waters...",
//            'slug' => 'serene-coastal-journey',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 6,
//            'title' => "A Serene Journey Through Coastal Charms",
//            'description' => "Embark on a picturesque journey along the sun-kissed coastlines...",
//            'body' => "As the sun rises over the horizon, casting a golden glow upon the tranquil waters...",
//            'slug' => 'serene-coastal-journey',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 1,
//            'title' => "Trekking Through Timeless Landscapes",
//            'description' => "Embark on an unforgettable journey through rugged landscapes and ancient trails...",
//            'body' => "The adventure begins amidst towering peaks, where crisp mountain air fills the lungs...",
//            'slug' => 'timeless-landscapes-trekking',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 3,
//            'title' => "Cultural Odyssey: A Journey Through Time and Tradition",
//            'description' => "Embark on a cultural odyssey through vibrant cities, ancient landmarks, and hidden gems...",
//            'body' => "The journey begins in the heart of a bustling metropolis, where skyscrapers tower overhead...",
//            'slug' => 'cultural-odyssey-time-tradition',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 7,
//            'title' => "Wanderlust Unleashed: Exploring Nature's Playground",
//            'description' => "Embark on a journey of discovery through nature's playground, where untamed wilderness...",
//            'body' => "The adventure begins amidst towering forests, where sunlight filters through the canopy overhead...",
//            'slug' => 'exploring-natures-playground',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 1,
//            'title' => "Culinary Expedition: A Gastronomic Adventure Across Continents",
//            'description' => "Embark on a mouthwatering journey across continents, where each bite tells a story of culinary tradition...",
//            'body' => "The adventure begins amidst the bustling streets of a vibrant city, where the aroma of sizzling meats...",
//            'slug' => 'gastronomic-adventure-across-continents',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 3,
//            'title' => "Eco-Exploration: Preserving Nature's Splendor",
//            'description' => "Embark on an eco-conscious journey through pristine wilderness areas and biodiverse ecosystems...",
//            'body' => "The adventure begins in a lush rainforest, where towering trees form a verdant canopy overhead...",
//            'slug' => 'eco-exploration-preserving-natures-splendor',
//        ]);
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 6,
//            'title' => "A Serene Journey Through Coastal Charms",
//            'description' => "Embark on a picturesque journey along the sun-kissed coastlines...",
//            'body' => "As the sun rises over the horizon, casting a golden glow upon the tranquil waters...",
//            'slug' => 'serene-coastal-journey',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 1,
//            'title' => "Trekking Through Timeless Landscapes",
//            'description' => "Embark on an unforgettable journey through rugged landscapes and ancient trails...",
//            'body' => "The adventure begins amidst towering peaks, where crisp mountain air fills the lungs...",
//            'slug' => 'timeless-landscapes-trekking',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 3,
//            'title' => "Cultural Odyssey: A Journey Through Time and Tradition",
//            'description' => "Embark on a cultural odyssey through vibrant cities, ancient landmarks, and hidden gems...",
//            'body' => "The journey begins in the heart of a bustling metropolis, where skyscrapers tower overhead...",
//            'slug' => 'cultural-odyssey-time-tradition',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 7,
//            'title' => "Wanderlust Unleashed: Exploring Nature's Playground",
//            'description' => "Embark on a journey of discovery through nature's playground, where untamed wilderness...",
//            'body' => "The adventure begins amidst towering forests, where sunlight filters through the canopy overhead...",
//            'slug' => 'exploring-natures-playground',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 1,
//            'title' => "Culinary Expedition: A Gastronomic Adventure Across Continents",
//            'description' => "Embark on a mouthwatering journey across continents, where each bite tells a story of culinary tradition...",
//            'body' => "The adventure begins amidst the bustling streets of a vibrant city, where the aroma of sizzling meats...",
//            'slug' => 'gastronomic-adventure-across-continents',
//        ]);
//
//        Post::create([
//            'user_id' => 1,
//            'category_id' => 3,
//            'title' => "Eco-Exploration: Preserving Nature's Splendor",
//            'description' => "Embark on an eco-conscious journey through pristine wilderness areas and biodiverse ecosystems...",
//            'body' => "The adventure begins in a lush rainforest, where towering trees form a verdant canopy overhead...",
//            'slug' => 'eco-exploration-preserving-natures-splendor',
//        ]);

    }
}
