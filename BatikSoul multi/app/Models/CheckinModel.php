<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckinModel extends Model
{

    protected $table            = 'tbl_checkin';
    protected $allowedFields    = ['idtamu', 'idkamar', 'checkin', 'duration', 'status'];


    public function getAllCheckin()
    {
        return $this->db->table('tbl_checkin')->get()->getResultArray();
    }
    public function getCheckinById($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function laporanPerPeriode($tglawal, $tglakhir)
    {
        return $this->table('tbl_checkin')
            ->join('tbl_kamar', 'tbl_kamar.id = tbl_checkin.idkamar')
            ->join('tbl_tamu', 'tbl_tamu.id = tbl_checkin.idtamu')
            ->where('checkin >=', $tglawal)
            ->where('checkin <=', $tglakhir)
            ->get();
    }
}
