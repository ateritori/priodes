<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use \App\Models\KriteriaModel;
use \App\Models\PadukuhanModel;
use \App\Models\RtModel;
use \App\Models\PenilaianModel;
use \App\Models\SubModel;

class Penilaian extends BaseController
{
    protected $AlternatifModel;
    protected $PadukuhanModel;
    protected $RtModel;
    protected $PenilaianModel;
    protected $KriteriaModel;
    protected $SubModel;

    public function __construct()
    {
        $this->AlternatifModel = new AlternatifModel();
        $this->PadukuhanModel = new PadukuhanModel();
        $this->PenilaianModel = new PenilaianModel();
        $this->KriteriaModel = new KriteriaModel();
        $this->RtModel = new RtModel();
        $this->SubModel = new SubModel();
    }

    public function index($idAlternatif = false)
    {
        $data = [
            'judul' => 'Data Penilaian - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif(),
            'penilaian' => $this->PenilaianModel->getPenilaian($idAlternatif)
        ];

        return view('penilaian/index', $data);
    }

    public function create($idAlternatif = false, $idKriteria = false)
    {
        $data = [
            'judul' => 'Data Penilaian - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subkriteria' => $this->SubModel->getSubkriteria($idKriteria),
            'alternatif' => $this->AlternatifModel->getAlternatif($idAlternatif),
            'penilaian' => $this->PenilaianModel->getPenilaian($idAlternatif)
        ];

        return view('penilaian/create', $data);
    }

    public function save($idAlternatif = false)
    {
        $idAlternatif = $this->request->getVar('idAlternatif');
        $subKriteria = $this->request->getVar('subKriteria');
        foreach ($subKriteria as $subKrit) :
            $data = $this->SubModel->getSub($subKrit);
            $this->PenilaianModel->save([
                'id_alternatif' => $idAlternatif,
                'id_kriteria' => $data['id_kriteria'],
                'id_sub_kriteria' => $subKrit,
                'nilai' => $data['bobot_sub_kriteria']
            ]);
        endforeach;
        session()->setFlashdata('notif', 'Data Penilaian Berhasil Diisi');
        return redirect()->to('/penilaian');
    }

    public function edit($idAlternatif = false, $idKriteria = false, $idSub = false)
    {
        $data = [
            'judul' => 'Data Penilaian - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subkriteria' => $this->SubModel->getSubkriteria($idKriteria),
            'alternatif' => $this->AlternatifModel->getAlternatif($idAlternatif),
            'penilaian' => $this->PenilaianModel->getNilai($idAlternatif, $idSub)
        ];

        return view('penilaian/edit', $data);
    }
}
