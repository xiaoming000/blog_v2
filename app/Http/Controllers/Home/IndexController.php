<?php

namespace App\Http\Controllers\Home;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController{

	public function index(){
		return view('home.index');
	}

}