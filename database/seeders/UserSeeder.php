<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Fulano de Tal',
            'cpf' => '12345678910',
            'email' => 'fulano@email.com',
            'birthday' => '1990-01-01',
            'nationality' => 'Brasil',
            'password' => Hash::make('1234'),
        ]);

        DB::table('phone_number')->insert(
            [
                [
                    'id' => 1,
                    'number' => '7654321',
                    'cpf' => '12345678910',
                    'user_id' => 1
                ],
                [
                    'id' => 2,
                    'number' => '741963',
                    'cpf' => '12345678910',
                    'user_id' => 1
                ]
            ]
        );
    }
}
