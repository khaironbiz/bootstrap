<?php

namespace App\Controllers;
// Load model
use App\Models\Event_model;
use App\Models\Jenis_model;
use App\Models\Profesi_model;
use App\Models\Level_harga_model;
use App\Models\Kota_model;
use App\Models\Provinsi_model;

class Event extends BaseController
{
    public function index()
    {
        $session             = \Config\Services::session();
        helper('text');
        $model             = new Event_model();
        $event             = $model->listing();
        $data           = array(
            'title'         => 'Event List',
            'event'         => $event,
            'session'       => $session,
            'content'       => 'product/index'
        );
        if (empty($data['event'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException();
        };
        return view('layout/wrapper', $data);
    }
    public function product()
    {

        return view('layout/wrapper');
    }
    public function detail()
    {
        helper('text');
        //$model 				= new Event_model();
        //$event 			= $model->listing();
        $data                 = array(
            'title'        => 'Event Detail',
            //'berita'	=> $event,
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

    public function list()
    {
        helper('text');
        $model_event    = new Event_model();
        $event          = $model_event->listing();
        $data           = array(
            'title'     => 'Daftar Event',
            'event'     => $event,
            'content'   => 'product/list'
        );
        return view('layout/wrapper', $data);
    }
    // get id prov
    function kota($id_prov)
    {
        // $category_id = $this->input->post('id', TRUE);
        // $data = $this->product_model->get_sub_category($category_id)->result();
        // echo json_encode($data);
        //$id_prov    = $this->request->getVar('provinsi_event');
        $model_kota = new Kota_model();
        $data       = $model_kota->getById($id_prov);
        echo json_encode($data);
    }

    public function add()
    {
        $session             = \Config\Services::session();
        helper('text');
        $model_jenis        = new Jenis_model();
        $jenis              = $model_jenis->listing();
        $model_profesi      = new Profesi_model();
        $profesi            = $model_profesi->listing();
        $model_lh           = new Level_harga_model();
        $level_harga        = $model_lh->listing();
        $model_prov         = new Provinsi_model();
        $provinsi           = $model_prov->listing();
        $model_kota         = new Kota_model();
        $kota               =  $model_kota->listing();
        $data               = array(
            'title'         => 'Input Event',
            'jenis'         => $jenis,
            'profesi'       => $profesi,
            'level_harga'   => $level_harga,
            'provinsi'      => $provinsi,
            'kota'          => $kota,
            'content'       => 'product/add'
        );
        return view('layout/wrapper', $data);
    }
    public function tambah()
    {
        helper(['form']);
        $validated =  $this->validate([
            'nama_event'        => 'required',
            'id_jenis_event'    => 'required',
            // 'gambar'         => [
            //     'uploaded[gambar]',
            //     'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
            // ],
        ]);
        if ($validated) {
            // Image upload
            // $avatar      = $this->request->getFile('gambar');
            // $namabaru     = $avatar->getRandomName();
            // $avatar->move(WRITEPATH . '/assets/img/event/', $namabaru);
            $data = array(
                'id_jenis_event'    => $this->request->getVar('id_jenis_event'),
                'nama_event'        => $this->request->getVar('nama_event'),
                'deskripsi_event'   => $this->request->getVar('deskripsi_event'),
                'fasilitas_event'   => $this->request->getVar('fasilitas_event'),
                'tanggal_mulai'     => $this->request->getVar('tanggal_mulai'),
                'tanggal_selesai'   => $this->request->getVar('tanggal_selesai'),
                'harga_event'       => $this->request->getVar('harga_event'),
                //'gambar'            => $namabaru,
                'has_event'         => md5(time()),
            );

            $model_event    = new Event_model();
            $tambah_event   = $model_event->tambah($data);
            return redirect()->to(base_url('event/list'));
            // End masuk database
        }
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
