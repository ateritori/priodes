<?php

namespace App\Controllers;

class Beranda extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'SPK-Priodes Wonosari',
        ];
        return view('index', $data);
    }
}
