<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'SEO',
            'slug' => 'seo',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
            'color' => 'purple'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'orange'
        ]);

        Category::create([
            'name' => 'Cyber Sucurity',
            'slug' => 'cyber-security',
            'color' => 'pink'
        ]);
    }
}
