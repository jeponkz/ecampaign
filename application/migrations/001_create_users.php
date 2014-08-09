<?php
class Migration_Create_Users extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'ID' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'username' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'role' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('eg_users');
	}

	public function down()
	{
		$this->dbforge->drop_table('eg_users');
	}
}