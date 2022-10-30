<?php

namespace App\Models;

use CodeIgniter\Model;

class Usermodel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';
    protected $allowedFields = [ 'username','phone','email', 'password','role','joining date'];

    
}