<?php
namespace App\Models;
use CodeIgniter\Model;
class mCategoria extends Model{
protected $table = 'categorias';
protected $primarykey = 'id_categoria';

protected $useAutoIncrement = true;

protected $returnType = 'array';
protected $useSoftDeletes = true;

protected $allowedFields = ['id_categoria', 'categoria'];


protected $useTimestamps = false;
protected $createdField  = 'created_at';
protected $updatedField  = 'updated_at';
protected $deletedField  = 'deleted_at';

protected $validationRules    = [];
protected $validationMessages = [];
protected $skipValidation     = false;
}


?>
