<?php

use Illuminate\Database\Seeder;

class ResourcesSeeder extends Seeder
{
    private function getData() {
        $resources = [
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/auto_racing.rss',
            'https://news.yandex.ru/army.rss',
//            'https://news.yandex.ru/world.rss',
            'https://news.yandex.ru/gadgets.rss',
            'https://news.yandex.ru/index.rss',
            'https://news.yandex.ru/martial_arts.rss',
            'https://news.yandex.ru/communal.rss',
            'https://news.yandex.ru/health.rss',
            'https://news.yandex.ru/games.rss',
            'https://news.yandex.ru/internet.rss',
            'https://news.yandex.ru/cyber_sport.rss',
            'https://news.yandex.ru/movies.rss',
            'https://news.yandex.ru/cosmos.rss',
//            'https://news.yandex.ru/culture.rss',
            'https://news.yandex.ru/music.rss',
            'https://news.yandex.ru/science.rss',
            'https://news.yandex.ru/realty.rss',
            'https://news.yandex.ru/society.rss',
            'https://news.yandex.ru/politics.rss',
            'https://news.yandex.ru/incident.rss',
            'https://news.yandex.ru/travels.rss',
            'https://news.yandex.ru/sport.rss',
            'https://news.yandex.ru/theaters.rss',
            'https://news.yandex.ru/computers.rss',
            'https://news.yandex.ru/vehicle.rss',
            'https://news.yandex.ru/finances.rss',
            'https://news.yandex.ru/showbusiness.rss',
            'https://news.yandex.ru/ecology.rss',
            'https://news.yandex.ru/business.rss',
            'https://news.yandex.ru/energy.rss'
        ];
        $data = [];
        foreach($resources as $link) {
            $data[] = [
                'link' => $link,
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
        DB::table('resources')->insert($this->getData());
    }
}
