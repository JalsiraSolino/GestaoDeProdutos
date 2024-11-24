<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produtos')->insert([
            [
                'categoria_id' => 1,              // Categoria ID fixa
                'nome' => 'Produto A',            // Nome fixo do produto
                'preco' => 29.99,                 // Preço fixo
                'estoque' => '20',                // Estoque fixo como string
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria_id' => 2,
                'nome' => 'Produto B',
                'preco' => 49.99,
                'estoque' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria_id' => 3,
                'nome' => 'Produto C',
                'preco' => 19.99,
                'estoque' => '15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
