<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');

        \App\User::create([
            'name' => 'Pasho Toska',
            'email' => 'toskapasho@gmail.com',
            'password' => $password,
        ]);
    }
}
