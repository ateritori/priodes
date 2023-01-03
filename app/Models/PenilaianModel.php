<?php

namespace App\Models;

use CodeIgniter\Model;

class PenilaianModel extends Model
{
    protected $table      = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_alternatif', 'id_kriteria', 'nilai'];
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

    public function getPenilaian($idPenilaian = false)
    {
        $builder = $this->db->table('penilaian');
        $builder->select('*');
        $builder->join('alternatif', 'penilaian.id_alternatif = alternatif.id_alternatif');
        $builder->join('kriteria', 'penilaian.id_kriteria = kriteria.id_kriteria');
        $builder->where('penilaian.deleted_at', null);

        if ($idPenilaian == false) :
            return $builder->get()->getResultArray();
        else :
            return $builder->getWhere(['penilaian.id_penilaian' => $idPenilaian])->getRowArray();
        endif;
    }
}
