<?php

namespace App\Controllers;

use App\Models\KriteriaModel;
use App\Models\SubkriteriaModel;

class Admin extends BaseController
{
    protected $KriteriaModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
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
            'deskripsi_kriteria' => $this->request->getVar('deskripsiKriteria')
        ]);
        session()->setFlashdata('notif', 'Data Kriteria Berhasil Ditambahkan');
        return redirect()->to(base_url('kriteria'));
    }

    public function subKriteria($idKriteria)
    {
        $data = [
            'judul' => 'Sub Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subKriteria' => $this->SubkriteriaModel->getSubkriteria($idKriteria)
        ];

        return view('admin/subkriteria', $data);
    }

    public function edit($idKriteria)
    {
        $data = [
            'judul' => 'Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/edit', $data);
    }

    public function update($idKriteria)
    {
        $data = [
            'nama_kriteria' => $this->request->getVar('namaKriteria'),
            'deskripsi_kriteria' => $this->request->getVar('deskripsiKriteria'),
        ];
        $this->KriteriaModel->update($idKriteria, $data);

        session()->setFlashdata('notif', 'Data Kriteria Berhasil Diubah');
        return redirect()->to(base_url('kriteria'));
    }

    public function hapus($idKriteria)
    {
        $this->KriteriaModel->delete($idKriteria);
        session()->setFlashdata('notif', 'Data Kriteria Berhasil Dihapus');
        return redirect()->to(base_url('kriteria'));
    }

    public function tambahsub($idKriteria)
    {
        $data = [
            'judul' => 'Tambah Sub-Kriteria - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subKriteria' => $this->SubkriteriaModel->getSubkriteria($idKriteria),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/tambahsub', $data);
    }

    public function simpansub($idKriteria)
    {
        if (!$this->validate([
            'namaSubkriteria' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Sub-Kriteria Harus Diisi',
                ]
            ],
            'bobotSubkriteria' =>  [
                'rules' => 'required|numeric|less_than[11]',
                'errors' => [
                    'required' => 'Bobot Sub-Kriteria Harus Diisi',
                    'numeric' => 'Bobot Sub-Kriteria Harus Berupa Angka',
                    'less_than' => 'Bobot Sub-Kriteria Harus Diantara 1-10',
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('kriteria/tambahsub/' . $idKriteria))->withInput()->with('validation', $validation);
        }
        $this->SubkriteriaModel->save([
            'nama_sub_kriteria' => $this->request->getVar('namaSubkriteria'),
            'bobot_sub_kriteria' => $this->request->getVar('bobotSubkriteria'),
            'id_kriteria' => $idKriteria
        ]);
        session()->setFlashdata('notif', 'Data Sub Kriteria Berhasil Ditambahkan');
        return redirect()->to(base_url('kriteria/sub/' . $idKriteria));
    }

    public function editsub($idSubkriteria)
    {
        $data = [
            'judul' => 'Edit Sub-Kriteria - Wonosari',
            'subKriteria' => $this->SubkriteriaModel->getSub($idSubkriteria),
            'validation' => \Config\Services::validation()
        ];

        return view('admin/editsub', $data);
    }
}
