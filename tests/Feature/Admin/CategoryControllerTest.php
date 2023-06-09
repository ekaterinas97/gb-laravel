<?php

namespace Tests\Feature\Admin;

use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_categories_successful_page(): void
    {
        $response = $this->get(route('admin.categories.index'));

        $response->assertStatus(200);
    }
    public function test_categories_create_successful_page(): void
    {
        $response = $this->get(route('admin.categories.create'));

        $response->assertViewIs('admin.categories.create')->assertStatus(200);
    }
    public function test_categories_create_return_json_page(): void
    {
        $faker = Factory::create();
        $title = $faker->jobTitle();
        $text = $faker->text(100);
        $data = [
            'title' => $title,
            'description' => $text
        ];
        $response = $this->post(route('admin.categories.store'), $data);

        $response->assertJson($data)->assertStatus(200);
    }
}
