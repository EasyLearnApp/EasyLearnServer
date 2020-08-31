<?php

namespace App\Database\Seeds;

use \CodeIgniter\I18n\Time;

class TeacherSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Andy',
                'address'     => '8733 Apple Street, 10',
                'email'       => "andy@gmail.com",
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'name'        => 'Buddy',
                'address'     => '643 Banana Street, 135',
                'email'       => "buddy@gmail.com",
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ],
            [
                'name'        => 'Anie',
                'address'     => '112 Lemon Street, 121',
                'email'       => "anie@gmail.com",
                'created_at'  => Time::now(),
                'updated_at'  => Time::now()
            ]
        ];

        $this->db->table('teachers')->insertBatch($data);
    }
}
