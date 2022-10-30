<?php

namespace App\Controllers;


class Login extends BaseController
{
    public function index()
    { 
        echo view('includes/header');
        echo view('login_view');
        echo view('includes/footer');

    }

    public function login(){
        $db=\Config\Database::connect();
        $email= $this->request->getVar('email');
        $password= md5($this->request->getVar('password'));
        if($builder = $db->table('user')->where('email', $email)->where('password', $password)->limit(1)->get()){
           $result= $builder->getRowArray();
           if($result['role'] == "admin"){
            $session=session();
            $session->set('admin',$result);
            return redirect()->to('/admin_dashboard');
           }
           else{
            $session=session();
            $session->set('user',$result);
            return redirect()->to('/user_dashboard'); 
           }
            

        }
               else{
                $msg['danger']= 'Please enter valid EmailId and password!';
                echo view('includes/header');
                echo view('Loginpage',$msg);
                echo view('includes/footer');
            }
        
    }
           
    
    

    public function logout(){

        $session=session();
        $session->destroy();
        return redirect()->to('/login');
}


}


