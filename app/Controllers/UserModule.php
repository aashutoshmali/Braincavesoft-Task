<?php

namespace App\Controllers;

use App\Models\Usermodel;

$db = db_connect();

class UserModule extends BaseController
{
    public function index()
    { 
        echo view('includes/header');
        echo view('register_view');
        echo view('includes/footer');

    }

    
	public function register(){
		$userValid = $this->validate([
					'username'=>'required|min_length[4]|max_length[20]',
			        'phone'=>'required|exact_length[10]|numeric',
			        'email'=>'required|valid_email|is_unique[user.email]',
			        'password'=>'required|min_length[6]|max_length[12]',
			        'cpassword'=>'required|matches[password]',
				]);
	if (! $userValid) {
					echo view('includes/header');
					echo view('register_view', ['errors' => $this->validator]);
					echo view('includes/footer');
	}else {
		$data = [
			'username' => $this->request->getVar('username'),
			'phone' => $this->request->getVar('phone'),
			'email' => $this->request->getVar('email'),
			'password' => md5($this->request->getVar('password')),

		];

		$db=\Config\Database::connect();
		$builder=$db->table('user');
		$builder->insert($data);
        $email= $this->request->getVar('email');
        $password= md5($this->request->getVar('password'));
        if($builder = $db->table('user')->where('email', $email)->where('password', $password)->limit(1)->get()){
            $result= $builder->getRowArray();
             $session=session();
             $session->set('user',$result);
            return redirect()->to('/user_dashboard');
            
			
		  }
		  else{
		
			$msg['danger']= 'Somthing went wrong!';
			echo view('includes/header');
			echo view('Register_view',$msg);
			echo view('includes/footer');
		  }

	
	}
	}
    public function user_dashboard(){
    $session=session();
    if($session->has('user')){
        return view('user_dashboard');
    }
    else{
        return redirect()->to('/login');
    }
          
    }
    public function userprofile(){
        $session=session();
        if($session->has('user')){
            return view('userprofile');
        }
        else{
            return redirect()->to('/login');
        }
              
        }
        public function userupdate(){
            $session=session();
            if($session->has('user')){
                $data = [
                    'username' => $this->request->getVar('username'),
                    'phone' => $this->request->getVar('phone'),
                    'email' => $this->request->getVar('email'),
                 
        
                ];
                $id= $this->request->getVar('id');
                $model= new Usermodel();
                $model->update($id,$data);
                $db=\Config\Database::connect();
		        $builder=$db->table('user');
                $builder = $db->table('user')->where('id', $id)->limit(1)->get();
                    $result= $builder->getRowArray();
               
                $session=session();
                unset($_SESSION['user']);
                $session->set('user', $result);
              
                return redirect()->to('/userprofile');
            }
            else{
                return redirect()->to('/login');
            }
                  
            }

        }
