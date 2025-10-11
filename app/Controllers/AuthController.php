<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\Ex;
use App\Models\AdLogModel;
class AuthController extends Controller
{
    // Show register form
    public function register()
    {
        return view('register');
    }

    // Handle user registration
    public function store()
    {
        $model = new UserModel();
        $token = bin2hex(random_bytes(16)); // unique token
        $data = [
            'email'    => $this->request->getPost('email'),
            'password'      => $this->request->getPost('password'),
            'active_status' => 'no',
            'token'         => $token
        ];
        $model->insert($data);
        // Send verification email
        $email = \Config\Services::email();
        $email->setFrom('javithhanif732@gmail.com','Gmail');
        $email->setTo($data['email']);
        //echo "test";die;
        $email->setSubject('Verify Your Account');
        $email->setMessage("Click this link to verify: <a href='" . base_url('verify/' . $token) . "'>Activate Account</a>");
        if ($email->send()) {
            return "✅ Registration successful. Please check your Gmail to activate your account.";
        } else {
            return "❌ Failed to send email.<br>" . print_r($email->printDebugger(['headers']), true);
        }
    }
    // Verify account
    /*
    public function verify($token)
    {
        $model = new UserModel();
        $user  = $model->where('token', $token)->first();
       if ($user) {
            $model->update($user['id'], ['active_status' => 'yes']);
            return "😀 Account activated! <a href='" . base_url('login') . "'>Click here to login</a>";
        } else {
            return "😌 Invalid or expired token.";
        }
    }
        */
    public function verify($token)
    {
        $model = new UserModel();
        $user  = $model->where('token', $token)->first();
        if ($user) {
            $model->update($user['id'], ['active_status' => 'yes']);
           return redirect()->to('login');
        } else {
            return "😌 Invalid or expired token.";
     }
    }
    
    // Show login form
    public function login()
    {
        return view('login');
    }
    // Authenticate login
    public function authenticate()
    {
        $session = session();
        $model   = new UserModel();
        //$users=$model->findAll();
        $email    = $this->request->getPost('from_email');
        $password = $this->request->getPost('password');
        $user = $model->where('email', $email)->first();
        $pass = $model->where('password', $password)->first();
      //  $subject=$model->where('subject', $email)->first();
       if($user && $pass) {
            if($user['active_status'] === 'yes')
            {
                $session->set([
                    'user_id'   => $user['id'],
                    //'from_email'=> $user['from_email'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/employee/edit');
            }            
            else
            {
                return "😒 Please verify your email before logging in.";
            }
        } else {
            return "❌ Invalid login credentials.";
       }
    }
    public function index(){
        return view('register');
    }

    public function edit()
    {
        $id = session()->get('user_id'); 
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('employee_edit', $data);
    }
        
    public function update()
    {
        $id = session()->get('user_id'); 
        $model = new UserModel();
        $data = [
            'employee'     => $this->request->getPost('employee'),
            'skills'      => $this->request->getPost('skills'),
            'empdetails'  => $this->request->getPost('empdetails'),
        ];
        $model->update($id, $data);
        return redirect()->to('/personaldetails/edit');
    }
    
     public function detailedit()
    {
        $id = session()->get('user_id'); 
        $model = new UserModel();
        $data['detail'] = $model->find($id);
        return view('personaldetails', $data);
    }  
    public function detailupdate()
    {
        $id = session()->get('user_id'); 
        $model = new UserModel();
        $data = [
            'role'     => $this->request->getPost('role'),
            'gender'      => $this->request->getPost('gender'),
            'qualification'  => $this->request->getPost('qualification'),
            'phone'  => $this->request->getPost('phone'),
        ];
        $model->update($id, $data);
        return redirect()->to('skilledit');
    }
     public function skilledit()
    {
        $id = session()->get('user_id'); 
        $model = new UserModel();
        $data['skill'] = $model->find($id);
        return view('skill', $data);
    }
    public function skillupdate()
    {
        $id = session()->get('user_id'); 
        $model = new UserModel();
        $data = [
            'computerskills'     => $this->request->getPost('computerskills'),
            'experience'      => $this->request->getPost('experience'),
            'otherskills'  => $this->request->getPost('otherskills'),
        ];
        $model->update($id, $data);
        return "Updated successfully";
    }
    public function landingpage(){
        return view('landingpage');
    }
    public function adlogview(){
        return view('adminlogin');
    }
    public function adlog(){
        $model=new UserModel();
        $email=$this->request->getPost('email');
        $password=$this->request->getPost('password');
        $user = $model->where('email', $email)->first();
        $pass = $model->where('password', $password)->first();
        if($user && $pass){
             if($user['active_status'] === 'ad')
            {
                /*
                $session->set([
                    'user_id'   => $user['id'],
                    //'from_email'=> $user['from_email'],
                    'logged_in' => true,
                ]);
                */
                $data['rice']=$model->findAll();
                return view('admin',$data);
            }            
            else
            {
                return "😒 Please verify your email before logging in.";
            }
        } 
        else{
            return "Please log in correctly incorrect email";
        }
    }
    public function ad(){
        $model=new AdLogModel();
        $username=$this->request->getPost('username');
        $password=$this->request->getPost('password');
        $user = $model->where('username', $username)->first();
        $pass = $model->where('password', $password)->first();
        if($user && $pass){
             if($user['active_status'] === 'ad')
            {
                /*
                $session->set([
                    'user_id'   => $user['id'],
                    //'from_email'=> $user['from_email'],
                    'logged_in' => true,
                ]);
                */
                $mode=new UserModel();
                $data['rice']=$mode->findAll();
                return view('admin',$data);
            }            
            else
            {
                return "😒 Please verify your email before logging in.";
            }
        } 
        else{
            return "Please log in correctly incorrect email";
        }
    }
    public function updateField()
    {
        if ($this->request->isAJAX()) {
            $id    = $this->request->getPost('id');
            $field = $this->request->getPost('field');
            $value = $this->request->getPost('value');
            $userModel = new UserModel();
            $userModel->update($id, [$field => $value]);
            return $this->response->setJSON(['status' => 'success']);
        }
    }
  public function insert()
{
    if ($this->request->isAJAX()) {
        $employee = $this->request->getPost('employee');
        $skills = $this->request->getPost('skills');
         $empdetails= $this->request->getPost('empdetails');
        $role= $this->request->getPost('role');
        $gender= $this->request->getPost('gender');
        $qualification= $this->request->getPost('qualification');
        $phone= $this->request->getPost('phone');
        $computerskills= $this->request->getPost('computerskills');
        $experience= $this->request->getPost('experience');
        $otherskills= $this->request->getPost('otherskills');
        $userModel = new UserModel();
        $id = $userModel->insert([
            'employee'   => $employee,
            'skills'     => $skills,
            'empdetails' => $empdetails,
            'role'=>$role,
            'gender'=>$gender,
            'qualification'=>$qualification,
            'phone'=>$phone,
            'computerskills'=>$computerskills,
            'experience'=>$experience,
            'otherskills'=>$otherskills
        ]);
        return $this->response->setJSON([
            'status'   => 'success',
            'id'       => $id,
            'employee' => $employee,
            'skills'     => $skills,
            'empdetails' => $empdetails,
            'role'=>$role,
            'gender'=>$gender,
            'qualification'=>$qualification,
            'phone'=>$phone,
            'computerskills'=>$computerskills,
            'experience'=>$experience,
            'otherskills'=>$otherskills
        ]);
    }
}
public function view($id = null)
{
    $userModel = new UserModel();
    $user = $userModel->find($id);
    if (!$user) {
        return $this->response->setJSON(['status' => 'error', 'message' => 'User not found']);
    }

    return $this->response->setJSON([
        'status' => 'success',
        'data'   => $user
    ]);
}
public function delete($id)
{
    $userModel = new UserModel();

    if ($userModel->delete($id)) {
        return $this->response->setJSON(['status' => 'success']);
    } 
    else {
        return $this->response->setJSON(['status' => 'error']);
    }
}

public function addmodal(){
    $userModel = new UserModel();
    $data=[
        'employee'=>$this->request->getPost('employee'),
        'skills'=>$this->request->getPost('skills'),
       'empdetails'=>$this->request->getPost('empdetails'),
        'role'=>$this->request->getPost('role'),
        'gender'=>$this->request->getPost('gender'),
        'qualification'=>$this->request->getPost('qualification'),
        'phone'=>$this->request->getPost('phone'),
        'computerskills'=>$this->request->getPost('computerskills'),
        'experience'=>$this->request->getPost('experience'),
        'otherskills'=>$this->request->getPost('otherskills'),
    ];
    if(
    $userModel->insertTable('users',$data)){
                $mode=new UserModel();
                $data['rice']=$mode->findAll();
                return view('admin',$data);
    }  
    else{
        return "Error inserted data";
    }
}
}