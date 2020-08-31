<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class TeacherSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $this->db->table('teachers')->insertBatch($this->data());
    }

    public function data(): array
    {
        return json_decode(file_get_contents(__DIR__ . '/Teachers.JSON'));
    }
}
