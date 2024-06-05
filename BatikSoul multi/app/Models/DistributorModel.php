<?php

namespace App\Models;

use CodeIgniter\Model;

class DistributorModel extends Model
{

    protected $table            = 'tbl_distributor';
    protected $allowedFields    = ['nama','kodekamar', 'namatipe', 'ukuran','alamat','kebutuhan','pembayaran'];


    public function getAllDistributor()
    {
        return $this->db->table('tbl_distributor')->get()->getResultArray();
    }
    public function getDistributorById($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
    public function laporanPengiriman()
    {
        return $this->table('tbl_distributor')
            ->get();
    }
}
