<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class ProductOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_options')->insert([
            'name' => 'Xbox Game Pass Ultimate 1 Mês',
            // 'image' => 'https://www.zero3games.com.br/loja/assets/XBOX_GAME_PASS_ULTIMATE_3M_PT_BRAZIL_ESD_VERTICAL-main.webp',
            'thumbnail' => 'https://www.zero3games.com.br/loja/assets/XBOX_GAME_PASS_ULTIMATE_3M_PT_BRAZIL_ESD_VERTICAL-main.webp',
            'product_id' => 1,
            'price' => 49.90
        ]);
    }
}
