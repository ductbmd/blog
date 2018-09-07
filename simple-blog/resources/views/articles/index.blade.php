@extends('layouts.base')
@section('head.title')
Danh sach bai viet
@stop

@section('body.content')
<div class="container">

		<!-- start -->
		@foreach ($articles as $article)
		<div class="row">
			<div class="col-sm-12 col-sm-offset-3">
				<h2>{{$article->tittle}}</h2>
				<p class="lead">{{$article->content}}</p>
				<p><a href="{{route('article.show',$article->id) }}">Read more</a></p>
			</div>
		</div>
		@endforeach
		<!-- end -->
	</div>	
@stop	