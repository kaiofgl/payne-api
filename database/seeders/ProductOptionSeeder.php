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
            'title' => '3500 Minecoins Gift Card"',
            'image' => 'https://www.zero3games.com.br/loja/assets/0229_l.jpg',
            'product_id' => 1,
            'price' => 77.45
        ]);
        DB::table('product_options')->insert([
            'title' => '3 Meses Xbox Game Pass Ultimate Gift Card"',
            'image' => 'https://www.zero3games.com.br/loja/assets/XBOX_GAME_PASS_ULTIMATE_3M_PT_BRAZIL_ESD_VERTICAL-main.webp',
            'product_id' => 2,
            'price' => 134.99
        ]);

    }
}
