<?php
namespace Modules\Visits\Controllers;

// use Modules\Visits\Models\RolesModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\Visits\Models\ChecklistModel;
use Modules\Guests\Models\GuestsModel;
use Modules\Visits\Models\VisitsModel;
use App\Controllers\BaseController;

class Checklist extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function delete_role($id)
    {
    	$this->hasPermissionRedirect('delete-role');

    	$model = new RolesModel();
    	$model->deleteRole($id);
    }

		public function capture_checklist($id){
			$model = new ChecklistModel();
			$visit_model = new VisitsModel();
			$patient_model = new GuestsModel();
			$val_array = [
				'patient_id' => $id,
			];
			$data['visit_id'] = $visit_model->getVisitId($id);
			$data['checklist_recorded'] = $model->isChecklistCaptured($data['visit_id']);

			$data['checklist_counts'] = $model->getChecklistCount($id);
			$data['visit_counts'] = $model->getVisitsCount($id);
			$data['assess_counts'] = $model->getAssessCount($id);
			$data['profile'] = $patient_model->get(['id' => $id]);
			if($_POST){
				$_POST['user_id'] = $_SESSION['uid'];
				$_POST['patient_id'] = $val_array;
				if($this->validate('checklists')){
					if($_POST['temperature'] >= 37.3 || $_POST['temperature'] <= 36){
						$defined = 'd';
					}else{
						$defined = 'u';
					}
					$_POST['status_defined'] = $defined;
					if($model->add($_POST)){
						$_SESSION['success'] = 'You have Successfuly added a checklist!';
						$this->session->markAsFlashdata('success');
						return redirect()->to(base_url('guests/show/' . $id));
					}
					else{
						$_SESSION['error'] = 'You have an error in adding a record!';
						$this->session->markAsFlashdata('error');
						return redirect()->to( base_url('checklists/capture/' . $id));
					}
				}
				else {
					$data['errors'] = \Config\Services::validation()->getErrors();
		      $data['viewName'] = 'Modules\Visits\Views\checklists\frmChecklist';
		      echo view('App\Views\theme\index', $data);
				}
			}
			else{
				$data['viewName'] = 'Modules\Visits\Views\checklists\frmChecklist';
				echo view('App\Views\theme\index', $data);
			}
		}

		public function scan_checklist($id){
			$model = new ChecklistModel();
			$visit_model = new VisitsModel();
			$patient_model = new GuestsModel();
			$val_array = [
				'patient_id' => $id,
			];
			$data['visit_id'] = $visit_model->getVisitId($id);
			$data['checklist_recorded'] = $model->isChecklistCaptured($data['visit_id']);
			$data['checklist_counts'] = $model->getChecklistCount($id);
			$data['visit_counts'] = $model->getVisitsCount($id);
			$data['assess_counts'] = $model->getAssessCount($id);
			$data['profile'] = $patient_model->get(['id' => $id]);
			if($_POST){
				$_POST['user_id'] = $_SESSION['uid'];
				$_POST['patient_id'] = $val_array;
					if($_POST['temperature'] >= 37.3 || $_POST['temperature'] <= 36){
						$defined = 'd';
					}else{
						$defined = 'u';
					}
					$_POST['status_defined'] = $defined;
					if($model->add($_POST)){
						$_SESSION['success'] = 'You have Successfuly added a checklist!';
						$this->session->markAsFlashdata('success');
						return redirect()->to(base_url('guests/show/' . $id));
					}
					else{
						$_SESSION['error'] = 'You have an error in adding a record!';
						$this->session->markAsFlashdata('error');
						return redirect()->to( base_url('checklists/scan/' . $id));
					}
			}
			else{
				$data['viewName'] = 'Modules\Visits\Views\checklists\frmScanChecklist';
				echo view('App\Views\theme\index', $data);
			}
		}

		public function edit_checklists($id, $pId)
		{
			$this->hasPermissionRedirect('edit-checklists');
	  	helper(['form', 'url']);
	  	$model = new ChecklistModel();
			$visit_model = new VisitsModel();
			$patient_model = new GuestsModel();
	  	$data['rec'] = $model->find($id);
			$data['visit_id'] = $visit_model->getVisitId($pId);
			$data['checklist_recorded'] = $model->isChecklistCaptured($data['visit_id']);
			$data['profile'] = $patient_model->get(['id' => $pId]);

			$data['checklist_counts'] = $model->getChecklistCount($id);
			$data['visit_counts'] = $model->getVisitsCount($id);
			$data['assess_counts'] = $model->getAssessCount($id);

	  	$permissions_model = new PermissionsModel();

	  	$data['permissions'] = $this->permissions;

			if(!empty($_POST))
	  	{
						if($model->edit($_POST, $id))
						{
							//$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
							$_SESSION['success'] = 'The Patient has been proceeded to the Assessment.';
							$this->session->markAsFlashdata('success');
							return redirect()->to(base_url('visits/' . $pId));
						}
						else
						{
							$_SESSION['error'] = 'You an error in updating a record';
							$this->session->markAsFlashdata('error');
							return redirect()->to( base_url('visits/' . $pId));
						}
	  	}
	  	else
	  	{
				 $data['errors'] = \Config\Services::validation()->getErrors();
	        $data['viewName'] = 'Modules\Visits\Views\checklists\frmChecklistAssessment';
	        echo view('App\Views\theme\index', $data);
	  	}
		}
}
