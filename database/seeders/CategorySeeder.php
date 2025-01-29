<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Infrastruktur']);
        Category::create(['name' => 'Pelayanan']);
        Category::create(['name' => 'Lingkungan']);
        Category::create(['name' => 'Lainnya']);
    }
}
