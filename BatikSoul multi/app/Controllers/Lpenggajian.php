<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \App\Models\PenggajianModel;

class Lpenggajian extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Laporan Data'
        ];
        //
        return view('hrd/penggajian/index', $data);
    }

    public function cetakPengunjungPeriode()
    {

        $penggajianModel = new PenggajianModel();
        $dataLaporan = $penggajianModel->laporanPerPeriode();
        $laporan = $dataLaporan->getResultArray();

        $data = [
            'title' => 'Laporan Data',
            'datalaporan' => $dataLaporan,
            'laporan' => $laporan,
           
        ];
        //
        return view('hrd/penggajian/report', $data);
    }
}