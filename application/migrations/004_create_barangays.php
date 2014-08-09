<?php
class Migration_Create_Barangays extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'ID' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'district' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'population' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'land_area' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'location_map' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'pp_barangay_capt' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'pp_reg_voters' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'pp_turn_out' => array(
				'type' => 'VARCHAR',
				'constraint' => '150',
			),
			'city_id' => array(
				'type' => 'INT',
				'constraint' => '11',
			)
		));
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('eg_barangays');
	}

	public function down()
	{
		$this->dbforge->drop_table('eg_barangays');
	}
}