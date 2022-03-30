<?php
namespace App\Models;
use CodeIgniter\Model;
class mGastos extends Model{
protected $table = 'gastos_p';
protected $primarykey = 'id_gastos';

protected $useAutoIncrement = true;

protected $returnType = 'array';
protected $useSoftDeletes = true;

protected $allowedFields = ['monto','fecha','descripcion','id_categoria '];


protected $useTimestamps = false;
protected $createdField  = 'created_at';
protected $updatedField  = 'updated_at';
protected $deletedField  = 'deleted_at';

protected $validationRules    = [];
protected $validationMessages = [];
protected $skipValidation     = false;
}


?>
