<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();

        $data = [
            'title' => 'Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        return view('templates/header', $data)
        . view('mahasiswa/list', $data)
        . view('templates/footer');
    }
    public function create(){
        $data = [
            'title' => 'Create Mahasiswa',
            'mahasiswa' => 'mahasiswa'
        ];
        return view('templates/header', $data)
        . view('mahasiswa/create')
        . view('templates/footer');
    }
}
