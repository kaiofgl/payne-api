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
            'id' => 1,
            'name' => 'Xbox Game Pass Ultimate 3 Meses',
            'description' => 'Tenha acesso ilimitado a mais de 100 jogos de alta qualidade com o Xbox Game Pass, com títulos adicionados o tempo todo. Jogue no console ou no computador: há um plano para você. Entre no Xbox Game Pass por um preço mensal baixo e descubra seu próximo jogo favorito',
            'image' => 'https://www.zero3games.com.br/loja/assets/XBOX_GAME_PASS_ULTIMATE_3M_PT_BRAZIL_ESD_VERTICAL-main.webp',
            'price' => 134.50
        ]);

        DB::table('products')->insert([
            'name' => 'Valorant',
            'description' => 'Coloque suas moedinhas no jogo do Valorant High Elo Gameplay',
            'image' => 'https://cdn2.unrealengine.com/egs-valorant-riotgames-g1a-05-1920x1080-42cf018303e5.jpg',
            'thumbnail' => 'https://cdn2.unrealengine.com/egs-valorant-riotgames-g1a-05-1920x1080-42cf018303e5.jpg',
            'price' => 50
        ]);
    }
}
