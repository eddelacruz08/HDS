<?php
namespace Modules\Visits\Controllers;

// use Modules\Visits\Models\RolesModel;
use Modules\Visits\Models\VisitsModel;
use Modules\UserManagement\Models\PermissionsModel;
use App\Controllers\BaseController;
use \Mpdf\Mpdf;

class Visits extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();

		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index()
    {
    	$this->hasPermissionRedirect('list-of-active-visits');
    	$model = new VisitsModel();
			// die('here');

      $data['visits'] = $model->get(
				['guests.status'=> 'a', 'visits.updated_at' => null], [
					'guests' => [
						'full_name' => 'full_name',
						'gender' => 'gender',
						'user_type' => 'user_type'
					],
				], [
					'guests' => [
						'guests.id' => 'visits.patient_id'
					]
				]
			);

      $data['function_title'] = "Visits List";
      $data['viewName'] = 'Modules\Visits\Views\visits\index';
      echo view('App\Views\theme\index', $data);
    }

		public function print_attendance(){
		if(!empty($_POST)){
				// die($_POST['date']);
				$model = new VisitsModel();
					if($_POST['date'] == true){
						$date = date('y-m-d', strtotime($_POST['date']));
						$data['visit_attendance'] = $model->orderBy('created_at' , 'desc')->get(
							['guests.status'=> 'a', 'visits.date' => $date], [
								'guests' => [
									'full_name' => 'full_name',
									'gender' => 'gender',
									'user_type' => 'user_type',
								],], ['guests' => ['guests.id' => 'visits.patient_id'
							],], ['visits' => [
							'created_at' => 'created_at',
							'updated_at' => 'updated_at']]);
								$html = '<html>
													<body>
													<div style="position: absolute; left:0; right: 0; top: 0; bottom: 0;">
															<img src="http://localhost/HDS/public/img/PUPLogo.png"
																	 style="width: 100px; height: 100px; margin-top: 75; margin-left: 60;" />
													</div>
													<br>
														<table>
															<thead>
																<tr>
																	<td style="font-size: 20px; margin-top: 5px; margin-bottom: 0;" width="20%"></td>
																	<td style="font-size: 18px; margin-top: 5px; margin-bottom: 0;" width="90%"><p>POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</p></td>
																</tr>
																<tr>
																	<td width="20%"></td>
																	<td style="font-size: 18px; margin-top: 5px; margin-bottom: 0;" width="80%"><p>TAGUIG BRANCH</p></td>
																</tr>
																<tr>
																	<td width="20%"></td>
																	<td style="font-size: 18px; margin-top: 5px; margin-bottom: 0;" width="80%"><p>MEDICAL SERVICES DEPARTMENT</p></td>
																</tr>
															</thead>
														</table>
														<h3 align="center" style="margin-bottom: 0;">HEALTH DECLARATION ATTENDANCE LIST</h3>
														<h4 align="center">'.date('F d, Y', strtotime($_POST['date'])).'</h4>
														<hr>';


										$html .= '
														<table>
															<tbody align="center">
																<tr>
																		<th style="width: 30px; border: 0px solid dark;">Id</th>
																		<th style="width: 250px; border: 0px solid dark;">Full Name</th>
																		<th style="width: 100px; border: 0px solid dark;">Guest Type</th>
																		<th style="width: 100px; border: 0px solid dark;">Gender</th>
																		<th style="width: 200px; border: 0px solid dark;">Time in & Time out</th>
																</tr>
															</tbody>
														</table>';

														$cnt = 1;
													foreach($data['visit_attendance'] as $guest){

														if($guest['user_type'] == 's'){
															$user_type = 'Student';
														}
														elseif($guest['user_type'] == 'f'){
															$user_type = 'Faculty';
														}
														elseif($guest['user_type'] == 'e'){
															$user_type = 'Employee';
														}
														elseif($guest['user_type'] == 'o'){
															$user_type = 'Outsider';
														}else{
															$user_type = 'Nothing';
														}
														$full_name = $guest['full_name'];
														$gender = $guest['gender'] == 'm' ? 'Male': 'Female';
														$created_at = $guest['created_at'];
														if($guest['updated_at'] == null){
															$updated_at = 'Undone Session.';
														}else{
															$updated_at = date('h:i a', strtotime($guest['updated_at']));
														}
								 $html .= '
											<table>
												<tbody>
													<tr>
														<td align="center" style="width: 30px; border: 0px solid dark;">'.$cnt++.'</td>
														<td align="center" style="width: 250px; border: 0px solid dark;">'. ucwords($full_name).'</td>
														<td align="center" style="width: 100px; border: 0px solid dark;">'. $user_type.'</td>
														<td align="center" style="width: 100px; border: 0px solid dark;">'. ucfirst($gender) .'</td>
														<td align="center" style="width: 200px; border: 0px solid dark;">'. date('h:i a', strtotime($created_at)).' - '.$updated_at.'</td>
													</tr>
													</tbody>
												</table>';
											}
							 $html .= '<hr>	</body>
							 </html>';

							 $mpdf = new \Mpdf\Mpdf(['orientation' => 'P']);
							// Write some HTML code:
							$arr = array (
								'odd' => array (
									'L' => array (
										'content' => '',
										'font-size' => 10,
										'font-style' => 'B',
										'font-family' => 'arial',
										'color'=>'#000000'
									),
									'C' => array (
										'content' => '',
										'font-size' => 10,
										'font-style' => 'B',
										'font-family' => 'arial',
										'color'=>'#000000'
									),
									'R' => array (
										'content' => '{PAGENO}/{nbpg}',
										'font-size' => 10,
										'font-style' => 'I',
										'font-family' => 'arial',
										'color'=>'#000000'
									),
									'line' => 1,
								),
								'even' => array ()
							);
							$mpdf->SetHeader($arr);
							$mpdf->SetTitle('Guest Attendance List - '.date('F d, Y'));
							$mpdf->WriteHTML($html);
							return redirect()->to($mpdf->Output('Guest Attendance List-'.date('F d, Y').'.pdf', 'I'))->setContentType('Content/Application');
					}else{
						$this->hasPermissionRedirect('list-of-active-visits');
						$model = new VisitsModel();
						// die('here');

						$data['visits'] = $model->get(
							['guests.status'=> 'a', 'visits.updated_at' => null], [
								'guests' => [
									'full_name' => 'full_name',
									'gender' => 'gender',
									'user_type' => 'user_type'
								],
							], [
								'guests' => [
									'guests.id' => 'visits.patient_id'
								]
							]
						);

						$data['function_title'] = "Visits List";
						$data['viewName'] = 'Modules\Visits\Views\visits\index';
						echo view('App\Views\theme\index', $data);
						// $data['visit_attendance'] = $model->orderBy('created_at' , 'desc')->get(
						// 	['guests.status'=> 'a'], [
						// 	'guests' => [
						// 		'full_name' => 'full_name',
						// 		'gender' => 'gender',
						// 		'user_type' => 'user_type',
						// 		'cellphone_no' => 'cellphone_no'
						// 	],], ['guests' => ['guests.id' => 'visits.patient_id']]);
					}

			}else{
				$this->hasPermissionRedirect('list-of-active-visits');
	    	$model = new VisitsModel();
				// die('here');

	      $data['visits'] = $model->get(
					['guests.status'=> 'a', 'visits.updated_at' => null], [
						'guests' => [
							'full_name' => 'full_name',
							'gender' => 'gender',
							'user_type' => 'user_type'
						],
					], [
						'guests' => [
							'guests.id' => 'visits.patient_id'
						]
					]
				);

				$data['function_title'] = "Visits List";
				$data['viewName'] = 'Modules\Visits\Views\visits\index';
				echo view('App\Views\theme\index', $data);
			}
		}

    public function show_role($id)
	{
		$this->hasPermissionRedirect('show-role-details');
		$data['permissions'] = $this->permissions;

		$model = new RolesModel();

		$data['role'] = $model->getRoleWithCondition(['id' => $id]);

		$data['function_title'] = "Role Details";
        $data['viewName'] = 'Modules\Visits\Views\roles\roleDetails';
        echo view('App\Views\theme\index', $data);
	}

    public function add_role()
    {
    	$this->hasPermissionRedirect('add-role');

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	helper(['form', 'url']);
    	$model = new RolesModel();

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('role'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Role";
		        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		        if($model->addRoles($_POST))
		        {
		        	$role_id = $model->insertID();
		        	$permissions_model->update_permitted_role($role_id, $_POST['function_id']);
		        	$_SESSION['success'] = 'You have added a new record';
					$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('roles'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('roles'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Role";
	        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_role($id)
    {
    	$this->hasPermissionRedirect('edit-role');
    	helper(['form', 'url']);
    	$model = new RolesModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();

    	$data['permissions'] = $this->permissions;

    	if(!empty($_POST))
    	{
	    	if (!$this->validate('role'))
		    {
		    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Edit of Role";
		        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
		    	if($model->editRoles($_POST, $id))
		        {
		        	$permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('roles'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You an errot in updating a record';
					$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('roles'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Editing of Role";
	        $data['viewName'] = 'Modules\Visits\Views\roles\frmRole';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_role($id)
    {
    	$this->hasPermissionRedirect('delete-role');

    	$model = new RolesModel();
    	$model->deleteRole($id);
    }

		public function start_visit($id){
			$model = new VisitsModel();
			$val_array = [
				'patient_id' => $id,
			];
			if($model->add($val_array)){
				$_SESSION['success'] = 'Visit Has Started';
				$this->session->markAsFlashdata('success');
				return redirect()->to(base_url('guests/show/' . $id));
			}
		}

		public function end_visit($vId, $pId){
			$model = new VisitsModel();
			if($model->edit($val_array = [], $vId)){
				$_SESSION['success'] = 'Visit Has Ended';
				$this->session->markAsFlashdata('success');
				return redirect()->to(base_url('guests/show/' . $pId));
			}
		}

}
