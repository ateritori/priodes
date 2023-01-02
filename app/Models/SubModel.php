<?php

namespace App\Models;

use CodeIgniter\Model;

class SubModel extends Model
{
    protected $table      = 'sub_kriteria';
    protected $primaryKey = 'id_sub_kriteria';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_sub_kriteria', 'bobot_sub_kriteria', 'id_kriteria'];
    // protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    // // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];

    public function getSubkriteria($idKriteria = false)
    {
        if ($idKriteria == false) {
            return $this->findAll();
        }
        return $this->where(['id_kriteria' => $idKriteria])->findAll();
    }

    public function getSub($idSubkriteria = false)
    {
        if ($idSubkriteria == false) {
            return $this->findAll();
        }
        return $this->where(['id_sub_kriteria' => $idSubkriteria])->first();
    }
}
