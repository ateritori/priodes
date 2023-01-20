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
        $alternatif = $this->AlternatifModel->getAlternatif();
        $kriteria = $this->KriteriaModel->getKriteria();
        $subKriteria = $this->SubModel->getSub();
        $hasilAnalisis = $dataEntFlow = $dataEntFlowKe = $dataEntFlow = [];
        $jumlahAlternatif = count($alternatif);
        $i = 0;

        foreach ($alternatif as $rowalternatif1) {
            $nilai7 = 0;
            $dataTabel = $dataEntFlow[$i] = [];
            foreach ($alternatif as $rowalternatif2) {
                if ($rowalternatif1['id_alternatif'] !== $rowalternatif2['id_alternatif']) {
                    $nilai5 = 0;
                    foreach ($kriteria as $rowkriteria) {
                        $nilai1 = $this->PenilaianModel->getHasil($rowalternatif1['id_alternatif'], $rowkriteria['id_kriteria']);
                        $nilai2 = $this->PenilaianModel->getHasil($rowalternatif2['id_alternatif'], $rowkriteria['id_kriteria']);
                        foreach ($nilai1 as $rownilai1) {
                            foreach ($nilai2 as $rownilai2) {
                                $nilai3 = $rownilai1['nilai'] - $rownilai2['nilai'];
                                if ($nilai3 < 0) {
                                    $nilai4 = 0;
                                } else {
                                    $nilai4 = 1;
                                }
                            }
                        }
                        $nilai5 = $nilai5 + $nilai4;
                        $nilai6 = (1 / ($jumlahAlternatif)) * $nilai5;
                    }
                    array_push($dataTabel, $nilai6);
                    $nilai7 = $nilai6 + $nilai7;
                    $nilai8 = (1 / ($jumlahAlternatif - 1)) * $nilai7;
                } else {
                    array_push($dataTabel, '#');
                }
            }
            array_push($dataTabel, $nilai8);
            array_push($hasilAnalisis, $dataTabel);
            $i++;
        }

        // Mencari EntFLow
        for ($j = 0; $j < $jumlahAlternatif; $j++) {
            $dataEntFlowKe[$j] = [];
        }

        for ($k = 0; $k < count($hasilAnalisis); $k++) {
            for ($l = 0; $l < $jumlahAlternatif; $l++) {
                array_push($dataEntFlowKe[$l], $hasilAnalisis[$k][$l]);
            }
        }

        for ($m = 0; $m < $jumlahAlternatif; $m++) {
            $nilai9 = (1 / ($jumlahAlternatif - 1)) * (array_sum($dataEntFlowKe[$m]));
            array_push($hasilAnalisis[$m], $nilai9);
        }

        for ($n = 0; $n < count($hasilAnalisis); $n++) {
            array_push($hasilAnalisis[$n], number_format($hasilAnalisis[$n][5], 2) - number_format($hasilAnalisis[$n][6], 2));
        }

        // rangking
        $dataNilai = [];
        for ($o = 0; $o < count($hasilAnalisis); $o++) {
            array_push($dataNilai, $hasilAnalisis[$o][7]);
        }
        arsort($dataNilai);

        for ($p = 0; $p < count($hasilAnalisis); $p++) {
            $rank = 1;
            foreach ($dataNilai as $key => $value) {
                if ($p == $key) {
                    array_push($hasilAnalisis[$p], $rank);
                }
                $rank++;
            }
        }

        $data = [
            'judul' => 'Hasil Perhitungan - Wonosari',
            'kriteria' => $kriteria,
            'subkriteria' => $subKriteria,
            'alternatif' => $alternatif,
            'total' => $this->PenilaianModel->totalAlt(),
            'totalkrit' => $this->KriteriaModel->totalKrit(),
            'hasilAnalisis' => $hasilAnalisis,
            'dataFlowKe' => $dataEntFlowKe,
        ];

        return view('analisis/index', $data);
    }
}
