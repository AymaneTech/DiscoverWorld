<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
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
        Category::create([
            'name' => 'Adventure Travel',
            'description' => 'Experience thrilling adventures and adrenaline-pumping activities.',
            'image' => 'adventure.jpg',
            'slug' => 'adventure-travel',
        ]);

        Category::create([
            'name' => 'Beach Holidays',
            'description' => 'Relax and unwind on pristine beaches with crystal-clear waters.',
            'image' => 'beach.jpg',
            'slug' => 'beach-holidays',
        ]);

        Category::create([
            'name' => 'Cultural Exploration',
            'description' => 'Immerse yourself in diverse cultures and traditions around the globe.',
            'image' => 'culture.jpg',
            'slug' => 'cultural-exploration',
        ]);

        Category::create([
            'name' => 'Ecotourism',
            'description' => 'Discover and support sustainable travel initiatives and eco-friendly destinations.',
            'image' => 'ecotourism.jpg',
            'slug' => 'ecotourism',
        ]);

        Category::create([
            'name' => 'Family Vacations',
            'description' => 'Plan memorable trips for the whole family with activities for all ages.',
            'image' => 'family.jpg',
            'slug' => 'family-vacations',
        ]);

        Category::create([
            'name' => 'Luxury Travel',
            'description' => 'Indulge in opulent experiences and lavish accommodations.',
            'image' => 'luxury.jpg',
            'slug' => 'luxury-travel',
        ]);

        Category::create([
            'name' => 'Solo Travel',
            'description' => 'Embark on soul-searching journeys and embrace the freedom of solo exploration.',
            'image' => 'solo.jpg',
            'slug' => 'solo-travel',
        ]);

// Posts with slug
        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => "A Serene Journey Through Coastal Charms",
            'description' => "Embark on a picturesque journey along the sun-kissed coastlines...",
            'body' => "As the sun rises over the horizon, casting a golden glow upon the tranquil waters...",
            'image' => "1706573003.jpg",
            'slug' => 'serene-coastal-journey',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => "A Serene Journey Through Coastal Charms",
            'description' => "Embark on a picturesque journey along the sun-kissed coastlines...",
            'body' => "As the sun rises over the horizon, casting a golden glow upon the tranquil waters...",
            'image' => "1706573003.jpg",
            'slug' => 'serene-coastal-journey',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => "Trekking Through Timeless Landscapes",
            'description' => "Embark on an unforgettable journey through rugged landscapes and ancient trails...",
            'body' => "The adventure begins amidst towering peaks, where crisp mountain air fills the lungs...",
            'image' => "1706573099.jpg",
            'slug' => 'timeless-landscapes-trekking',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => "Cultural Odyssey: A Journey Through Time and Tradition",
            'description' => "Embark on a cultural odyssey through vibrant cities, ancient landmarks, and hidden gems...",
            'body' => "The journey begins in the heart of a bustling metropolis, where skyscrapers tower overhead...",
            'image' => "1706573180.jpg",
            'slug' => 'cultural-odyssey-time-tradition',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 7,
            'title' => "Wanderlust Unleashed: Exploring Nature's Playground",
            'description' => "Embark on a journey of discovery through nature's playground, where untamed wilderness...",
            'body' => "The adventure begins amidst towering forests, where sunlight filters through the canopy overhead...",
            'image' => "1706573473.jpg",
            'slug' => 'exploring-natures-playground',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => "Culinary Expedition: A Gastronomic Adventure Across Continents",
            'description' => "Embark on a mouthwatering journey across continents, where each bite tells a story of culinary tradition...",
            'body' => "The adventure begins amidst the bustling streets of a vibrant city, where the aroma of sizzling meats...",
            'image' => "1706573730.jpg",
            'slug' => 'gastronomic-adventure-across-continents',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => "Eco-Exploration: Preserving Nature's Splendor",
            'description' => "Embark on an eco-conscious journey through pristine wilderness areas and biodiverse ecosystems...",
            'body' => "The adventure begins in a lush rainforest, where towering trees form a verdant canopy overhead...",
            'image' => "1706573885.jpg",
            'slug' => 'eco-exploration-preserving-natures-splendor',
        ]);
        Post::create([
            'user_id' => 1,
            'category_id' => 6,
            'title' => "A Serene Journey Through Coastal Charms",
            'description' => "Embark on a picturesque journey along the sun-kissed coastlines...",
            'body' => "As the sun rises over the horizon, casting a golden glow upon the tranquil waters...",
            'image' => "1706573003.jpg",
            'slug' => 'serene-coastal-journey',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => "Trekking Through Timeless Landscapes",
            'description' => "Embark on an unforgettable journey through rugged landscapes and ancient trails...",
            'body' => "The adventure begins amidst towering peaks, where crisp mountain air fills the lungs...",
            'image' => "1706573099.jpg",
            'slug' => 'timeless-landscapes-trekking',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => "Cultural Odyssey: A Journey Through Time and Tradition",
            'description' => "Embark on a cultural odyssey through vibrant cities, ancient landmarks, and hidden gems...",
            'body' => "The journey begins in the heart of a bustling metropolis, where skyscrapers tower overhead...",
            'image' => "1706573180.jpg",
            'slug' => 'cultural-odyssey-time-tradition',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 7,
            'title' => "Wanderlust Unleashed: Exploring Nature's Playground",
            'description' => "Embark on a journey of discovery through nature's playground, where untamed wilderness...",
            'body' => "The adventure begins amidst towering forests, where sunlight filters through the canopy overhead...",
            'image' => "1706573473.jpg",
            'slug' => 'exploring-natures-playground',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => "Culinary Expedition: A Gastronomic Adventure Across Continents",
            'description' => "Embark on a mouthwatering journey across continents, where each bite tells a story of culinary tradition...",
            'body' => "The adventure begins amidst the bustling streets of a vibrant city, where the aroma of sizzling meats...",
            'image' => "1706573730.jpg",
            'slug' => 'gastronomic-adventure-across-continents',
        ]);

        Post::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => "Eco-Exploration: Preserving Nature's Splendor",
            'description' => "Embark on an eco-conscious journey through pristine wilderness areas and biodiverse ecosystems...",
            'body' => "The adventure begins in a lush rainforest, where towering trees form a verdant canopy overhead...",
            'image' => "1706573885.jpg",
            'slug' => 'eco-exploration-preserving-natures-splendor',
        ]);

    }
}
