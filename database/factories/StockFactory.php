<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Stock::class, function (Faker $faker) {
    return [
        'kode_cat' =>$faker->randomElement([10011,20011,30011,40011,50011,60011,70011,80011,90011,100110]),
        'kode_item_grup'=>$faker->randomElement([100110001,200110001,300110001,400110001,500110001,600110001,700110001,800110001,900110001,1001100001]),
        'kode_original'=> rand(0,999999),
        'original_barcode'=> Str::random(11),
        'nama_produk' => $faker->randomElement(['ASUS ROG','ASUS ROG STRIX','ASUS CRM','LG INA','SAMSUNG INA','SONY MACRO','ASUS MACRO','AQUA','POLYTRON','COSMOS','PLASMA']), 
        'nama_brand'=>$faker->randomElement(['ASUS','LG','SAMSUNG','SONY','AQUA','POLYTRON','COSMOS','PLASMA']),
        'batch_product'=>$faker->ean8,
        'unit_product'=>Str::random(5)
    ];
});
