<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggajianModel extends Model
{

    protected $table            = 'penggajian';
    protected $allowedFields    = ['tanggal','nama','kode_karyawan', 'gaji_pokok', 'tunjangan'];


    public function getAllPenggajian()
    {
        return $this->db->table('penggajian')->get()->getResultArray();
    }
    public function getPenggajianById($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

public function laporanPerPeriode()
{
    return $this->table('penggajian')
    ->get();
}
}