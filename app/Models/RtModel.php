<?php

namespace App\Models;

use CodeIgniter\Model;

class RtModel extends Model
{
    protected $table      = 'rt';
    protected $primaryKey = 'id_rt';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['rt'];
    // protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    // Dates
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

    public function getRt($idRt = false)
    {
        if ($idRt == false) {
            return $this->findAll();
        }
        return $this->where(['id_kriteria' => $idRt])->first();
    }
}
