<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias')->insert([
            [
                'nome' => 'Categoria A', 
                'created_at' => now(),  
                'updated_at' => now(),
            ],
            [
                'nome' => 'Categoria B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Categoria C',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
