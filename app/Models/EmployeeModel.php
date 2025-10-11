<?php
namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'id';

    protected $allowedFields = [
       'to_email','details','skills','empdetails','active_status','token'
    ];
     function insertTable($employee, $data = array())
    {
        $db = \Config\Database::connect();
        //print_r($data);die;  
        $db->table($employee)->insert($data);
        //echo "test";die;
        return $db->insertID();
    }
}