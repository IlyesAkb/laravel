<?php

namespace Tests\Browser;

use App\News;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddNewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     * @throws \Throwable
     */
    public function testCreateNews()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                ->type('title', 'Заголовок новости')
                ->type('body', 'Подробное описание новости')
                ->press('Добавить')
                ->assertPathIs('/admin/news')
                ->assertSee('Новость успешно добавлена');
        });
    }

    public function testCreateNewsValidation()
    {
        $this->browse(function (Browser $browser) {
           $browser->visit('/admin/news/create')
               ->select('category_id', '12345')
               ->press('Добавить')
               ->assertSee('Поле Заголовок обязательно для заполнения.')
               ->assertSee('Поле Текст обязательно для заполнения.')
               ->assertSee('Выбранное значение для Категория некорректно.')
               ->type('title', '123')
               ->type('body', '123')
               ->press('Добавить')
               ->assertSee('Количество символов в поле Заголовок должно быть не менее 10.')
               ->assertDontSee('Выбранное значение для Категория некорректно.')
               ->assertDontSee('Поле Текст обязательно для заполнения.');
        });
    }

    public function testEditNews() {
        $this->browse(function (Browser $browser) {
            $news = News::query()->find(2);
            $browser->visit('admin/news/2/edit')
                ->assertInputValue('title', $news->title)
                ->assertInputValue('body', $news->body)
                ->assertSelected('category_id', $news->category_id);
        });
    }
}
