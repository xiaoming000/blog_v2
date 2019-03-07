<?php

namespace App\Http\Controllers\Home;

use Illuminate\Support\Facades\DB;

use Illuminate\Routing\Controller as BaseController;

class IndexController extends BaseController{

	public function index(){
		$category = DB::table('category')->get();
		$articles= DB::table('articles')->get();
		$data = array(
			'category'=>$category,
			'articles'=>$articles
		);
		// var_dump($category);
		return view('Home.index',$data);
	}



}