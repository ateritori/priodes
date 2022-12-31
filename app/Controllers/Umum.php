<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use \App\Models\PadukuhanModel;
use \App\Models\RtModel;

class Umum extends BaseController
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
            'kegiatan' =>  [
                'rules' => 'required|is_unique[kriteria.nama_kriteria]',
                'errors' => [
                    'required' => 'Program/ Kegaiatan Harus Diisi',
                    'is_unique' => 'Program/ Kegiatan Sudah Ada'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url('alternatif/tambah'))->withInput()->with('validation', $validation);
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->AlternatifModel->save([
            'kegiatan' => $this->request->getVar('kegiatan'),
            'padukuhan' => $this->request->getVar('padukuhan'),
            'rt' => $this->request->getVar('rt'),
        ]);
        session()->setFlashdata('notif', 'Data Alternatif Berhasil Ditambahkan');
        return redirect()->to(base_url('alternatif'));
    }
}
