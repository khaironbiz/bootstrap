<?php

namespace App\Controllers;
// Load model
use App\Models\Event_model;
use App\Models\Jenis_model;
use App\Models\Profesi_model;
use App\Models\Level_harga_model;
use App\Models\Kota_model;
use App\Models\Provinsi_model;
use App\Models\Peserta_model;

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
    public function detail($has_event)
    {
        helper('text');
        $model 		    = new Event_model();
        $event 	        = $model->detail($has_event);
        $id_event       = $event['id_event'];
        $model_peserta  = new Peserta_model();
        $peserta        = $model_peserta->detail($id_event);
        $data       = array(
            'title'     => 'Event Detail',
            'event'	    => $event,
            'peserta'   => $id_event,
            'content'   => 'product/detail'
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
    public function getDataAutocomplete()
    {
        $autocomplete = $this->input->get('term');
        if ($autocomplete) {
            $getDataAutoComplete = $this->Dynamic_model->getDataAutocomplete($autocomplete);
            foreach ($getDataAutoComplete as $row) {
                $results[] = array(
                    'label' => "Provinsi " . $row['provinsi'] . ", Kabupaten " . $row['kabupaten'] . ", Kecamatan " . $row['kecamatan'] . ", Desa " . $row['desa'],
                    'provinsi' => $row['provinsi_id'],
                    'kabupaten' => $row['kabupaten_id'],
                    'kecamatan' => $row['kecamatan_id'],
                    'desa' => $row['desa_id'],
                );

                $this->output->set_content_type('application/json')->set_output(json_encode($results));
            }
        }
    }

    public function add()
    {
        
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
            'gambar'         => [
                'uploaded[gambar]',
                'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
            ],
        ]);
        if ($validated) {
            //Image upload
            $avatar      = $this->request->getFile('gambar');
            $namabaru     = $avatar->getRandomName();
            $avatar->move('./assets/img/event/', $namabaru);
            $data = array(
                'id_jenis_event'    => $this->request->getVar('id_jenis_event'),
                'nama_event'        => $this->request->getVar('nama_event'),
                'deskripsi_event'   => $this->request->getVar('deskripsi_event'),
                'fasilitas_event'   => $this->request->getVar('fasilitas_event'),
                'tanggal_mulai'     => $this->request->getVar('tanggal_mulai'),
                'tanggal_selesai'   => $this->request->getVar('tanggal_selesai'),
                'harga_event'       => $this->request->getVar('harga_event'),
                'gambar'            => $namabaru,
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
    public function ipaymu()
    {
        //ipaymu script
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://my.ipaymu.com/api/v2/payment/direct",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array(
            'name'              => 'Buyer',
            'phone'             => '081999501092',
            'email'             => 'buyer@mail.com',
            'amount'            => '10000',
            'notifyUrl'         => 'https://mywebsite.com',
            'expired'           => '24',
            'expiredType'       => 'hours',
            'comments'          => 'Catatan',
            'referenceId'       => '1',
            'paymentMethod'     => 'cstore',
            'paymentChannel'    => 'indomaret',
            'product[]'         => 'produk 1',
            'qty[]'             => '1',
            'price[]'           => '10000',
            'weight[]'          => '1',
            'width[]'           => '1',
            'height[]'          => '1',
            'length[]'          => '1',
            'deliveryArea'      => '76111',
            'deliveryAddress'   => 'Denpasar'),
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "signature: [object Object]",
            "va: your_va",
            "timestamp: 20191209155701"
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
        //lama
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
    public function cod(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL             => "https://my.ipaymu.com/api/payment/getsid",
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_ENCODING        => "",
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 0,
        CURLOPT_FOLLOWLOCATION  => true,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => "POST",
        CURLOPT_POSTFIELDS => array(
            'key'           => 'efF4vS1p51noPCxcVoDzCLTkbb7960',
            'pay_method'    => 'cod',
            'product'       => 'Sepatu Futsal',
            'quantity'      => '1',
            'price'         => '90000',
            'weight'        => '1',
            'dimension'     => '10:5:7',
            'address'       => 'Kantor iPaymu Denpasar Bali',
            'postal_code'   => '80361',
            'unotify'       => 'http://websiteanda.com/notify.php'),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }
    public function qris(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL             => "https://my.ipaymu.com/api/payment/qris",
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_ENCODING        => "",
        CURLOPT_MAXREDIRS       => 10,
        CURLOPT_TIMEOUT         => 0,
        CURLOPT_FOLLOWLOCATION  => true,
        CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST   => "POST",
        CURLOPT_POSTFIELDS      => array(
            'key'           => 'efF4vS1p51noPCxcVoDzCLTkbb7960',
            'name'          => 'Khairon',
            'phone'         => '081213798746',
            'email'         => 'khaironbiz@mail.com',
            'amount'        => '25000',
            'notifyUrl'     => 'https://ppni.or.id/notify',
            'referenceId'   => '1234',
            'zipCode'       => '16710',
            'city'          => 'Bogor'
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        echo $response;
    }
    public function qrimage(){
        $data =array(
            'url'       => 'https://my.ipaymu.com/qr/2859323',
            'status'    => 'status',
        );
        return view('ipaymu/qris', $data);
    }
}

