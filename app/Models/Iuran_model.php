<?php

namespace App\Models;

use CodeIgniter\Model;

class Iuran_model extends Model
{
    protected $table         = 'bayar';
    protected $allowedFields = [
        'nira', 'nama', 'email', 'ta', 'nominal', 'bukti', 'kode', 'qc', 'proses','migrasi'
    ];

    // Listing
    public function listing()
    {
        $this->select('*');
        $this->where('blokir', 'N');
        $this->orderBy('nama', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }
    //search
    public function search($keyword)
    {
        return $this->table('nira')->like('nama', $keyword);
    }

    // Listing home
    public function home()
    {
        $this->select('berita.*, kategori.nama_kategori');
        $this->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        $this->where('status_berita', 'Publish');
        $this->orderBy('id_berita', 'DESC');
        $this->limit(3);
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function iuran($nira)
    {
        $this->select('bayar.kode as kode_bayar, bayar.ta, bayar.nominal, bayar.nira, nira.*');
        $this->join('nira', 'nira.nira = bayar.nira');
        $this->where('bayar.nira', $nira);
        $this->orderBy('bayar.ta', 'ASC');
        $query = $this->get();
        //return $query->getRowArray();
        return $query->getResultArray();
    }

    
}
