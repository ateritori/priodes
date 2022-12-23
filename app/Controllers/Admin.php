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
            'validation' => \Config\Services::validation()
        ];

        return view('admin/tambah', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'namaKriteria' =>  [
                'rules' => 'required|is_unique[kriteria.nama_kriteria]',
                'errors' => [
                    'required' => 'Nama Kriteria Harus Diisi',
                    'is_unique' => 'Nama Kriteria Sudah Ada'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('kriteria/tambah'))->withInput()->with('validation', $validation);
        }
        $this->kriteriaModel->save([
            'nama_kriteria' => $this->request->getVar('namaKriteria'),
            'status_kriteria' => 1
        ]);
        session()->setFlashdata('notif', 'Data Kriteria Berhasil Ditambahkan');
        return redirect()->to(base_url('kriteria'));
    }
}
