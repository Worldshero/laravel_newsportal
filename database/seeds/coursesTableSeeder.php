<?php

use Illuminate\Database\Seeder;

class coursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'Category' => Str::random(10),
            'img_url' => Str::random(10),
            
            'Cat_title' => Str::random(10),
            
        ]);
    }
}
