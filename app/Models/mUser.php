<?php
namespace App\Models;
use CodeIgniter\Model;
class mUser extends Model{
protected $table = 'usuario';
protected $primarykey = 'id_usuario';

protected $useAutoIncrement = true;

protected $returnType = 'array';
protected $useSoftDeletes = true;

protected $allowedFields = ['usuario','password'];


}


?>