<?php

namespace Tests\Unit;

use Tests\TestCase;

class GradeTest extends TestCase
{
    /** @var array */
    private array $data = [
        "name" => "Mathematics"
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

    public function test_can_create_an_grade()
    {
        $this->post(route('grades.store'), $this->data)
            ->assertStatus(201)
            ->assertJson($this->data);
    }

    public function test_can_show_an_grade()
    {
        $data = $this->post(route('grades.store'), $this->data);

        $id = $data->getData()->id;

        $this->assertEquals((array)$data->getData(), $this->get(route('grades.show', $id))->json());
    }

    public function test_can_update_an_grade()
    {
        $data_updated = [
            "name" => "Biology"
        ];

        $data = $this->post(route('grades.store'), $this->data);

        $id = $data->getData()->id;

        $info = $this->put(route('grades.update', $id), $data_updated);

        $this->assertEquals($info->getData()->name, ((object)$data_updated)->name);
    }

    public function test_can_delete_an_grade()
    {
        $data = $this->post(route('grades.store'), $this->data);

        $id = $data->getData()->id;

        $this->delete(route('grades.destroy', $id))->assertStatus(200);

        $data = $this->get(route('grades.show', $id))->assertStatus(200)->json();

        $this->assertEmpty($data);
    }

    /**
     * Clean up the testing environment before the next test.
     *
     * @return void
     */
    public function tearDown(): void
    {
        \Illuminate\Support\Facades\DB::table('grades')->truncate();
    }
}
