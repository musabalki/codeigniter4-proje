<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		/*$data=[
			'baslik'=>'anasayfa',
			'icerik'=>'Lorem ipsum'
		];
		$cache=[
			'cache'=>20,
			'cache_name'=>'home_page_cache'
		];*/
		$data = [
			'blog_title'   => 'My Blog Title',
			'blog_heading' => 'My Blog Heading'
	];
		$parser = \Config\Services::parser();
		$parser_text = $parser->setData($data)->render('welcome_message');
		return view('home', ['body'=>$parser_text]);


		//return view('home',$data,$cache);
	}
	public function contact(){
        return view('contact');
    }
}
