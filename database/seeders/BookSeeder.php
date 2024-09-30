<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Thêm 100 bản ghi sách mẫu
         for ($i = 0; $i < 100; $i++) {
            Book::create([
                'title' => 'Book ' . $i,
                'thumbnail' => 'https://example.com/thumbnail' . $i . '.jpg',
                'author' => 'Author ' . $i,
                'publisher' => 'Publisher ' . $i,
                'publication' => now(),
                'price' => rand(100, 1000),
                'quantity' => rand(1, 100),
                'category_id' => rand(1, 5), // Ngẫu nhiên một category
            ]);
        }
    }
}
