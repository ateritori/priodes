<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use \App\Models\PadukuhanModel;
use \App\Models\RtModel;

class Alternatif extends BaseController
{
    protected $AlternatifModel;
    protected $PadukuhanModel;
    protected $RtModel;

    public function __construct()
    {
        $this->AlternatifModel = new AlternatifModel();
        $this->PadukuhanModel = new PadukuhanModel();
        $this->RtModel = new RtModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Alternatrif - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif()
        ];

        return view('alternatif/index', $data);
    }

    public function create()
    {
        $data = [
            'judul' => 'Tambah Alternatrif - Wonosari',
            'padukuhan' => $this->PadukuhanModel->getPadukuhan(),
            'rt' => $this->RtModel->getRt(),
            'validation' => \Config\Services::validation()
        ];

        return view('alternatif/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'alternatif' =>  [
                'rules' => 'is_unique[kriteria.nama_kriteria]',
                'errors' => [
                    'is_unique' => 'Program/ Kegiatan Sudah Ada'
                ]
            ],
            'paket' =>  [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => 'Paket Harus Diisi Dengan Angka'
                ]
            ],
            'panjang' =>  [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => 'Panjang Harus Diisi Dengan Angka'
                ]
            ],
            'lebar' =>  [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => 'Lebar Harus Diisi Dengan Angka'
                ]
            ],
            'tinggi' =>  [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => 'Tinggi Harus Diisi Dengan Angka'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('alternatif/create')->withInput()->with('validation', $validation);
        }
        $this->AlternatifModel->save([
            'masalah' => $this->request->getVar('masalah'),
            'potensi' => $this->request->getVar('potensi'),
            'alternatif' => $this->request->getVar('alternatif'),
            'padukuhan' => $this->request->getVar('padukuhan'),
            'rt' => $this->request->getVar('rt'),
            'paket' => $this->request->getVar('paket'),
            'panjang' => $this->request->getVar('panjang'),
            'lebar' => $this->request->getVar('lebar'),
            'tinggi' => $this->request->getVar('tinggi'),
        ]);
        session()->setFlashdata('notif', 'Data Alternatif Berhasil Ditambahkan');
        return redirect()->to(base_url('alternatif'));
    }

    public function edit($idAlternatif)
    {
        $data = [
            'judul' => 'Ubah Alternatif - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif($idAlternatif),
            'padukuhan' => $this->PadukuhanModel->getPadukuhan(),
            'rt' => $this->RtModel->getRt(),
            'validation' => \Config\Services::validation()
        ];

        return view('alternatif/edit', $data);
    }

    public function update($idAlternatif)
    {
        $data = [
            'masalah' => $this->request->getVar('masalah'),
            'potensi' => $this->request->getVar('potensi'),
            'alternatif' => $this->request->getVar('alternatif'),
            'padukuhan' => $this->request->getVar('padukuhan'),
            'rt' => $this->request->getVar('rt'),
            'paket' => $this->request->getVar('paket'),
            'panjang' => $this->request->getVar('panjang'),
            'lebar' => $this->request->getVar('lebar'),
            'tinggi' => $this->request->getVar('tinggi'),
        ];
        $this->AlternatifModel->update($idAlternatif, $data);

        session()->setFlashdata('notif', 'Data Alternatif Berhasil Diubah');
        return redirect()->to(base_url('alternatif'));
    }

    public function delete($idAlternatif)
    {
        $this->AlternatifModel->delete($idAlternatif);
        session()->setFlashdata('notif', 'Data Alternatif Berhasil Dihapus');
        return redirect()->to(base_url('alternatif'));
    }

    public function rinci($idAlternatif)
    {
        $data = [
            'judul' => 'Data Alternatrif - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif($idAlternatif)
        ];

        return view('alternatif/rinci', $data);
    }
}
