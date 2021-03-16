<?php

namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    protected $table         = 'nira';
    protected $allowedFields = [
        'nama','ktp','npwp','sex','tl','ttl','agama','status','foto'
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
    public function detail($has_profesi_kesehatan)
    {
        $this->select('*');
        $this->where('has_profesi_kesehatan', $has_profesi_kesehatan);
        $query = $this->get();
        return $query->getRowArray();
    }

    // Read
    public function anggota($has_profesi_kesehatan)
    {
        $this->select('*');
        $this->join('users', 'users.id_profesi = profesi.id_profesi');
        $this->where('has_profesi_kesehatan', $has_profesi_kesehatan);
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
