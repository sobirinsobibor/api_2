<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookCategories = [
            [
                'book_category_name' => 'Adventure',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_category_name' => 'Mystery',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_category_name' => 'Romance',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_category_name' => 'Science Fiction',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_category_name' => 'Fantasy',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];
        DB::table('book_categories')->insert($bookCategories);

    }
}
