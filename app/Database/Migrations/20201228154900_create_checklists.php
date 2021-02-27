<?php namespace App\Database\Migrations;

class CreateChecklists extends \CodeIgniter\Database\Migration {

    private $table = 'checklists';

    public function up()
    {
      $this->forge->addField([
        'id' => [
          'type'  => 'BIGINT',
          'constraint'  => 5,
          'unsigned'  => TRUE,
          'auto_increment' => TRUE
        ],
        'user_id' => [
          'type' => 'BIGINT',
          'comment' => ''
        ],
        'patient_id' => [
          'type' => 'BIGINT',
          'comment' => ''
        ],
        'visit_id' => [
          'type' => 'BIGINT',
          'comment' => ''
        ],
        'temperature' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'department' => [
        'type'           => 'VARCHAR',
        'constraint'        => '100',
        ],
        'temp_type' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'one_a' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'one_a_date' => [
        'type'           => 'DATE',
        ],
        'one_b' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'one_b_date' => [
        'type'           => 'DATE',
        ],
        'one_c' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'one_c_date' => [
        'type'           => 'DATE',
        ],
        'one_d' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'one_d_date' => [
        'type'           => 'DATE',
        ],
        'one_e' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'one_e_date' => [
        'type'           => 'DATE',
        ],
        'one_f' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'one_f_date' => [
        'type'           => 'DATE',
        ],
        'two_travel' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'two_travel_address' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'three_contact_one' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'three_contact_two' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'three_contact_three' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'three_contact_four' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'four_existing' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'four_existing_specify' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'five_pregnant' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'status_defined' => [
        'type'           => 'VARCHAR',
        'constraint'        => '25',
        ],
        'status' => [
          'type' => 'CHAR',
          'constraint' => '1',
          'default' => 'a'
        ],
        'created_at' => [
          'type' => 'DATETIME',
          'comment' => 'Date of creation',
        ],
        'updated_at' => [
          'type' => 'DATETIME',
          'null' => true,
          'default' => null,
          'comment' => 'Date last updated',
        ],
        'deleted_at' => [
          'type' => 'DATETIME',
          'null' => true,
          'default' => null,
          'comment' => 'Date of soft deletion',
        ]
      ]);

      $this->forge->addKey('id', TRUE);
      $this->forge->createTable($this->table);

    }

    public function down()
    {
      $db      = \Config\Database::connect();
      $builder = $db->table($this->table);
      $db->simpleQuery('DELETE FROM '.$this->table);
      $this->forge->dropTable($this->table);
    }
}
