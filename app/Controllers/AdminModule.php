<?php

namespace App\Controllers;

use App\Models\Usermodel;

$db = db_connect();

class AdminModule extends BaseController
{
    public function index()
    { 
        $session=session();
    if($session->has('admin')){
        return view('admin_dashboard');
    }
    else{
        return redirect()->to('/login');
    }
    }
    public function adminprofile(){
        $session=session();
        if($session->has('admin')){
            return view('adminprofile');
        }
        else{
            return redirect()->to('/login');
        }
              
        }
    public function adminupdate(){
        $session=session();
        if($session->has('admin')){
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
            unset($_SESSION['admin']);
            $session->set('admin', $result);
          
            return redirect()->to('/adminprofile');
        }
        else{
            return redirect()->to('/login');
        }
             
        }
   public function manageuser(){
    $session=session();
    if($session->has('admin')){
      $model= new Usermodel();
      $data['userdata']= $model->where('role', '')->findAll();
           return view('manageuser',$data);
    }
    else{
        return redirect()->to('/login');
    }
   }

   public function deleteuser(){

    $session=session();
    if($session->has('admin')){
      $model= new Usermodel();
      $id= $this->request->getVar('id');

      $data['userdata']= $model->where('id' , $id)->delete();
      return redirect()->to('/manageuser');
    }
    else{
        return redirect()->to('/login');
    }
   }
   }


