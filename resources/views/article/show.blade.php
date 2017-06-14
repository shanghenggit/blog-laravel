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
			<div class='row'>
				<form action="{{ route('article/edit') }}" method='POST'>
				{{ csrf_field() }}
				<input type='hidden' name='id' value="{{ $info->id or old('id')}}">
				  <div class="form-group">
				    <label for="exampleInputEmail1">标题</label>
				    <input type="text" name='title' class="form-control" placeholder="Text input" value="{{ isset($info) ? $info->title : old('title')}}">
				    @if ($errors->has('title'))
	                    <span class="help-block">
	                    	<strong>{{ $errors->first('title') }}</strong>
	                    </span>
                    @endif
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">内容</label>
				    <textarea class="form-control" name='content' rows="3">{{ isset($info) ? $info->content : old('content') }}</textarea>
				    @if ($errors->has('content'))
	                    <span class="help-block">
	                    	<strong>{{ $errors->first('content') }}</strong>
	                    </span>
                    @endif
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form> 
			</div>
        </div>
    </div>
</div>
@endsection
