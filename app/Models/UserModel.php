<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'email',
        'password',
        'active_status',
        'token',
        'employee',
        'skills',
        'empdetails',
        'role',
        'gender',
        'phone',
        'qualification',
        'computerskills',
        'experience',
        'otherskills',
        'reg_date'
    ];
    function insertTable($users, $data = array())
    {
        $db = \Config\Database::connect();
        //print_r($data);die;  
        $db->table($users)->insert($data);
        //echo "test";die;
        return $db->insertID();
}
}
