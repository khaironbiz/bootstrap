<?php

namespace App\Models;

use CodeIgniter\Model;

class Jenis_model extends Model
{
    protected $table         = 'jenis_event';
    protected $primaryKey     = 'id_jenis_event';
    protected $allowedFields = ['nama_jenis_event', 'has_jenis_event'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $this->orderBy('nama_jenis_event', 'ASC');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Read
    public function read($slug_berita)
    {
        $this->select('berita.*, kategori.nama_kategori');
        $this->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        $this->where(array(
            'status_berita'    => 'Publish',
            'slug_berita'    => $slug_berita
        ));
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
        $this->where('id_berita', $data['id_berita']);
        $this->replace($data);
    }

    // Delete
    public function hapus($id_berita)
    {
        $this->where('id_berita', $id_berita);
        $this->delete();
    }
}
