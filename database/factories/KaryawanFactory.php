<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\karyawan::class, function (Faker $faker) {
    return [
        'users_id' => Str::random(10),
        'kode_company' => 'Ex-001-2020-12-19',
        'kode_departemen' =>  $faker->randomElement([7001,7002,7003,7004,7005,7006,7007,7008]),
        'kode_karyawan' => 'EXP-00'.Str::random(1000).'/XII/2020',
        'nama_karyawan' => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['L','P']),
        'tanggal_lahir' => $format = 'Y-m-d',
        'email' => $faker->unique()->safeEmail,
        'nomor_telp' =>Str::random(10),
        'nomor_hp' =>Str::random(10),
        'agama' =>$faker->randomElement(['ISLAM','MUSLIM']),
        'alamat' =>$faker->address,
        'avatar' =>''

    ];
});
