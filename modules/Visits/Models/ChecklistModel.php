<?php
namespace Modules\Visits\Models;

use App\Models\BaseModel;

class ChecklistModel extends BaseModel
{
    protected $table = 'checklists';

    protected $allowedFields = ['user_id', 'visit_id', 'patient_id', 'temperature','department','temp_type','one_a','one_a_date','one_b','one_b_date',
    'one_c','one_c_date','one_d','one_d_date','one_e','one_e_date','one_f','one_f_date',
    'two_travel','two_travel_address','three_contact_one','three_contact_two','three_contact_three','three_contact_four',
    'four_existing','four_existing_specify','five_pregnant','status_defined','status', 'created_at', 'updated_at', 'deleted_at'];

    public function getAssessCount($id){

      $db = \Config\Database::connect();

      $str = "SELECT COUNT(c.patient_id) AS count_assess, g.* FROM checklists c LEFT JOIN guests g ON c.id = g.id  WHERE c.status = 'a' AND c.status_defined = 'a' AND c.patient_id = $id";
      // $str = 'SELECT COUNT(a.id) AS count_checklist, e.* FROM checklists a LEFT JOIN guests e ON a.id = e.user_id  WHERE a.status = "a" AND a.user_id = '.$id.'';
      // $str = 'SELECT COUNT(c.id) AS count_assess, g.* FROM guests g LEFT JOIN checklists c ON c.user_id = g.id  WHERE g.status = "a" AND c.user_id = '.$id.' AND c.status_defined = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    public function getVisitsCount($id){

      $db = \Config\Database::connect();

      // $str = 'SELECT COUNT(a.id) AS count_checklist, e.* FROM checklists a LEFT JOIN guests e ON a.id = e.user_id  WHERE a.status = "a" AND a.user_id = '.$id.'';
      $str = 'SELECT g.*, COUNT(v.id) AS count_visit FROM guests g LEFT JOIN visits v ON v.patient_id = g.id  WHERE g.status = "a" AND v.patient_id = '.$id.'';

      $query = $db->query($str);

  	  return $query->getResultArray();
    }

    public function getChecklistCount($id){

      $db = \Config\Database::connect();

      $str = "SELECT g.*, COUNT(c.patient_id) AS count_checklist FROM guests g LEFT JOIN checklists c ON g.id = c.patient_id  WHERE c.status = 'a' AND c.patient_id = $id ";

      $query = $db->query($str);

  	  return $query->getResultArray();
    }

    public function getDefinedPatientChecklist($id){

      $db = \Config\Database::connect();

      $str = 'SELECT a.*, e.* FROM checklists a LEFT JOIN guests e ON a.user_id = e.user_id  WHERE a.status = "a" AND c.patient_id = '.$id.' AND status_defined = "d" ORDER BY c.created_at desc';

      $query = $db->query($str);

  	  return $query->getResultArray();
    }

    public function getLatestChecklist($id){

      $db = \Config\Database::connect();

      $str = 'SELECT a.*, e.*, c.created_at FROM checklists a LEFT JOIN guests e ON a.user_id = e.user_id  LEFT JOIN visits c ON a.visit_id = c.id WHERE a.status = "a" AND c.patient_id = '.$id.' ORDER BY c.created_at desc LIMIT 1';

      $query = $db->query($str);

  	  return $query->getResultArray();
    }

    public function getChecklist($id){

      $db = \Config\Database::connect();

      $str = 'SELECT a.*, e.* FROM checklists a LEFT JOIN guests e ON a.user_id = e.user_id WHERE a.status = "a" AND e.id = '.$id.' ORDER BY a.created_at desc';

      $query = $db->query($str);

  	  return $query->getResultArray();
    }


    public function getHealthTrendSummary($id){

      $db = \Config\Database::connect();

      $str = "SELECT v.*, c.* FROM visits v LEFT JOIN checklists c ON v.id = c.patient_id WHERE c.status = 'a' AND c.patient_id = $id ORDER BY c.created_at desc";

      $query = $db->query($str);
      // echo "<pre>";
  		// print_r($query->getResultArray()); die();
  	  return $query->getResultArray();
    }

    public function getGuestSummary($cId){

      $db = \Config\Database::connect();

      $str = "SELECT  c.*, v.* FROM checklists c LEFT JOIN visits v ON c.patient_id = v.patient_id WHERE c.status = 'a' AND c.id = $cId ";

      $query = $db->query($str);

  	  return $query->getResultArray();
    }

    public function isChecklistCaptured($id){
      $db = \Config\Database::connect();

      $str = 'SELECT * FROM checklists a LEFT JOIN visits b ON a.visit_id = b.id WHERE a.visit_id = '.$id;

      $query = $db->query($str);

      return count($query->getResultArray());
    }

}
