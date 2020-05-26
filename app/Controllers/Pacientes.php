<?php

namespace App\Controllers;

use App\Models\PacientesModel;

class Pacientes extends BaseController
{
    public function index()
    {
        $model = new PacientesModel();
        $data = [
            'pacientes' => $model->findAll(),
            'document_code' => 'document_code'
        ];

        return view('pacientes', $data);
    }

    //--------------------------------------------------------------------
 public function guardar(){
    $model = new PacientesModel();
    $_POST['status'] = isset($_POST['status']);
    $model->insert($_POST);
    return $this->response->redirect(site_url('pacientes'));
 }


 public function editar($id_pacientes){

        $model = new PacientesModel();
        $newmodel['model'] = $model->find($id_pacientes);
        return view('editar', $newmodel);
 }

public function update(){
    $model = new PacientesModel();
        $_POST['status'] = isset($_POST['status']);
        $model->update($_POST['id_pacientes'], $_POST);
        return $this->response->redirect(site_url('pacientes'));
}

public function eliminar($id_pacientes){
    $model = new PacientesModel();
        $model->delete($id_pacientes);
        return $this->response->redirect(site_url('pacientes'));
}

    
}

?>