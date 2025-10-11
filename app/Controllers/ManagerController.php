<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\EmployeeModel;

class ManagerController extends BaseController
{
    public function managerreg(){
          return view('managerreg');
    }
    public function index()
    {
         $model = new EmployeeModel();


        
        $token = bin2hex(random_bytes(16)); // unique token
        $data = [
            'to_email'      => $this->request->getPost('to_email'),
            'active_status' => 'no',
            'token'         => $token
        ];
        $model->insert($data);
        // Send verification email
        $email = \Config\Services::email();
        $email->setFrom('javithhanif732@gmail.com','Gmail');
        $email->setTo($data['to_email']);
        //echo "test";die;
        $email->setSubject('Verify Your Account');
        $email->setMessage("Click this link to verify: <a href='" . base_url('verifying/' . $token) . "'>Activate Account</a>");

        if ($email->send()) {
            return "✅ Registration successful. Please check your Gmail to activate your account.";
        } else {
            return "❌ Failed to send email.<br>" . print_r($email->printDebugger(['headers']), true);
        }
    }
    public function verify($token)
    {
        $model = new EmployeeModel();
        $user  = $model->where('token', $token)->first();
        if ($user) {
            $model->update($user['id'], ['active_status' => 'yes', /*'token' => null*/]);
            return "😀 Account activated! <a href='" . base_url('managerlogin') . "'>Click here to login</a>";
        } else {
            return "😌 Invalid or expired token.";
        }
    }
    public function managerlogin(){
        return view('managerlogin');
    }
    public function lastlogin(){
         $session = session();
        $model   = new EmployeeModel();
        //$users=$model->findAll();
        //$email    = $this->request->getPost('to_email');
        $to_email=$this->request->getPost('to_email');
        //$password = $this->request->getPost('password');
        $user = $model->where('to_email', $to_email)->first();
      //  $subject=$model->where('subject', $email)->first();
       if($user /*&& password_verify($password, $user['password'])*/) {
            if($user['active_status'] === 'yes')
            {
                $session->set([
                    'user_id'   => $user['id'],
                    'to_email'=> $user['to_email'],
                    'logged_in' => true,
                ]);
                 $data['admin']=$model->findAll();
                 return view('admin',$data);
            }            
            else
            {
                return "😒 Please verify your email before logging in.";
            }
        } else {
            return "❌ Invalid login credentials.";
       }
    }
}
