<?php

namespace App\Models;

use CodeIgniter\Model;

class Event_model extends Model
{
    protected $table         = 'events';
    protected $primaryKey     = 'id_event';
    protected $allowedFields = [
        'id_jenis_event', 'penyedia_event', 'nama_event', 'deskripsi_event', 'fasilitas_event',
        'tanggal_mulai', 'tanggal_selesai', 'provinsi_event', 'kota_event', 'lokasi_event', 'harga_event', 'date_up',
        'blokir', 'has_event', 'gambar'
    ];

    // Listing
    public function listing()
    {
        $this->select('*');
        $this->orderBy('date_create', 'DESC');
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
    public function detail($id_berita)
    {
        $this->select('berita.*, kategori.nama_kategori');
        $this->join('kategori', 'kategori.id_kategori = berita.id_kategori');
        $this->where(array(
            'status_berita'    => 'Publish',
            'id_berita'        => $id_berita
        ));
        $query = $this->get();
        return $query->getRowArray();
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
