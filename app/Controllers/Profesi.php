<?php

namespace App\Controllers;
// Load model
use App\Models\Profesi_model;

class Profesi extends BaseController
{
    public function index()
    {
        $session        = \Config\Services::session();
        helper('text');
        $model             = new Profesi_model();
        $profesi         = $model->listing();
        $data           = array(
            'title'         => 'Daftar Profesi Tenaga Kesehatan',
            'profesi'        => $profesi,
            'session'       => $session,
            'content'       => 'profesi/index'
        );
        if(empty($data['profesi'])){
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
        // helper(['form', 'url']);
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
        }else{
            return redirect()->to(base_url('profesi/add'));
        }
        
    }
    public function detail($has_profesi_kesehatan)
    {
       
        helper('text');
        $model 	    = new Profesi_model();
        $profesi    = $model->detail($has_profesi_kesehatan);
        $data       = array(
            'title'     => 'Detail Profesi ',
            'profesi'	=> $profesi,
            'content'   => 'profesi/detail'
        );
        return view('layout/wrapper', $data);
    }
    public function anggota($has_profesi_kesehatan)
    {
       
        helper('text');
        $model 	    = new Profesi_model();
        $profesi    = $model->detail($has_profesi_kesehatan);
        $data       = array(
            'title'     => 'Detail Profesi ',
            'profesi'	=> $profesi,
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
    public function update($id)
    {
        helper('form');
        $validated =  $this->validate([
            'nama_profesi'          => 'required|alpha_numeric_space|min_length[3]',
            'has_profesi_kesehatan' => 'required'
        ]);
        if ($validated) {
            $data = array(
                'id_profesi_kesehatan'      => $id,
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
	public function delete($has_profesi_kesehatan)
	{
		
		// End proteksi
		$model 	    = new Profesi_model();
		$profesi    = $model->hapus($has_profesi_kesehatan);
		return redirect()->to(base_url('profesi'));
	}
}
