<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Projects extends CI_Migration {

	public function up()
	{
		$this->dbforge->add_field(array(
			'ID' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'usersID' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'project_title' => array(
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'project_tags' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'project_status' => array(
				'type' => 'VARCHAR',
				'constraint' => '128',
			),
			'project_expiration' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			),
			'bid_totals' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');
	}

	public function down()
	{
		$this->dbforge->drop_table('blog');
	}
	
}