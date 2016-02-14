@extends('layout')
@section('content')

	<div class="col-md-10 col-md-offset-1">

		<h1 class="text-center">PARTICIPANTS  {!! $category->title !!}</h1>
		{{--*/ $i = 0 /*--}}
		<div class="col-md-10 col-md-offset-1">
		<div class="col-md-offset-1"><a href="/pictures" class="btn apply-now">Atgal</a></div>	
		<br/>	
    <ul style="list-style:none; display:inline-block;">
		@foreach($pictures as $picture)

				<li class="col-md-3" style="padding:0 1px;">
				<div class="container heroes">
				<div class="heroes-image">
				@if($i == 0)
				<div class="border-top-left"></div>
				{{--*/ $i = 1 /*--}}
				@else
				<div class="border-top-right"></div>
				{{--*/ $i = 0 /*--}}
				@endif
				</div>
				<a href="/{!! $picture->photo_path.$picture->photo_name !!}" class="swipebox">
				
				<div
				style="background-image:url(/{!! $picture->photo_path.$picture->photo_name !!});
				height:200px;width:200px;background-size:cover;margin:0 auto;">
				</div>
				
				</a>
				
				</div>
				</li>
    
  
		@endforeach
	</ul>
	</div>
	</div>
@endsection
