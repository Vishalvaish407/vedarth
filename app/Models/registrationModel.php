<?php 
namespace App\Models;

class registrationModel
 extends \CodeIgniter\Model
{
   protected $table = 'registration';
   protected $allowedFields= ['id','name','email','phone','courseid'];
}


