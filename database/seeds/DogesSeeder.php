<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DogesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('doges')->truncate();

        // Add 42 doges...
        for ($x=0; $x<42; $x++) {
            $doge = factory(App\Doge::class)->create();
            // ... with 6 genes each.
            for ($i=0; $i<6; $i++) {
                DB::table('doge_gene')->insert([
                    'doge_id' => $doge->id,
                    'gene_id' => rand(1, 90)
                ]);
            }
        }

        // Like the last - but not least - doge.
        DB::table('doges_liked')->insert([
            'doge_id'  => 42,
            'owner_id' => 1
        ]);
        DB::table('doges_liked')->insert([
            'doge_id'  => 1,
            'owner_id' => 1
        ]);
    }
}
