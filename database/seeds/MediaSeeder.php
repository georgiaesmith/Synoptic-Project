<?php

use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'media_database' )->delete();
        DB::table( 'media_database' )->insert([
            'name' => '5, 6, 7, 8',
            'artist' => "Steps",
            'album' => 'Irritating songs of yesteryear'
        ]);
    }
}
