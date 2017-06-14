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
			    <li><a href="{{ route('article') }}">文章管理</a></li>
			  </ul>
			</div>
			
        </div>
        <div class="col-md-10">
        	<div class="jumbotron">
			  <p>博客管理系统</p>
			</div>
        </div>
    </div>
</div>
@endsection
