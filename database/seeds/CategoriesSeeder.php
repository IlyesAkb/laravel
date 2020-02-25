<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{

    public $data = [
        [
            'name' => 'Хорошие новорсти'
        ],
        [
            'name' => 'Плохие новости'
        ],
        [
            'name' => 'Спорт'
        ],
        [
            'name' => 'Политика'
        ],
        [
            'name' => 'Медицина(коронавирус)'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->data);
    }
}
