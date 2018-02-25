<?php

use Illuminate\Database\Seeder;

class OwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            'name'        => 'Tommy',
            'email'       => 'tommy.cox@protonmail.com',
            'password'    => bcrypt('quasar'),
            'image'       => 'statics/images/owner/hacker.jpg',
            'eth_address' => '0x0'
        ]);

        factory(App\Owner::class, 2)->create();
    }
}
