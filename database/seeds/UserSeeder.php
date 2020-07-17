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
        $users = [
            [
                'name'           => 'Administrator',
                'email'          => 'admin@minart.com',
                'password'       => Hash::make('p3pp3rt3ch'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
