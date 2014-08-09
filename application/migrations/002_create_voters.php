<?php
class Migration_Create_Voters extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'ID' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'firstname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'middlename' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'lastname' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'age' => array(
				'type' => 'INT',
				'constraint' => '10',
			),
			'gender' => array(
				'type' => 'VARCHAR',
				'constraint' => '10',
			),
			'address' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'occupation' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('eg_voters');
	}

	public function down()
	{
		$this->dbforge->drop_table('eg_voters');
	}
}