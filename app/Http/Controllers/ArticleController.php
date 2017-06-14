<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    
    
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		$list = DB::table('article')->paginate(1);
		return view('article.index',['list'=>$list]);
	}
	
	/**
	 * 显示添加修改页面
	 *
	 * @return \Illuminate\http\Response
	 */
	public function show($id = 0){
		// 修改页面
		if($id){
			$info = DB::table('article')->where('id',$id)->first();
			return view('article.show',['info'=>$info]);
		}else{ // 添加页面
			return view('article.show');
		}
	}
	
	/**
	 * 数据库添加
	 *
	 * @return \Illuminate\http\Response
	 */
	public function edit(Request $request){
		$this->validate($request, [
			'title' => ['required'],
			'content' => ['required']
		]);
		if($request->id){
			$info = DB::table('article')->where('id',$request->id)->first();
			if(!$info){
				return view('article.show',['info'=>$info]);
			}
			$data = [
				'title' => $request->title,
				'content' => $request->content
			];
			$result = DB::table('article')->where('id',$request->id)->update($data);
			if($result){
				return redirect()->action('ArticleController@index');
			}else{
				$request->flash();
				return redirect()->route('article/show')->withInput();
			}
		}else{
			$result = DB::insert("insert into article(title,content) values(?,?)",[$request->title,$request->content]);
			if($result){
				return redirect()->action('ArticleController@index');
			}else{
				$request->flash();
				return redirect()->route('article/show')->withInput();
			}
		}
	}
	
	/**
	 * 文章删除
	 *
	 * @return \Illuminate\http\Response
	 */
	public function delete($id){
		$result = DB::table('article')->where('id',$id)->delete();
		if($result){
			return redirect()->action('ArticleController@index');
		}else{
			return redirect()->action('ArticleController@index');
		}
	}
}
