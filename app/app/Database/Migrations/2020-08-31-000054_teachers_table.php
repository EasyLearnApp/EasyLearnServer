<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TeachersTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true,
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '32',
			],
			'detail' => [
				'type' => 'TEXT',
				'null' => true,
			],
			'created_at' => ['type' => 'timestamp'],
			'updated_at' => ['type' => 'timestamp'],
			'deleted_at' => ['type' => 'timestamp']
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('teachers');
	}

	public function down()
	{
		$this->forge->dropTable('teachers');
	}
}
