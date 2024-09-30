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
        // Thêm dữ liệu vào bảng categories
        Category::insert([
            ['name' => 'Science'],
            ['name' => 'Fiction'],
            ['name' => 'Fantasy'],
            ['name' => 'Biography'],
            ['name' => 'History'],
        ]);
    }
}
