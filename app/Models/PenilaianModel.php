<?php

namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table      = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_alternatif', 'id_kriteria', 'id_sub_kriteria', 'nilai'];
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    //  Dates
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

    public function getPenilaian($idAlternatif = false)
    {

        if ($idAlternatif == false) :
            return $this->findAll();
        else :
            return $this->getWhere(['penilaian.id_alternatif ' => $idAlternatif])->getRowArray();
        endif;
    }

    public function getNilai($idAlternatif = false)
    {
        if ($idAlternatif == false) :
            return $this->findAll();
        else :
            return $this->getWhere(['penilaian.id_alternatif ' => $idAlternatif])->getResultArray();
        endif;
    }

    public function getHasil($idAlternatif, $idKriteria)
    {
        return $this->getWhere(['penilaian.id_alternatif ' => $idAlternatif, 'penilaian.id_kriteria' => $idKriteria])->getResultArray();
    }
}
