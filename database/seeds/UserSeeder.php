<?php

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
        App\User::truncate();

        App\User::create([
            'name'     => 'Jordan Crocker',
            'email'    => 'jordan@jcrocker.uk',
            'password' => bcrypt('abcd1234'),
        ]);
    }
}
