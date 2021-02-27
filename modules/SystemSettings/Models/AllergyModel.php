<?php
namespace Modules\SystemSettings\Models;

use App\Models\BaseModel;

class AllergyModel extends BaseModel
{
    protected $table = 'allergies';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','description', 'allergy_type_id' ,'status', 'created_at','updated_at', 'deleted_at'];

    public function addReturnTheId($val_array = []){
      $val_array['created_at'] = (new \DateTime())->format('Y-m-d H:i:s');
      $val_array['status'] = 'a';
      $this->save($val_array);

      $lastEntry = $this->orderBy('id', 'desc')->findAll();
      $lastId = $lastEntry[0]['id'];
      return $lastId;
    }

}
