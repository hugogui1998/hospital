<?php

namespace App\Controllers;

use App\Models\PacientesModel;
use App\Models\UsuariosModel;

use Config\Services;


class Perfil extends BaseController
{

    public function index()
    {
        $req = Services::request();
        $model = new UsuariosModel();
        $inUser = trim($req->getPost('correo'));
        $inPass = trim($req->getPost('password'));

        $user = $model->where('email', $inUser)->first();

        if ($user === null) {
            return redirect()->back();
        } else {
            if (!($inPass === $user['password'])) {

                return redirect()->back();
            }
            $user['logged_in'] = true;
            $this->session->set($user);

            $paciente = new PacientesModel();
            $data = [
                'pacientes' => $paciente->findAll(),
                'document_code' => 'document_code'
            ];

            return view('pacientes', $data);
        }
    }


    public function salir()
    {
        $this->session->destroy();
        return redirect()->to('/');
    }
}
