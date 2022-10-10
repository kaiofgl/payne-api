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
            'title' => 'Minecraft: Minecoins',
            'description' => 'Explore novas formas de desfrutar do Minecraft com minijogos e mapas de aventura. Navegue na loja Minecraft para descobrir conteúdo completamente novo toda semana, incluindo pacotes de skin, pacotes de mash-up, minijogos e mapas de aventura para explorar. ',
            'thumbnail' => 'https://assets.xboxservices.com/assets/f5/a1/f5a1e21d-c465-48ba-b72f-3fbe06d083b7.jpg?n=Minecraft_Sneaky-Slider-1084_The-Wild-Update_1600x675.jpg',
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'title' => 'Xbox Game Pass Ultimate: Gift Card',
            'description' => 'Tenha acesso ilimitado a mais de 100 jogos de alta qualidade com o Xbox Game Pass, com títulos adicionados o tempo todo. Jogue no console ou no computador: há um plano para você. Entre no Xbox Game Pass por um preço mensal baixo e descubra seu próximo jogo favorito.',
            'thumbnail' => 'https://assets.xboxservices.com/assets/61/81/61812df4-5d10-4369-b31c-257debcc98de.jpg?n=Isometric_Ultimate.jpg',
        ]);
    }
}
