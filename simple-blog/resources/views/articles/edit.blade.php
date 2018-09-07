@extends('layouts.base')

@section('head.title')
Chinh sua bai viet
@stop
@section('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h1>Update articles</h1>
			<hr>
		</div>	
	</div>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			@if (count($errors)>0)
	<div class="alert alert-danger">
		<strong>Lỗi:</strong> Dữ liệu bạn nhập vào bị lỗi...<br><br>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
			@endif
			<form action="{{route('article.update',$article->id)}}" method="POST"> <!-- form -->
				 <input type="hidden" name="_token" value="{{csrf_token()}}"> 
				<!-- truyen 1 token vao 1 post de xac thuc -->
				<div class="form-group">
					<label for="title" >Title</label>
					<input type="text" name='title'  value="{{$article->tittle}}" id='title' require placeholder='Fill title of article'>
				</div>
				<div class="form-group">
					<label for="content">Content:</label>
					<br>
					<textarea name='content' rows="30" cols="50"  id='content' requiredplaceholder="Fill content of article">{{$article->content}}
					</textarea> 
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Update blog</button>
				</div>
			</form> <!-- form -->
		</div>
	</div>
	
</div>	
@stop	