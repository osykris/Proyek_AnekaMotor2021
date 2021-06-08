<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SparepartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Filter Udara',
            'price' => '32000',
            'biayaPemasangan' => '20000',
            'stock' => 14
        ]);


        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Kampas Rem Depan',
            'price' => '41000',
            'biayaPemasangan' => '32000',
            'stock' => 20
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Kampas Rem Belakang',
            'price' => '63000',
            'biayaPemasangan' => '32000',
            'stock' => 10
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Kampas Kopling Set',
            'price' => '110000',
            'biayaPemasangan' => '32000',
            'stock' => 91
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Bohlam Lampu Depan',
            'price' => '114000',
            'biayaPemasangan' => '15000',
            'stock' => 37
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Ring Piston',
            'price' => '45000',
            'biayaPemasangan' => '40000',
            'stock' => 54
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Gir Depan',
            'price' => '35500',
            'biayaPemasangan' => '40000',
            'stock' => 114
        ]);
      
        DB::table('spareparts')->insert([
            'category_id' => 1,
            'nameS' => 'Gir Belakang',
            'price' => '63000',
            'biayaPemasangan' => '18000',
            'stock' => 114
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'V-Belt',
            'price' => '63000',
            'biayaPemasangan' => '52000',
            'stock' => 7
        ]);


        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'CDI',
            'price' => '220000',
            'biayaPemasangan' => '27000',
            'stock' => 93
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'Kampas Rem Depan/set',
            'price' => '75000',
            'biayaPemasangan' => '32000',
            'stock' => 23
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'Kampas Rem Belakang',
            'price' => '37000',
            'biayaPemasangan' => '32000',
            'stock' => 46
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'Sokbreker Belakang',
            'price' => '141000',
            'biayaPemasangan' => '10000',
            'stock' => 11
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'Saringan Udara',
            'price' => '58000',
            'biayaPemasangan' => '21000',
            'stock' => 50
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'Sokbreker Belakang',
            'price' => '267000',
            'biayaPemasangan' => '10000',
            'stock' => 7
        ]);
      
        DB::table('spareparts')->insert([
            'category_id' => 2,
            'nameS' => 'Ring Piston',
            'price' => '69000',
            'biayaPemasangan' => '30000',
            'stock' => 18
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Kampas Rem Depan Belakang',
            'price' => '37000',
            'biayaPemasangan' => '32000',
            'stock' => 22
        ]);


        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Rantai roda1',
            'price' => '16000',
            'biayaPemasangan' => '11000',
            'stock' => 100
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Paking Kepala Silinder',
            'price' => '51000',
            'biayaPemasangan' => '12000',
            'stock' => 2
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Gir Depan',
            'price' => '23000',
            'biayaPemasangan' => '20000',
            'stock' => 64
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Bohlam Lampu Depan',
            'price' => '8000',
            'biayaPemasangan' => '22000',
            'stock' => 12
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Saringan Udara',
            'price' => '46000',
            'biayaPemasangan' => '21000',
            'stock' => 50
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Rocker Arm',
            'price' => '76000',
            'biayaPemasangan' => '13000',
            'stock' => 2
        ]);
      
        DB::table('spareparts')->insert([
            'category_id' => 3,
            'nameS' => 'Relay Starterx',
            'price' => '47000',
            'biayaPemasangan' => '15000',
            'stock' => 16
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Kampas Rem Depan Belakang',
            'price' => '130000',
            'biayaPemasangan' => '32000',
            'stock' => 50
        ]);


        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Bohlam Lampu Sein',
            'price' => '27000',
            'biayaPemasangan' => '29000',
            'stock' => 16
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Gasket Karburator',
            'price' => '78000',
            'biayaPemasangan' => '22000',
            'stock' => 9
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Paking Kopling (per buah)',
            'price' => '70000',
            'biayaPemasangan' => '22000',
            'stock' => 5
        ]);

        
        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Bohlam Lampu Depan',
            'price' => '20000',
            'biayaPemasangan' => '21000',
            'stock' => 10
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Piston',
            'price' => '55000',
            'biayaPemasangan' => '20000',
            'stock' => 29
        ]);

        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Kabel Gas',
            'price' => '84000',
            'biayaPemasangan' => '20000',
            'stock' => 7
        ]);
      
        DB::table('spareparts')->insert([
            'category_id' => 4,
            'nameS' => 'Saringan Oli',
            'price' => '12000',
            'biayaPemasangan' => '20000',
            'stock' => 30
        ]);
    }
}
