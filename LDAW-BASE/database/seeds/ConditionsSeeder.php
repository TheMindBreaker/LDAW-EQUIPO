<?php

use Illuminate\Database\Seeder;

class ConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('conditions')->insert([
            'condName' => 'New',
        ]);
        DB::table('conditions')->insert([
            'condName' => 'Used',
        ]);
        DB::table('conditions')->insert([
            'condName' => 'Refurbished',
        ]);
        DB::table('conditions')->insert([
            'condName' => 'Open Box',
        ]);
    }
}
