<?php

namespace App\Controllers;

use App\Models\AlternatifModel;
use \App\Models\PadukuhanModel;
use \App\Models\RtModel;
use \App\Models\PenilaianModel;

class Penilaian extends BaseController
{
    protected $AlternatifModel;
    protected $PadukuhanModel;
    protected $RtModel;
    protected $PenilaianModel;

    public function __construct()
    {
        $this->AlternatifModel = new AlternatifModel();
        $this->PadukuhanModel = new PadukuhanModel();
        $this->PenilaianModel = new PenilaianModel();
        $this->RtModel = new RtModel();
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
    
    public function create($idPenilaian = false)
    {
        $data = [
            'judul' => 'Data Penilaian - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif(),
            'penilaian' => $this->PenilaianModel->getPenilaian($idPenilaian)
        ];

        return view('penilaian/create', $data);
    }
}
