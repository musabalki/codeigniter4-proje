<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$data=[
			'baslik'=>'anasayfa',
			'icerik'=>'Lorem ipsum'
		];
		$cache=[
			'cache'=>20,
			'cache_name'=>'home_page_cache'
		];
		return view('home',$data,$cache);
	}
}
