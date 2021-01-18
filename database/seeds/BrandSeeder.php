<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
            'name' => 'SD sederajat',
            'desc' => 'SD / MI',
            'suplier' => 'PT Karunia',
        ],

    [ 'name' => 'SD KU',
    'desc' => 'SD / MI',
    'suplier' => 'PT Karunia',]
    ]);
    }
}
