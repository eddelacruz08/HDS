<?php
namespace Modules\Dashboard\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\Dashboard\Models\DashboardModel;
use Modules\Visits\Models\ChecklistModel;
use Modules\Guests\Models\GuestsModel;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{

	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);

	}

  public function index()
  {
  	// $this->hasPermissionRedirect('list-of-dashboard');

    $data['function_title'] = "Dashboard";
		$model = new GuestsModel($data_year);
		$model_checklist = new ChecklistModel();
		// $data['all_items'] = $model->get(['status'=> 'a']);

		$data['guests'] = $model->get(['status'=> 'a']);
		$data['patient_total'] = $model->getPatientTotal();
		/////////// student //////////////////////////////
		$data['student_total'] = $model->getStudentTotal();
		$data['student_male'] = $model->getStudentMale();
		$data['student_female'] = $model->getStudentFemale();
		/////////// outsider //////////////////////////////
		$data['faculty_total'] = $model->getFacultyTotal();
		$data['faculty_male'] = $model->getFacultyMale();
		$data['faculty_female'] = $model->getFacultyFemale();
		/////////// faculty //////////////////////////////
		$data['employee_total'] = $model->getEmployeeTotal();
		$data['employee_male'] = $model->getEmployeeMale();
		$data['employee_female'] = $model->getEmployeeFemale();
		/////////// outsider //////////////////////////////
		$data['outsider_total'] = $model->getOutsiderTotal();
		$data['outsider_male'] = $model->getOutsiderMale();
		$data['outsider_female'] = $model->getOutsiderFemale();

		// /////////// patient defined //////////////////////////////
		$data['guest_defined'] = $model->getGuestDefined();
		$data['faculty_defined'] = $model->getFacultyDefined();
		$data['employee_defined'] = $model->getEmployeeDefined();
		$data['outsider_defined'] = $model->getOutsiderDefined();

		// /////////// patient defined List//////////////////////////////
		$data['guest_defined_list'] = $model->getGuestDefinedList();

		// /////////// patient assess List//////////////////////////////
		$data['patient_assess_list'] = $model->getPatientAssessList();
		////////////////////// line graph /////////////////////////
		$data['student1'] = $model->getStudent1();
		$data['faculty1'] = $model->getFaculty1();
		$data['employee1'] = $model->getEmployee1();
		$data['outsider1'] = $model->getOutsider1();
		$data['year_list'] = $model->orderBy('created_at' , 'desc')->get(['status'=> 'a']);

		// $data['checklist'] = $model_checklist->get(['checklists.id' => 'patients.id', 'checklists.status' => 'a'],
		// 		  ['checklists' => ['created_at' => 'visit_date']]);

		$data['viewName'] = 'Modules\Dashboard\Views\dashboard\index';
		echo view('App\Views\theme\index', $data);
  }

	public function print_total_student($dateFilter, $femaleMale){
		$model = new DashboardModel();
		// $data['student_pdf'] = $model->getStudentTotalPdf($dateFilter);
		$data['student_pdf'] = $model->getStudentTotalPdf(['user_type' => $femaleMale, 'created_at' => $femaleMale]);
		$dompdf = new \Dompdf\Dompdf();
		$html = '
							<h1>Ako to ha!</h1>
		';
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream();
	}

	public function edit_dashboard(){
		$data['function_title'] = "Dashboard";
		$model = new GuestsModel($data_year);
		$model_checklist = new ChecklistModel();
		// $data['all_items'] = $model->get(['status'=> 'a']);

		$data['guests'] = $model->get(['status'=> 'a']);
		$data['patient_total'] = $model->getPatientTotal();
		/////////// student //////////////////////////////
		$data['student_total'] = $model->getStudentTotal();
		$data['student_male'] = $model->getStudentMale();
		$data['student_female'] = $model->getStudentFemale();
		/////////// outsider //////////////////////////////
		$data['faculty_total'] = $model->getFacultyTotal();
		$data['faculty_male'] = $model->getFacultyMale();
		$data['faculty_female'] = $model->getFacultyFemale();
		/////////// faculty //////////////////////////////
		$data['employee_total'] = $model->getEmployeeTotal();
		$data['employee_male'] = $model->getEmployeeMale();
		$data['employee_female'] = $model->getEmployeeFemale();
		/////////// outsider //////////////////////////////
		$data['outsider_total'] = $model->getOutsiderTotal();
		$data['outsider_male'] = $model->getOutsiderMale();
		$data['outsider_female'] = $model->getOutsiderFemale();

		// /////////// patient defined //////////////////////////////
		$data['guest_defined'] = $model->getGuestDefined();
		$data['faculty_defined'] = $model->getFacultyDefined();
		$data['employee_defined'] = $model->getEmployeeDefined();
		$data['outsider_defined'] = $model->getOutsiderDefined();

		// /////////// patient defined List//////////////////////////////
		$data['guest_defined_list'] = $model->getGuestDefinedList();

		// /////////// patient assess List//////////////////////////////
		$data['patient_assess_list'] = $model->getPatientAssessList();
		////////////////////// line graph /////////////////////////
		$data['student1'] = $model->getStudent1();
		$data['faculty1'] = $model->getFaculty1();
		$data['employee1'] = $model->getEmployee1();
		$data['outsider1'] = $model->getOutsider1();
		$data['year_list'] = $model->orderBy('created_at' , 'desc')->get(['status'=> 'a']);

		$data['viewName'] = 'Modules\Dashboard\Views\dashboard\indexPrint';
		echo view('App\Views\theme\index2', $data);
	}

}
