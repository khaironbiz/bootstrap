<?php

namespace App\Controllers;
// Load model
use App\Models\User_model;

class Anggota extends BaseController
{
    public function index()
    {
        $per_page       = "20";
        $currentPage    = $this->request->getVar('page_nira') ? $this->request->getVar('page_nira') : 1;
        $keyword        = $this->request->getVar('keyword');
        $model          = new User_model();
        $user       = $model->listing();

        $data            = array(
            'title'         => 'Daftar Anggota',
            // 'per_page'      => $per_page,
            // 'user'             => $model_user->paginate($per_page, 'nira'),
            // 'pager'         => $model_user->pager,
            // 'currentPage'   => $currentPage,
            'user'          => $user,
            'content'       => 'user/index'
        );
        return view('layout/wrapper', $data);
    }
    public function detail($kode)
    {
        helper('text');
        $model             = new User_model();
        $user             = $model->detail($kode);
        $data           = array(
            'title'     => 'Detail Anggota',
            'user'        => $user,
            'content'   => 'user/detail'
        );
        return view('layout/wrapper', $data);
    }
    public function profile($kode)
    {
        helper('text');
        $model             = new User_model();
        $user             = $model->detail($kode);
        $data           = array(
            'title'     => 'My Profile',
            'user'        => $user,
            'content'   => 'user/profile'
        );
        return view('layout/wrapper', $data);
    }
    public function table()
    {
        helper('text');
        $model          = new User_model();
        $user           = $model->listing();
        $data           = array(
            'title'     => 'My Profile',
            'user'      => $user,
            'content'   => 'table/data'
        );
        return view('table/data', $data);
    }
    public function delete($kode)
    {
        // End proteksi
        $model      = new User_model();
        $user    = $model->hapus($kode);
        return redirect()->to(base_url('nira'));
    }
    public function edit($kode)
    {
        helper('text');
        $model          = new User_model();
        $user           = $model->detail($kode);
        $data           = array(
            'title'     => 'Edit Profesi',
            'user'      => $user,
            'content'   => 'user/edit'
        );
        return view('layout/wrapper', $data);
    }
    // update
    public function update($kode)
    {
        helper('form');
        $validated =  $this->validate([
            'nama_profesi'          => 'required|alpha_numeric_space|min_length[3]',
            'has_profesi_kesehatan' => 'required'
        ]);
        if ($validated) {
            $data = array(
                'kode'                      => $kode,
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
}
