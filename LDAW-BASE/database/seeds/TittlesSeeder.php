<?php

use Illuminate\Database\Seeder;

class TittlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        //
        DB::table('title_catalog')->insert([
            'title' => 'Call Of Duty',
            'titleEdtion' => 'Black Ops 3',
            'titleVersion' => '2.522',
            'titileActive' => 1
        ]);
        DB::table('title_catalog')->insert([
            'title' => 'SpiderMan',
            'titleEdtion' => 'Home Coming',
            'titleVersion' => '2.654',
            'titileActive' => 1
        ]);

        for($i=0; $i<=100; $i++) {

            DB::table('title_catalog')->insert([
                'title' => $faker->name,
                'titleEdtion' => $faker->company,
                'titleVersion' => $faker->randomFloat(3,0,4),
                'titileActive' => 1
            ]);
        }
    }
}
