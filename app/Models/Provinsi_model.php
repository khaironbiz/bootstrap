<?php

namespace App\Models;

use CodeIgniter\Model;

class Provinsi_model extends Model
{
    protected $table         = 'provinsi';
    protected $primaryKey     = 'id_prov';
    // Listing
    public function listing()
    {
        $this->select('*');
        $this->orderBy('id_prov', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }
}
