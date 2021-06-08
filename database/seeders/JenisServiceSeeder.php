<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_services')->insert([
            'name' => 'Service',
            'price' => '40000'
        ]);
        
        DB::table('jenis_services')->insert([
            'name' => 'Brake Check',
            'price' => '15000'
        ]);
        
        DB::table('jenis_services')->insert([
            'name' => 'Electrical Check',
            'price' => '20000'
        ]);

        DB::table('jenis_services')->insert([
            'name' => 'Oil change',
            'price' => '31000'
        ]);

        DB::table('jenis_services')->insert([
            'name' => 'Tire pump',
            'price' => '2000'
        ]);

        DB::table('jenis_services')->insert([
            'name' => 'Tire Repairs',
            'price' => '8000'
        ]);
    }
}
