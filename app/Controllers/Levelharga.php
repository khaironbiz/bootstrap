<?php

namespace App\Controllers;
// Load model
use App\Models\Level_harga_model;

class Levelharga extends BaseController
{
    public function index()
    {
        helper('text');
        $model          = new Level_harga_model();
        $level_harga    = $model->listing();
        $data           = array(
            'title'         => 'Daftar Profesi Tenaga Kesehatan',
            'level_harga'   => $level_harga,
            'content'       => 'level_harga/index'
        );
        if (empty($data['level_harga'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        };
        return view('layout/wrapper', $data);
    }

    public function add()
    {
        helper('text');
        $data   = array(
            'title'     => 'Input Profesi',
            'content'   => 'profesi/add'
        );
        return view('layout/wrapper', $data);
    }

    public function tambah()
    {
        helper(['form', 'url']);
        $validated =  $this->validate([
            'nama_profesi'    => 'required',
            'nama_op'         => 'required',
        ]);
        if ($validated) {
            // Masuk database
            $data = array(
                'nama_profesi'              => $this->request->getVar('nama_profesi'),
                'nama_op'                   => $this->request->getVar('nama_op'),
                'singkatan_op'              => $this->request->getVar('singkatan_op'),
                'ketua_op'                  => $this->request->getVar('ketua_op'),
                'masa_bakti_awal'           => $this->request->getVar('masa_bakti_awal'),
                'masa_bakti_ahir'           => $this->request->getVar('masa_bakti_ahir'),
                'web_op'                    => $this->request->getVar('web_op'),
                'email_op'                  => $this->request->getVar('email_op'),
                'has_profesi_kesehatan'     => md5(time()),
            );
            $model = new Profesi_model();
            $model->tambah($data);
            return redirect()->to(base_url('profesi'));
            // End masuk database
        } else {
            return redirect()->to(base_url('profesi/add'));
        }
    }
    public function detail($has_level_harga)
    {

        helper('text');
        $model          = new Level_harga_model();
        $level_harga    = $model->detail($has_level_harga);
        $data       = array(
            'title'         => 'Detail Profesi ',
            'level_harga'   => $level_harga,
            'content'   => 'level_harga/detail'
        );
        return view('layout/wrapper', $data);
    }
    public function anggota($has_profesi_kesehatan)
    {

        helper('text');
        $model         = new Profesi_model();
        $profesi    = $model->detail($has_profesi_kesehatan);
        $data       = array(
            'title'     => 'Detail Profesi ',
            'profesi'    => $profesi,
            'content'   => 'product/detail'
        );
        return view('layout/wrapper', $data);
    }

    public function edit($has_profesi_kesehatan)
    {
        helper('text');
        $model          = new Profesi_model();
        $profesi        = $model->detail($has_profesi_kesehatan);
        $data           = array(
            'title'     => 'Edit Profesi',
            'profesi'   => $profesi,
            'content'   => 'profesi/edit'
        );
        return view('layout/wrapper', $data);
    }
    // update
    public function update()
    {
        helper('form');
        $validated =  $this->validate([
            'nama_profesi'          => 'required|alpha_numeric_space|min_length[3]',
            'has_profesi_kesehatan' => 'required'
        ]);
        if ($validated) {
            $data = array(
                'nama_profesi'              => $this->request->getVar('nama_profesi'),
                'nama_op'                   => $this->request->getVar('nama_op'),
                'singkatan_op'              => $this->request->getVar('singkatan_op'),
                'ketua_op'                  => $this->request->getVar('ketua_op'),
                'masa_bakti_awal'           => $this->request->getVar('masa_bakti_awal'),
                'masa_bakti_ahir'           => $this->request->getVar('masa_bakti_ahir'),
                'web_op'                    => $this->request->getVar('web_op'),
                'email_op'                  => $this->request->getVar('email_op'),
                'has_profesi_kesehatan'     => $this->request->getVar('has_profesi_kesehatan')
            );
            $model  = new Profesi_model();
            $update = $model->edit($data);
            return redirect()->to(base_url('profesi'));

            //dd($data);

        };
    }
    // Delete
    public function delete($has_level_harga)
    {

        // End proteksi
        $model         = new Level_harga_model();
        $level_harga   = $model->hapus($has_level_harga);
        return redirect()->to(base_url('levelharga'));
    }
}
