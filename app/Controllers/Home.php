<?php

namespace App\Controllers;
// Load model
//use App\Models\Event_model;

class Home extends BaseController
{
	public function index()
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
