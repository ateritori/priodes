<?php

namespace App\Controllers;

use App\Models\kriteriaModel;

class Admin extends BaseController
{
    protected $kriteriaModel;
    public function __construct()
    {
        $this->kriteriaModel = new kriteriaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Beranda - Wonosari',
        ];

        return view('admin/index', $data);
    }

    public function kriteria()
    {
        $dataKriteria = $this->kriteriaModel->findAll();
        $data = [
            'judul' => 'Kriteria - Wonosari',
            'kriteria' => $dataKriteria
        ];

        return view('admin/kriteria', $data);
    }

    public function tambah()
    {
        $data = [
            'judul' => 'Tambah Kriteria - Wonosari',
        ];

        return view('admin/tambah', $data);
    }
}
