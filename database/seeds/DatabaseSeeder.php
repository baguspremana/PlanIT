<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminsTableSeeder::class,
            CompetitionsTableSeeder::class,
            GroupsTableSeeder::class,
            JuriesTableSeeder::class,
            ShirtsTableSeeder::class,
        ]);
    }
}
