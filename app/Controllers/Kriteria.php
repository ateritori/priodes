<?php

namespace App\Controllers;

use App\Models\KriteriaModel;

class Kriteria extends BaseController
{
    protected $KriteriaModel;
    public function __construct()
    {
        $this->KriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'SPK-Priodes Wonosari : Data Kriteria',
            'kriteria' => $this->KriteriaModel->getKriteria()
        ];
        return view('kriteria/index', $data);
    }

    public function create()
    {
        $data = [
            'judul' => 'SPK-Priodes Wonosari : Tambah Kriteria',
            'validation' => \Config\Services::validation()
        ];

        return view('kriteria/create', $data);
    }

    public function save()
    {
        $validation = \Config\Services::validation();
        if (!$this->validate([
            'nama_kriteria' =>  [
                'rules' => 'required|is_unique[kriteria.nama_kriteria]',
                'errors' => [
                    'required' => 'Nama Kriteria Harus Diisi',
                    'is_unique' => 'Nama Kriteria Sudah Ada'
                ]
            ]

        ])) {
            return redirect()->to(base_url('kriteria/tambah'))->withInput()->with('validation', $validation);
        }
        $this->KriteriaModel->save([
            'nama_kriteria' => $this->request->getVar('nama_kriteria'),
            'deskripsi_kriteria' => $this->request->getVar('deskripsi_kriteria')
        ]);
        session()->setFlashdata('notif', 'Data Kriteria Berhasil Ditambahkan');
        return redirect()->to(base_url('kriteria'));
    }

    public function edit($idKriteria)
    {
        $data = [
            'judul' => 'Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'validation' => \Config\Services::validation()
        ];

        return view('kriteria/edit', $data);
    }

    public function update($idKriteria)
    {
        $data = [
            'nama_kriteria' => $this->request->getVar('nama_kriteria'),
            'deskripsi_kriteria' => $this->request->getVar('deskripsi_kriteria'),
        ];
        $this->KriteriaModel->update($idKriteria, $data);

        session()->setFlashdata('notif', 'Data Kriteria Berhasil Diubah');
        return redirect()->to(base_url('kriteria'));
    }

    public function delete($idKriteria)
    {
        $this->KriteriaModel->delete($idKriteria);
        session()->setFlashdata('notif', 'Data Kriteria Berhasil Dihapus');
        return redirect()->to(base_url('kriteria'));
    }
}
