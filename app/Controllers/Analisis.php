<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use \App\Models\KriteriaModel;
use \App\Models\PadukuhanModel;
use \App\Models\RtModel;
use \App\Models\PenilaianModel;
use \App\Models\SubModel;

class Analisis extends BaseController
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

    public function index()
    {
        $data = [
            'judul' => 'Hasil Perhitungan - Wonosari',
            'kriteria' => $this->KriteriaModel->getKriteria(),
            'subkriteria' => $this->SubModel->getSub(),
            'alternatif' => $this->AlternatifModel->getAlternatif(),
        ];

        return view('analisis/index', $data);
    }
}
