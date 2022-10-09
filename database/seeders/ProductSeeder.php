<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Xbox Game Pass Ultimate 3 Meses',
            'description' => 'Tenha acesso ilimitado a mais de 100 jogos de alta qualidade com o Xbox Game Pass, com títulos adicionados o tempo todo. Jogue no console ou no computador: há um plano para você. Entre no Xbox Game Pass por um preço mensal baixo e descubra seu próximo jogo favorito',
            'image' => 'https://www.zero3games.com.br/loja/assets/XBOX_GAME_PASS_ULTIMATE_3M_PT_BRAZIL_ESD_VERTICAL-main.webp',
            'price' => 134.50
        ]);
    }
}