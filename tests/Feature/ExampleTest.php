<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewHas('news');

    }

    public function testNotFound()
    {
        $response = $this->get('/supeduper');
        $response->assertNotFound();
    }

    public function testCategories()
    {
        $response = $this->get(route('categories.all'));
        $response->assertViewHas('categories');
    }
}
