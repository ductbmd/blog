@extends('layouts.base')

@section('head.title')
Bai Viet
@stop
@section('body.content')
<div class="container">
		<div class="row">
				<div class="col-sm-12 col-sm-offset-3">
					<a href="{{route('home')}}"" class="btn btn-link">
					< Back to home</a>
				</div>
		</div>	
		
		<div class="row">
			<div class="col-sm-12 col-sm-offset-3">
				<h2>{{$article->tittle}}</h2>
				<p class="lead"> {{$article->content}}</p>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<a href="{{ route('article.edit',$article->id ) }}" class="btn btn-info">Edit blog</a>
				<form action="{{route('article.destroy',$article->id)}}" method="POST" style="display: inline">
					 <input type="hidden" name="_token" value="{{csrf_token()}}"> 
					<button class="btn btn-danger">Delete </button> 
				</form>
				
			</div>
		</div>
		<!-- end -->
</div>	
@stop		