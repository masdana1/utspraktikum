<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EcommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ecommerces')->insert([
            'nama' => 'Bunga Teratai',
            'harga'=> '30000',
            'jenistanaman' => 'bunga',
        
        ]);
    }
}
