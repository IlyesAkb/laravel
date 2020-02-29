<?php

use Illuminate\Database\Seeder;
use \Faker\Factory;

class NewsSeeder extends Seeder
{

    private function getData() {
        $faker = Factory::create('ru_RU');
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->realText(rand(20, 50)),
                'body' => $faker->realText(rand(1000, 2000)),
                'category_id' => rand(1, 5),
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
        DB::table('news')->insert($this->getData());
    }
}
