<?php

namespace App\Controllers;
// Load model
use App\Models\User_model;

class Nira extends BaseController
{
    public function index()
    {
        $per_page       = "100";
        $currentPage    = $this->request->getVar('page_nira') ? $this->request->getVar('page_nira') : 1;
		$model_user     = new User_model();
		$data		    = array(
            'title'         => 'Daftar Anggota',
            'per_page'      => $per_page,
			'user' 	        => $model_user->paginate($per_page,'nira'),
            'pager' 	    => $model_user->pager,
            'currentPage'   => $currentPage,
            'content'       => 'user/index'
		);
        return view('layout/wrapper', $data);
    }
}
