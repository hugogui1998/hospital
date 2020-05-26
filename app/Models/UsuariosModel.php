<?php namespace App\Models;

use CodeIgniter\Model;

class PacientesModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    

    protected $allowedFields = ['id_pacientes','nombre','apellidos','email','password','id_rol'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}