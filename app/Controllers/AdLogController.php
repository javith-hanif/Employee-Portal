<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdLogModel;
use App\Models\EmployeeModel;
use CodeIgniter\HTTP\ResponseInterface;

class AdLogController extends BaseController
{
    public function adminlogin(){
        return view('adminlogin');
    }
    public function index()
    {
        $username=$this->request->getPost('username');
         $password=$this->request->getPost('password');
        $model=new AdLogModel();
        $user = $model->where('username', $username)->first();
        if ($user) {
            // If password matches (plain text)
            if ($password === $user['password']) {
                 $model=new EmployeeModel;
                 $data['admin']=$model->findAll();
                return view('admin',$data);
            } 
            else {
                echo "❌ Invalid password.";
            }
        } 
        else {
            echo "❌ No user found with that username.";
        }
    }
        
    }

