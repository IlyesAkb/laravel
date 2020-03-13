<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersSeeder extends Seeder
{

    public function getData() {
        $faker = Factory::create('ru_RU');
        $data = [];

        $admin = [
            'name' => 'Admin',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('123'),
            'is_admin' => true,
            'created_at' => now(),
            'updated_at' => now()
        ];

        $data[] = $admin;

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($faker->password()),
                'is_admin' => false,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return $data;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert($this->getData());
    }
}
