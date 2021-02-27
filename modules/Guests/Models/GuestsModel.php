<?php
namespace Modules\Guests\Models;

use App\Models\BaseModel;

class GuestsModel extends BaseModel
{
    protected $table = 'guests';

    protected $allowedFields = ['id','user_type','full_name','birthdate','gender','cellphone_no','landline_no','email','address','city','province','postal','status','date', 'created_at','updated_at', 'deleted_at'];

      public function getStudent1(){

      $db = \Config\Database::connect();

      $str = "SELECT COUNT(*) AS S1 FROM guests WHERE status = 'a' AND user_type = 's'";

      $query = $db->query($str);

      return $query->getResultArray();
      }
      public function getFaculty1(){

      $db = \Config\Database::connect();

      $str = "SELECT COUNT(*) AS F1 FROM guests WHERE status = 'a' AND user_type = 'f'";

      $query = $db->query($str);

      return $query->getResultArray();
      }
      public function getEmployee1(){

      $db = \Config\Database::connect();

      $str = "SELECT COUNT(*) AS E1 FROM guests WHERE status = 'a' AND user_type = 'e'";

      $query = $db->query($str);

      return $query->getResultArray();
      }
      public function getOutsider1(){

      $db = \Config\Database::connect();

      $str = "SELECT COUNT(*) AS O1 FROM guests WHERE status = 'a' AND user_type = 'o'";

      $query = $db->query($str);

      return $query->getResultArray();
      }
      //----------- Guests student print pdf ----------------------
      public function getGuests($date1, $date2){

      $db = \Config\Database::connect();

      $str = "SELECT * FROM guests WHERE date >= '$date1' AND date <= '$date2'";

      $query = $db->query($str);

      return $query->getResultArray();
      }
      //----------- Guests student print pdf ----------------------
      public function getGuestTotalPdf(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, c.* FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND p.status = "a" ORDER BY c.updated_at desc';

      $query = $db->query($str);

      return $query->getResultArray();
      }

    //----------- Patient done assessment LIST ----------------------
    public function getPatientAssessList(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, c.* FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d" AND p.status = "a" ORDER BY c.updated_at desc';

      $query = $db->query($str);

      return $query->getResultArray();
    }


    public function getPatientTotal(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests WHERE status = "a" ORDER BY created_at desc';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    ////////////////////// STUDENTS MODEL ///////////////////////////////////////
    public function getStudentTotal(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests WHERE status = "a" AND user_type = "s" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    public function getStudentMale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "s" AND gender = "m" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    public function getStudentFemale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "s" AND gender = "f" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- Student Define ----------------------
    public function getGuestDefined(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, COUNT(c.status_defined) AS count_guest_define FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- Guest Define LIST ----------------------
    public function getGuestDefinedList(){

      $db = \Config\Database::connect();

      $str = 'SELECT v.*, c.*, g.* FROM visits v LEFT JOIN guests g ON v.patient_id = g.id LEFT JOIN checklists c ON v.id = c.visit_id WHERE g.status = "a" AND c.status_defined = "d"';
      // $str = 'SELECT  g.*, v.*, c.* FROM guests g LEFT JOIN Visits v ON g.id = v.patient_id LEFT JOIN checklists c ON g.id = c.id WHERE g.status = "a" AND c.status_defined = "d"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    ////////////////////// FACULTY MODEL ///////////////////////////////////////
    public function getFacultyTotal(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests WHERE status = "a" AND user_type = "f" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    public function getFacultyMale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "f" AND gender = "m" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    public function getFacultyFemale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "f" AND gender = "f" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- faculty Define ----------------------
    public function getFacultyDefined(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, COUNT(c.status_defined) AS count_faculty_define FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d" AND p.user_type = "f"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- faculty Define LIST ----------------------
    public function getFacultyDefinedList(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, c.* FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d" AND p.user_type = "f"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    ////////////////////// EMPLOYEE MODEL ///////////////////////////////////////
    public function getEmployeeTotal(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests WHERE status = "a" AND user_type = "e" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    public function getEmployeeMale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "e" AND gender = "m" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    public function getEmployeeFemale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "e" AND gender = "f" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- employee Define ----------------------
    public function getEmployeeDefined(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, COUNT(c.status_defined) AS count_employee_define FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d" AND p.user_type = "e"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- Employee Define LIST ----------------------
    public function getEmployeeDefinedList(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, c.* FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d" AND p.user_type = "e"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    ////////////////////// OUTSIDER MODEL ///////////////////////////////////////
    public function getOutsiderTotal(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests WHERE status = "a" AND user_type = "o" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    public function getOutsiderMale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "o" AND gender = "m" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }

    public function getOutsiderFemale(){

      $db = \Config\Database::connect();

      $str = 'SELECT COUNT(*) FROM guests  WHERE user_type = "o" AND gender = "f" AND status = "a"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- outsider Define ----------------------
    public function getOutsiderDefined(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, COUNT(c.status_defined) AS count_outsider_define FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d" AND p.user_type = "o"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
    //----------- Outsider Define LIST ----------------------
    public function getOutsiderDefinedList(){

      $db = \Config\Database::connect();

      $str = 'SELECT p.*, c.* FROM guests p LEFT JOIN checklists c ON p.id = c.user_id WHERE c.status = "a" AND c.status_defined = "d" AND p.user_type = "o"';

      $query = $db->query($str);

      return $query->getResultArray();
    }
}
