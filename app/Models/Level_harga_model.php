<?php

namespace App\Models;

use CodeIgniter\Model;

class Level_harga_model extends Model
{
    protected $table         = 'level_harga';
    protected $primaryKey     = 'id_level_harga';
    protected $allowedFields = ['nama_level_harga', 'has_level_harga'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $this->orderBy('nama_level_harga', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function detail($has_level_harga)
    {
        $this->select('*');
        $this->where('has_level_harga', $has_level_harga);
        $query = $this->get();
        return $query->getRowArray();
    }

    // Insert
    public function tambah($data)
    {
        $this->save($data);
    }

    // Edit
    public function edit($data)
    {
        $this->where('has_profesi_kesehatan', $data['has_profesi_kesehatan']);
        $this->replace($data);
    }

    // Delete
    public function hapus($has_profesi_kesehatan)
    {
        $this->where('has_profesi_kesehatan', $has_profesi_kesehatan);
        $this->delete();
    }
}
