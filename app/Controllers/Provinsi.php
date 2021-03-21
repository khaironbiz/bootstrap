<?php

namespace App\Controllers;

use App\Models\Provinsi_model;
use PhpParser\Node\Expr\New_;

// Load model
//use App\Models\Provinsi_model;

class Provinsi extends BaseController
{
    public function index()
    {
        $model_provinsi = new Provinsi_model();
        $provinsi       = $model_provinsi->findAll();
        $data = array(
            'title'         => 'Daftar Provinsi',
            'provinsi'      => $provinsi,
            'content'       => 'provinsi/index',
            'data_table'    => 'Y',



        );
        return view('layout/wrapper', $data);
    }
}
