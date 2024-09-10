<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert ([
            ['type' => 'Motivation'],
            ['type' => 'Echec et Difficulté'],
            ['type' => 'Vie'],
            ['type' => 'Développement Personnel'],
            ['type' => 'Travail et Action'],
            ['type' => 'Inspirantes'],
            ['type' => 'Bonheur'],
            ['type' => 'Pensées Positives'],
            ['type' => 'Esprit Positif']
        ]);
         
    }
}
