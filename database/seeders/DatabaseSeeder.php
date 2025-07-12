<?php

namespace Database\Seeders;

use App\Models\Service;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       Service::create([
    'icon' => '💻',
    'title' => 'Web Design & Development',
    'description' => 'Modern, responsive websites that perform beautifully across all devices.'
       ],
       [
        'icon' => '🎨',
        'title' => 'UI/UX Design',
        'description' => 'User-centered interfaces that are both intuitive and visually appealing.'
       ],
       [
        'icon' => '📱',
        'title' => 'Mobile App Development',
        'description' => 'Mobile apps that are both user-friendly and visually stunning.'
       ],

       [
        'icon' => '📈',
        'title' => 'Digital Marketing',
        'description' => 'Grow your audience with SEO, PPC, and social media campaigns.'
       ],
       [
        'icon' => '🚀',
        'title' => 'Brand Strategy',
        'description' => 'Clarify your identity and position your brand for success.'
       ],
       [
        'icon' => '📱',
        'title' => 'Social Media Management',
        'description' => 'We build, manage and grow your social presence.'
       ]
);
    }
}
