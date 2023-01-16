<?php

namespace App\Models;

use CodeIgniter\Model;

class KriteriaModel extends Model
{
    protected $table      = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_kriteria', 'status_kriteria', 'deskripsi_kriteria'];
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function getKriteria($idKriteria = false)
    {
        if ($idKriteria == false) {
            return $this->findAll();
        }
        return $this->where(['id_kriteria' => $idKriteria])->first();
    }

    public function totalKrit()
    {
        return $this->db->table('alternatif')->countAll();
    }
}
