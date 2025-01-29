<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdutoSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();  // Cria a instância do Faker para gerar dados aleatórios
        
        for ($i = 0; $i < 20; $i++) {
            DB::table('produtos')->insert([
                'nome' => $faker->word,  // Nome aleatório
                'descricao' => $faker->sentence,  // Descrição aleatória
                'preco' => $faker->randomFloat(2, 1, 1000),  // Preço aleatório entre 1 e 1000
                'quantidade_em_estoque' => $faker->numberBetween(1, 100),  // Quantidade aleatória entre 1 e 100
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
