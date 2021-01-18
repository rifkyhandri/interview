<?php

use Illuminate\Database\Seeder;
use App\Customer;
class UserKonsumenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'username' => 'admin',
            'email' => 'admin@multi-auth.test',
            'password' => bcrypt(12345678),
        ]);

    }
}
