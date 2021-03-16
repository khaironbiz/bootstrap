<?php

namespace App\Controllers;
// Load model
use App\Models\User_model;

class Home extends BaseController
{
	public function index()
	{
		$pager = \Config\Services::pager();
		$model_user = new User_model();
		$user 		= $model_user->listing();
		$data		= array(
			// 'title'		=> 'Daftar NIRA',
			// 'user'		=> $user,
			'user' 	=> $model_user->paginate(10),
            'pager' 	=> $model_user->pager,
		);
		return view('layout/index', $data);
	}
	public function partner()
	{
		return view('layout/index');
	}
	public function product()
	{

		return view('layout/wrapper');
	}
	public function event()
	{
		$session 			= \Config\Services::session();
		helper('text');
		//$model 				= new Event_model();
		//$event 			= $model->listing();
		$data 				= array(
			'title'		=> 'Event List',
			//'berita'	=> $event,
			'session'	=> $session,
			'content'	=> 'product/index'
		);
		return view('layout/wrapper', $data);
	}
}
