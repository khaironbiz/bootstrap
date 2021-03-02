<?php

namespace App\Controllers;
// Load model
use App\Models\Event_model;

class Event extends BaseController
{
    public function index()
    {
        $session             = \Config\Services::session();
        helper('text');
        //$model 				= new Event_model();
        //$event 			= $model->listing();
        $data                 = array(
            'title'        => 'Event List',
            //'berita'	=> $event,
            'session'    => $session,
            'content'    => 'product/index'
        );
        return view('layout/wrapper', $data);
    }
    public function product()
    {

        return view('layout/wrapper');
    }
    public function detail()
    {
        $session             = \Config\Services::session();
        helper('text');
        //$model 				= new Event_model();
        //$event 			= $model->listing();
        $data                 = array(
            'title'        => 'Event Detail',
            //'berita'	=> $event,
            'session'    => $session,
            'content'    => 'product/detail'
        );
        return view('layout/wrapper', $data);
    }
    public function registrasi()
    {
        $session             = \Config\Services::session();
        helper('text');
        //$model 				= new Event_model();
        //$event 			= $model->listing();
        $data                 = array(
            'title'        => 'Pendaftaran Acara',
            //'berita'	=> $event,
            'session'    => $session,
            'content'    => 'product/registrasi'
        );
        return view('layout/wrapper', $data);
    }
    public function add()
    {
        $session             = \Config\Services::session();
        helper('text');
        //$model 				= new Event_model();
        //$event 			= $model->listing();
        $data                 = array(
            'title'        => 'Input Event',
            //'berita'	=> $event,
            'session'    => $session,
            'content'    => 'product/add'
        );
        return view('layout/wrapper', $data);
    }
    public function list()
    {
        $session             = \Config\Services::session();
        helper('text');
        //$model 				= new Event_model();
        //$event 			= $model->listing();
        $data                 = array(
            'title'        => 'Daftar Even',
            //'berita'	=> $event,
            'session'    => $session,
            'content'    => 'product/list'
        );
        return view('layout/wrapper', $data);
    }
    public function tambah()
    {
        helper(['form', 'url']);
        $image = \Config\Services::image();
        $session = \Config\Services::session($config);
        $mk         = new Kategori_model();
        $kategori     = $mk->listing();

        // Start validasi
        $validated =  $this->validate([
            'judul_berita'     => 'required',
            'isi'             => 'required',
            'gambar'         => [
                'uploaded[gambar]',
                'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[gambar,4096]',
            ],
        ]);

        if ($validated) {
            // Image upload
            $avatar      = $this->request->getFile('gambar');
            $namabaru     = $avatar->getRandomName();
            $avatar->move(WRITEPATH . 'assets/img/event/', $namabaru);
            // Masuk database
            $data = array(
                'id_user'        => 1,
                'id_kategori'    => $this->request->getVar('id_kategori'),
                'slug_berita'    => strtolower(url_title($this->request->getVar('judul_berita'))),
                'judul_berita'    => $this->request->getVar('judul_berita'),
                'isi'            => $this->request->getVar('isi'),
                'status_berita'    => $this->request->getVar('status_berita'),
                'jenis_berita'    => $this->request->getVar('jenis_berita'),
                'keywords'        => $this->request->getVar('keywords'),
                'gambar'        => $namabaru,
                'tanggal_post'    => date('Y-m-d H:i:s')
            );
            $model = new Berita_model();
            $model->tambah($data);
            $session->setFlashdata('sukses', 'Data telah ditambah');
            return redirect()->to(base_url('admin/berita'));
            // End masuk database
        }
        $data = array(
            'title'        => 'Tambah Berita',
            'kategori'    => $kategori,
            'content'    => 'admin/berita/tambah'
        );
        return view('admin/layout/wrapper', $data);
    }

    // Tambah
    public function edit($id_berita)
    {
        helper('form');
        $session = \Config\Services::session($config);
        // Proteksi
        if ($session->get('username') == "") {
            $session->setFlashdata('sukses', 'Anda belum login');
            return redirect()->to(base_url('login'));
        }
        // End proteksi
        $mk         = new Kategori_model();
        $mb         = new Berita_model();
        $kategori     = $mk->listing();
        $berita     = $mb->detail($id_berita);

        // Start validasi
        $validated =  $this->validate([
            'judul_berita'     => 'required',
            'isi'             => 'required',
            'gambar'         => [
                'uploaded[gambar]',
                'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[gambar,4096]',
            ],
        ]);

        if ($validated) {
            // Image upload
            $avatar      = $this->request->getFile('gambar');
            $namabaru     = $avatar->getRandomName();
            $avatar->move(WRITEPATH . '../assets/upload/image/', $namabaru);
            // Masuk database
            $data = array(
                'id_berita'        => $this->request->getVar('id_berita'),
                'id_user'        => 1,
                'id_kategori'    => $this->request->getVar('id_kategori'),
                'slug_berita'    => strtolower(url_title($this->request->getVar('judul_berita'))),
                'judul_berita'    => $this->request->getVar('judul_berita'),
                'isi'            => $this->request->getVar('isi'),
                'status_berita'    => $this->request->getVar('status_berita'),
                'jenis_berita'    => $this->request->getVar('jenis_berita'),
                'keywords'        => $this->request->getVar('keywords'),
                'gambar'        => $namabaru,
            );
            $model = new Berita_model();
            $model->edit($data);
            $session->setFlashdata('sukses', 'Data telah diedit');
            return redirect()->to(base_url('admin/berita'));
            // End masuk database
        }
        $data = array(
            'title'        => 'Edit Berita',
            'kategori'    => $kategori,
            'berita'    => $berita,
            'content'    => 'admin/berita/edit'
        );
        return view('admin/layout/wrapper', $data);
    }
}
