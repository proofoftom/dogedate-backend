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
        $this->call(OwnersSeeder::class);
        $this->call(GenesSeeder::class);
        $this->call(DogesSeeder::class);
    }
}
