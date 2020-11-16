<?php

use Illuminate\Database\Seeder;

class ConsolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('consoles')->insert([
            'conName' => 'XBox One',
            'conBrand' => 'Microsoft'
        ]);
        DB::table('consoles')->insert([
            'conName' => 'Wii U',
            'conBrand' => 'Nintendo'
        ]);
        DB::table('consoles')->insert([
            'conName' => 'Play Station 4',
            'conBrand' => 'Sony'
        ]);
        DB::table('consoles')->insert([
            'conName' => 'PC',
            'conBrand' => 'MasterRace'
        ]);
    }
}
