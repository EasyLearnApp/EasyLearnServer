<?php

namespace Tests\Unit;

use Tests\TestCase;

class StudentTest extends TestCase
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

    public function test_can_create_an_student()
    {
        $this->post(route('students.store'), $this->data)
            ->assertStatus(201)
            ->assertJson($this->data);
    }

    public function test_can_show_an_teacher()
    {
        $data = $this->post(route('students.store'), $this->data);

        $id = $data->getData()->id;

        $this->assertEquals((array) $data->getData(), $this->get(route('students.show', $id))->json());
    }

    public function test_can_update_an_student()
    {
        $data_updated = [
            "name" => "Wesley Flôres Terres",
            "email" => "wesleyterres@gmail.com",
            "address" => "Rua José Leopoldo Troes, 42"
        ];

        $data = $this->post(route('students.store'), $this->data);

        $id = $data->getData()->id;

        $info = $this->put(route('students.update', $id), $data_updated);

        $this->assertEquals($info->getData()->name, ((object) $data_updated)->name);
        $this->assertEquals($info->getData()->email, ((object) $data_updated)->email);
        $this->assertEquals($info->getData()->address, ((object) $data_updated)->address);
    }

    public function test_can_delete_an_student()
    {
        $data = $this->post(route('students.store'), $this->data);

        $id = $data->getData()->id;

        $this->delete(route('students.destroy', $id))->assertStatus(200);

        $data = $this->get(route('students.show', $id))->assertStatus(200)->json();

        $this->assertEmpty($data);
    }

    /**
     * Clean up the testing environment before the next test.
     *
     * @return void
     */
    public function tearDown(): void
    {
        \Illuminate\Support\Facades\DB::table('students')->truncate();
    }
}
