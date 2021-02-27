<?php namespace App\Database\Migrations;

class CreateDashboardPermissions extends \CodeIgniter\Database\Migration {

    private $table = 'permissions';

    public function up()
    {
      $data = [
        [
            'function_name' => 'list of dashboard',
            'function_description' => 'list of dashboard',
            'slugs' => 'list-of-dashboard',
            'name_on_class' => 'index',
            'page_title' => 'list_of_dashboard',
            'module_id' => '2',
            'link_icon' => '<i class="fas fa-tachmeter-alt"></i>',
            'order' => '1',
            'table_name' => 'dashboard',
            'func_action' => 'link',
            'func_type' => 1,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'show dashboard',
            'function_description' => 'show dashboard',
            'slugs' => 'show-dashboard',
            'name_on_class' => 'show_dashboard',
            'page_title' => 'dashboard',
            'module_id' => '2',
            'link_icon' => '<i class="fas fa-tachmeter-alt"></i>',
            'order' => '2',
            'table_name' => 'dashboard',
            'func_action' => 'show',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'add dashboard',
            'function_description' => 'add dashboard',
            'slugs' => 'add-dashboard',
            'name_on_class' => 'add_dashboard',
            'page_title' => 'dashboard',
            'module_id' => '2',
            'link_icon' => '<i class="fas fa-tachmeter-alt"></i>',
            'order' => '3',
            'table_name' => 'dashboard',
            'func_action' => 'add',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'function_name' => 'edit dashboard',
            'function_description' => 'edit dashboard',
            'slugs' => 'edit-dashboard',
            'name_on_class' => 'edit_dashboard',
            'page_title' => 'dashboard',
            'module_id' => '2',
            'link_icon' => '<i class="fas fa-tachmeter-alt"></i>',
            'order' => '4',
            'table_name' => 'dashboard',
            'func_action' => 'edit',
            'func_type' => 3,
            'allowed_roles' => "[1]",
            'status' => 'a',
            'created_at' => date('Y-m-d H:i:s')
        ],
      ];

      $db      = \Config\Database::connect();
      $builder = $db->table($this->table);
      $builder->insertBatch($data);
    }

    public function down(){

    }
}
