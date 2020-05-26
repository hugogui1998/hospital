<?php namespace App\Models;

use CodeIgniter\Model;

class PacientesModel extends Model
{
    protected $table      = 'pacientes';
    protected $primaryKey = 'id_pacientes';

    protected $returnType     = 'array';
    

    protected $allowedFields = ['nombre','apellido_p','apellido_m','telefono','edad',
                                'sexo','tipo_sangre','area','cuarto','padecimiento'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}