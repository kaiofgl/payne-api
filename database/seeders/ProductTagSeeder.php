<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_tags')->insert([
            'product_id' => 1,
            'tag_id' => rand(1, 10)
        ]);
    }
}
