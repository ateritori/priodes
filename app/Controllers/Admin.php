<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'SPK-Priodes Kalurahan Wonosari',
        ];

        return view('admin/index', $data);
    }

    public function kriteria()
    {
        $data = [
            'judul' => 'SPK-Priodes Kalurahan Wonosari',
        ];

        return view('admin/kriteria', $data);
    }
}
