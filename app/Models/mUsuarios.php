<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuarios extends Model{
protected $table = 'usuarios';
protected $primarykey = 'id_usuario';

protected $useAutoIncrement = true;

protected $returnType = 'array';
protected $useSoftDeletes = true;

protected $allowedFields = ['nombre','apellido','edad','correo','password'];


protected $useTimestamps = false;
protected $createdField  = 'created_at';
protected $updatedField  = 'updated_at';
protected $deletedField  = 'deleted_at';

protected $validationRules    = [];
protected $validationMessages = [];
protected $skipValidation     = false;
}


?>
