<?php

namespace App\Controllers;

use App\Models\AlternatifModel;

class Umum extends BaseController
{
    protected $AlternatifModel;
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->AlternatifModel = new AlternatifModel();        
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Alternatrif - Wonosari',
            'alternatif' => $this->AlternatifModel->getAlternatif()
        ];

        return view('alternatif', $data);
    }
}