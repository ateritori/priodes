<?php

namespace App\Controllers;

use App\Models\SubModel;
use App\Models\KriteriaModel;

class Subkriteria extends BaseController
{
    protected $KriteriaModel;
    protected $SubModel;
    public function __construct()
    {
        $this->KriteriaModel = new KriteriaModel();
        $this->SubModel = new SubModel();
    }

    public function index($idKriteria)
    {
        $data = [
            'judul' => 'Sub Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subKriteria' => $this->SubModel->getSubkriteria($idKriteria)
        ];

        return view('subkriteria/index', $data);
    }

    public function create($idKriteria)
    {
        $data = [
            'judul' => 'Tambah Sub-Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subKriteria' => $this->SubModel->getSubkriteria($idKriteria),
            'validation' => \Config\Services::validation()
        ];

        return view('subkriteria/create', $data);
    }

    public function save($idKriteria)
    {
        if (!$this->validate([
            'bobot_sub_kriteria' =>  [
                'rules' => 'numeric|less_than[101]',
                'errors' => [
                    'numeric' => 'Bobot Sub-Kriteria Harus Berupa Angka',
                    'less_than' => 'Bobot Sub-Kriteria Harus Diantara 1-10',
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('kriteria/sub/create/' . $idKriteria))->withInput()->with('validation', $validation);
        }
        $this->SubModel->save([
            'nama_sub_kriteria' => $this->request->getVar('nama_sub_kriteria'),
            'bobot_sub_kriteria' => $this->request->getVar('bobot_sub_kriteria'),
            'id_kriteria' => $idKriteria
        ]);
        session()->setFlashdata('notif', 'Data Sub Kriteria Berhasil Ditambahkan');
        return redirect()->to(base_url('kriteria/sub/' . $idKriteria));
    }

    public function edit($idSubkriteria)
    {
        $data = [
            'judul' => 'Edit Sub-Kriteria - Wonosari',
            'subKriteria' => $this->SubModel->getSub($idSubkriteria),
            'validation' => \Config\Services::validation()
        ];

        return view('subkriteria/edit', $data);
    }

    public function update($idSubkriteria)
    {
        $idKriteria = $this->request->getVar('idKriteria');
        if (!$this->validate([
            'bobot_sub_kriteria' =>  [
                'rules' => 'numeric|less_than[11]',
                'errors' => [
                    'numeric' => 'Bobot Sub-Kriteria Harus Berupa Angka',
                    'less_than' => 'Bobot Sub-Kriteria Harus Diantara 1-10',
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('kriteria/sub/edit/' . $idSubkriteria))->withInput()->with('validation', $validation);
        }
        $data = [
            'nama_sub_kriteria' => $this->request->getVar('nama_sub_kriteria'),
            'bobot_sub_kriteria' => $this->request->getVar('bobot_sub_kriteria'),
        ];
        $this->SubModel->update($idSubkriteria, $data);

        session()->setFlashdata('notif', 'Data Sub Kriteria Berhasil Diubah');
        return redirect()->to(base_url('kriteria/sub/' . $idKriteria));
    }

    public function delete($idSubkriteria)
    {
        $idKriteria = $this->request->getVar('idKriteria');
        $this->SubModel->delete($idSubkriteria);
        session()->setFlashdata('notif', 'Data Kriteria Berhasil Dihapus');
        return redirect()->to(base_url('kriteria/sub/' . $idKriteria));
    }
}
