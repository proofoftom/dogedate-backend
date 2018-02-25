<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('genes')->truncate();

        factory(App\Gene::class, 90)->create();
    }
}
