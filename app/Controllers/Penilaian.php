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

    public function index($idPenilaian = false)
    {
        $data = [
            'judul' => 'Data Penilaian - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif(),
            'penilaian' => $this->PenilaianModel->getPenilaian($idPenilaian)
        ];

        return view('penilaian/index', $data);
    }
    
    public function create($idPenilaian = false, $idAlternatif = false, $idKriteria = false)
    {
        $data = [
            'judul' => 'Data Penilaian - Wonosari',            
            'kriteria' => $this->KriteriaModel->getKriteria($idKriteria),
            'subkriteria' => $this->SubModel->getSubkriteria($idKriteria),
            'penilaian' => $this->PenilaianModel->getPenilaian($idPenilaian)
        ];

        return view('penilaian/create', $data);
    }
}
