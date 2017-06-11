<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    
	/**
	 * 登录
	 *   
	 * @return string
	 */
	public function login()
	{
		return view('index.login');
	}
	
	/**
	 * 登录
	 *   
	 * @return string
	 */
	public function loginIn(Request $request)
	{
		$this->validate($request, [
			'username' => 'required',
			'password' => 'required'
		]);
		
		$user = DB::select('select * from user where username=:username and password=:password',
				['username'=>$request['username'],'password'=>$request['password']]);
		if($user){
			return view('index.index');
		}else{
			return view('index.login');
		}
	}
}
