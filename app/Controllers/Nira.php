<?php

namespace App\Controllers;
// Load model
use App\Models\User_model;

class Nira extends BaseController
{
    public function index()
    {
        $currentPage    = $this->request->getVar('page_nira') ? $this->request->getVar('page_nira') : 1;
		$model_user = new User_model();
		$user 		= $model_user->listing();
		$data		= array(
            'title'         => 'Daftar Anggota',
			'user' 	        => $model_user->paginate(20,'nira'),
            'pager' 	    => $model_user->pager,
            'currentPage'   => $currentPage,
            'content'       => 'user/index'
		);
        return view('layout/wrapper', $data);
    }
}
