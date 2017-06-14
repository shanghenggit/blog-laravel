@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <!-- Single button -->
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    文章管理 <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a href="#">文章管理</a></li>
			  </ul>
			</div>
			
        </div>
        <div class="col-md-10">
        	<div class="row">
			  <ol class="breadcrumb">
				  <li><a href="{{  route('home') }}">首页</a></li>
				  <li><a href="{{  route('article') }}">文章管理</a></li>
				</ol>
			</div>
			<div class='row'><a class="btn btn-default" href="{{  route('article/show') }}" role="button">添加文章</a></div>
			<div class='row'>
				<table class="table table-bordered">
				  <thead>
			        <tr>
			          <th>#</th>
			          <th>标题</th>
			          <th>管理</th>
			        </tr>
			      </thead>
			      <tbody>
			      @foreach($list as $val)
			        <tr>
			          <th scope="row">{{ $val->id }}</th>
			          <td>{{ $val->title }}</td>
			          <td>
			          <a class="btn btn-default" href="{{ route('article/show',$val->id) }}" role="button">修改</a>
			          <a class="btn btn-default" href="{{ route('article/delete',$val->id) }}" role="button">删除</a>
			          </td>
			        </tr>
			      @endforeach
			      </tbody>
				</table>
				
        		<div class="col-md-12">
			      {{ $list->links() }}
			    </div>
			</div>
        </div>
    </div>
</div>
@endsection
