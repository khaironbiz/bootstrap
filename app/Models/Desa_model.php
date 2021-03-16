<?php

namespace App\Models;

use CodeIgniter\Model;

class Desa_model extends Model
{
    protected $table         = 'wilayah_desa';
    protected $primaryKey     = 'id';
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
    public function getDataAutocomplete($autocomplete)
    {
        $this->db->select('a.id as provinsi_id, a.nama as provinsi,b.id as kabupaten_id, b.nama as kabupaten,c.id as kecamatan_id, c.nama as kecamatan,d.id as desa_id,d.nama as desa');
        $this->db->from('wilayah_provinsi as a');
        $this->db->join('wilayah_kabupaten as b', 'a.id=b.provinsi_id');
        $this->db->join('wilayah_kecamatan as c', 'b.id=c.kabupaten_id');
        $this->db->join('wilayah_desa as d', 'c.id=d.kecamatan_id');
        $this->db->like('d.nama', $autocomplete);
        $this->db->limit(10);
        return $this->db->get()->result_array();
    }
}
