<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\EmployeeModel;
use CodeIgniter\HTTP\ResponseInterface;
class EmployeeController extends BaseController
{
    public function board(){
        return view('dashboard');
    }
    public function resultboard(){
        $data=[
        'skills'=>$this->request->getPost('skills'),
        'empdetails'=>$this->request->getPost('empdetails'),
        'details'=>$this->request->getPost('details'),
        ];
        $model=new EmployeeModel();
        if($model->insertTable('employee',$data)){
          return "inserted successfully";
        }
        else{
            return "please insert again";
        }
    }
    public function fetch(){
        $model=new EmployeeModel;
        $data['admin']=$model->findAll();
        return view('admin',$data);
    }
}
