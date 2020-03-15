<?php


namespace App\Services;
use App\Category;
use App\News;
use Orchestra\Parser\Xml\Facade as XmlParser;



class XMLParserService
{
    public function saveNews($link) {
        $xml = XmlParser::load($link);
        $data = $xml->parse([
            'category' => ['uses' => 'channel.title'],
            'items' => ['uses' => 'channel.item[title,description,pubDate]']
        ]);

        $category = Category::query()
            ->where('name', $data['category'])
            ->first();
        if (!$category) {
            $category = new Category(['name' => $data['category']]);
            $category->save();
        }

        $news = [];
        foreach ($data['items'] as $item) {
            $news[] = [
                'title' => $item['title'],
                'category_id' => $category->id,
                'body' => $item['description'],
            ];
        }
        News::query()->insert($news);
    }
}
