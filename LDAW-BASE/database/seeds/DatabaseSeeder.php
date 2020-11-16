<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(UsersAndRolesSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(ConditionsSeeder::class);
        $this->call(ConsolesSeeder::class);
        $this->call(TittlesSeeder::class);
    }
}
