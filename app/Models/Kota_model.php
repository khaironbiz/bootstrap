<?php

namespace App\Models;

use CodeIgniter\Model;

class Kota_model extends Model
{
    protected $table         = 'kabupaten';
    protected $primaryKey     = 'id_kab';
    // Listing
    public function listing()
    {
        $this->select('*');
        $this->orderBy('id_prov', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }
    public function geById($id_prov)
    {
        $this->select('*');
        $this->where('id_prov', $id_prov);
        $this->orderBy('nama_kabupaten', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }
}
