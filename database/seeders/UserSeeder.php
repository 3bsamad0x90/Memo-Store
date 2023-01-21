<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'mohamed abdelsamad',
            'email' => 'mohamed@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '01013014910',
            'slug' => 'mohamed'
        ]);
    }
}
