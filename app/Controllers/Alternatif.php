<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use \App\Models\PadukuhanModel;
use \App\Models\RtModel;

class Alternatif extends BaseController
{
    protected $AlternatifModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->AlternatifModel = new AlternatifModel();
        $this->PadukuhanModel = new PadukuhanModel();
        $this->RtModel = new RtModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Alternatrif - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif()->getResultArray()
        ];

        return view('alternatif', $data);
    }

    public function tambah_alternatif()
    {
        $data = [
            'judul' => 'Tambah Alternatrif - Wonosari',
            'padukuhan' => $this->PadukuhanModel->getPadukuhan(),
            'rt' => $this->RtModel->getRt(),
            'validation' => \Config\Services::validation()
        ];

        return view('tambah_alternatif', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'alternatif' =>  [
                'rules' => 'required|is_unique[kriteria.nama_kriteria]',
                'errors' => [
                    'required' => 'Program/ Kegiatan Harus Diisi',
                    'is_unique' => 'Program/ Kegiatan Sudah Ada'
                ]
            ],
            'panjang' =>  [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Panjang Harus Diisi',
                    'numeric' => 'Panjang Harus Diisi Dengan Angka'
                ]
            ],
            'lebar' =>  [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Lebar Harus Diisi',
                    'numeric' => 'Lebar Harus Diisi Dengan Angka'
                ]
            ],
            'tinggi' =>  [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Tinggi Harus Diisi',
                    'numeric' => 'Tinggi Harus Diisi Dengan Angka'
                ]
            ],
            'padukuhan' =>  [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => 'Padukuhan Harus Dipilih'
                ]
            ],
            'rt' =>  [
                'rules' => 'numeric',
                'errors' => [
                    'numeric' => 'Padukuhan Harus Dipilih'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('alternatif/tambah'))->withInput()->with('validation', $validation);
        }
        $this->AlternatifModel->save([
            'masalah' => $this->request->getVar('masalah'),
            'potensi' => $this->request->getVar('potensi'),
            'alternatif' => $this->request->getVar('alternatif'),
            'padukuhan' => $this->request->getVar('padukuhan'),
            'rt' => $this->request->getVar('rt'),
            'panjang' => $this->request->getVar('panjang'),
            'lebar' => $this->request->getVar('lebar'),
            'tinggi' => $this->request->getVar('tinggi'),
        ]);
        session()->setFlashdata('notif', 'Data Alternatif Berhasil Ditambahkan');
        return redirect()->to(base_url('alternatif'));
    }
}
