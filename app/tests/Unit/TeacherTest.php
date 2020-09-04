<?php

namespace Tests\Unit;

use Tests\TestCase;

class TeacherTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_create_an_teacher()
    {
        $data = [
            "name" => "Wesley Flôres",
            "email" => "wesleyfloresterres@gmail.com",
            "address" => "Rua José Leopoldo Troes, 57"
        ];

        $this->post(route('teachers.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    /**
     * Clean up the testing environment before the next test.
     *
     * @return void
     */
    public function tearDown(): void
    {
        \Illuminate\Support\Facades\DB::table('teachers')->truncate();
    }
}
