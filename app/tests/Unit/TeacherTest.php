<?php

namespace Tests\Unit;

use Tests\TestCase;

class TeacherTest extends TestCase
{
    /** @var array */
    private array $data = [
        "name" => "Wesley Flôres",
        "email" => "wesleyfloresterres@gmail.com",
        "address" => "Rua José Leopoldo Troes, 57"
    ];

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
        $this->post(route('teachers.store'), $this->data)
            ->assertStatus(201)
            ->assertJson($this->data);
    }

    public function test_can_show_an_teacher()
    {
        $data = $this->post(route('teachers.store'), $this->data);

        $id = $data->getData()->id;

        $this->assertEquals((array) $data->getData(), $this->get(route('teachers.show', $id))->json());
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
