<?php

use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Seeder for Domains
         * */

        DB::table('domains')->insert([
            'domain' => 'Technical'
        ]);

        DB::table('domains')->insert([
            'domain' => 'Management'
        ]);

        DB::table('domains')->insert([
            'domain' => 'Design'
        ]);
    }
}
