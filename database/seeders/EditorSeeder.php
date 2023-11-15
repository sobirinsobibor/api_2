<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $editors = [
            [
                'editor_name' => 'Gramedia Pustaka Utama',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'editor_name' => 'Mizan Pustaka',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'editor_name' => 'Kompas Gramedia',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'editor_name' => 'Elex Media Komputindo',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'editor_name' => 'Bentang Pustaka',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('editors')->insert($editors);

    }
}
