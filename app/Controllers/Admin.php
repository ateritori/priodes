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
}
