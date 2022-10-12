<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tags = ['PC', 'Playstation', 'Xbox', 'Nintendo', 'Google Play'];
        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag
            ]);
        }
    }
}
