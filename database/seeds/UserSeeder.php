<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       App\User::create([
        'name' => 'Rafiqul Islam',
        'email' => 'rafiqul.pust.cse@gmail.com',
        'password' => bcrypt('12345678'),

       ]);
    }
}
