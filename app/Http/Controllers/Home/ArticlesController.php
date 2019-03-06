<?php

namespace App\Http\Controllers\Home;

use Illuminate\Routing\Controller as BaseController;

class ArticlesController extends BaseController{

	public function index(){
		return view('home.article');
	}

}