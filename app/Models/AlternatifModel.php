<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternatifModel extends Model
{
    protected $table      = 'alternatif';
    protected $primaryKey = 'id_alternatif';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['kegiatan', 'padukuhan', 'rt'];
    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    //  Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

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

    public function getAlternatif()
    {
        $builder = $this->db->table('alternatif');
        $builder->select('*');
        $builder->join('padukuhan', 'alternatif.padukuhan = padukuhan.id_padukuhan');
        $builder->join('rt', 'alternatif.rt = rt.id_rt');
        return  $builder->get();
    }
}
