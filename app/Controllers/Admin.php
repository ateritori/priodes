<?php

namespace App\Controllers;

use App\Models\KriteriaModel;
use App\Models\SubkriteriaModel;

class Admin extends BaseController
{
    protected $KriteriaModel;
    public function __construct()
    {
        $this->KriteriaModel = new KriteriaModel();
        $this->SubkriteriaModel = new SubkriteriaModel();
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
        $data = [
            'judul' => 'Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria()
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
        $this->KriteriaModel->save([
            'nama_kriteria' => $this->request->getVar('namaKriteria'),
            'status_kriteria' => 1
        ]);
        session()->setFlashdata('notif', 'Data Kriteria Berhasil Ditambahkan');
        return redirect()->to(base_url('kriteria'));
    }

    public function subKriteria($idKriteria)
    {
        $data = [
            'judul' => 'Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subKriteria' => $this->SubkriteriaModel->getSubkriteria($idKriteria)
        ];

        return view('admin/subkriteria', $data);
    }
}
