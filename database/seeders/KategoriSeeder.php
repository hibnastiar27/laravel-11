<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris') -> insert([
            ['name' => 'Teknologi'],
            ['name' => 'Tutorial'],
            ['name' => 'Website'],
            ['name' => 'Front End'],
            ['name' => 'Back End'],
        ]);
    }
}
