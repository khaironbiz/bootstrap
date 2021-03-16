<?php

namespace App\Models;

use CodeIgniter\Model;

class Peserta_model extends Model
{
    protected $table         = 'event_peserta';
    protected $primaryKey     = 'id_event_peserta';
    protected $allowedFields = ['id_profesi','id_events','has_event_peserta'];

    // Listing
    public function listing()
    {
        $this->select('*');
        $this->orderBy('nama_op', 'DESC');
        $query = $this->get();
        return $query->getResultArray();
    }

    // Detail
    public function detail($id_event)
    {
        $this->select('*');
        $this->join('events', 'events.id_event=event_peserta.id_events');
        $this->join('profesi_kesehatan', 'profesi_kesehatan.id_profesi_kesehatan = event_peserta.id_profesi');
        $this->where('id_events', $id_event);
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
