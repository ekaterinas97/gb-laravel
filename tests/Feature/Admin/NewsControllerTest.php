<?php

namespace Tests\Feature\Admin;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_news_successful_page(): void
    {
        $response = $this->get(route('admin.news.index'));

        $response->assertStatus(200);
    }
    public function test_news_create_return_json_page(): void
    {
        $faker = Factory::create();
        $title = $faker->jobTitle();
        $text = $faker->text(100);
        $data = [
            'title' => $title,
            'description' => $text
        ];
        $response = $this->post(route('admin.news.store'), $data);

        $response->assertJson($data)->assertStatus(200);
    }
}
