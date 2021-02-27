<?php
namespace Modules\SystemSettings\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\SystemSettings\Models\AllergyModel;
use Modules\SystemSettings\Models\AllergyTypesModel;
use App\Controllers\BaseController;

class Allergy extends BaseController
{

	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);

	}

  public function index()
  {
  	$this->hasPermissionRedirect('list-allergy');
		$model = new AllergyModel();

		// die();
    $data['allergies'] = $model->get(['allergies.status'=> 'a'],[
			'allergy_types' => ['name' => 'type']
		],[
			'allergy_types' => ['allergies.allergy_type_id' => 'allergy_types.id']
		]);
    $data['function_title'] = "Allergys List";
    $data['viewName'] = 'Modules\SystemSettings\Views\allergies\index';
    echo view('App\Views\theme\index', $data);
  }

  public function add()
  {
  	$this->hasPermissionRedirect('add-allergy');
		$model = new AllergyModel();
		$type_model = new AllergyTypesModel();
		$data['allergyTypes'] = $type_model->get(['status' => 'a']);
		if (!empty($_POST)) {
			if ($this->validate('allergy')) {
				if ($model->add($_POST)) {
					$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
					return redirect()->to(base_url('allergies'));
				}
				else{
					$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
					return redirect()->to(base_url('allergies'));
				}
			}else{
				$data['errors'] = \Config\Services::validation()->getErrors();
				$data['function_title'] = "Adding Allergy";
				$data['viewName'] = 'Modules\SystemSettings\Views\allergies\frmAllergy';
				echo view('App\Views\theme\index', $data);
			}
		}
		else{
			// die();
			$data['function_title'] = "Adding Allergy";
			$data['viewName'] = 'Modules\SystemSettings\Views\allergies\frmAllergy';
			echo view('App\Views\theme\index', $data);
		}
  }

	function edit($id){
		$this->hasPermissionRedirect('edit-allergy');
		$model = new AllergyModel();
		$data['rec'] = $model->find($id);
		$type_model = new AllergyTypesModel();
		$data['allergyTypes'] = $type_model->get(['status' => 'a']);
		if (!empty($_POST)) {
			if ($this->validate('allergy')) {
				if ($model->edit($_POST, $id)) {
					$_SESSION['success'] = 'You have edited a record';
					$this->session->markAsFlashdata('success');
					return redirect()->to(base_url('allergies'));
				}
				else{
					$_SESSION['error'] = 'You have an error in editing a record';
					$this->session->markAsFlashdata('error');
					return redirect()->to(base_url('allergies'));
				}
			}else{
				$data['errors'] = \Config\Services::validation()->getErrors();
				$data['function_title'] = "Editing Allergy";
				$data['viewName'] = 'Modules\SystemSettings\Views\allergies\frmAllergy';
				echo view('App\Views\theme\index', $data);
			}
		}
		else{
			// die();
			$data['function_title'] = "Editing Allergy";
			$data['viewName'] = 'Modules\SystemSettings\Views\allergies\frmAllergy';
			echo view('App\Views\theme\index', $data);
		}
	}

	function delete($id){
		$this->hasPermissionRedirect('delete-allergy');
		$model = new AllergyModel();
		if($model->softDelete($id)){
			$_SESSION['success'] = 'You have successfuly Deleted a record';
			$this->session->markAsFlashdata('success');
			return redirect()->to(base_url('allergies'));
		}else{
			$_SESSION['error'] = 'You have an error in deleting record';
			$this->session->markAsFlashdata('error');
			return redirect()->to(base_url('allergies'));
		}
	}

}
