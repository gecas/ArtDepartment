@extends('layout')
@section('content')

	<div class="col-md-6 col-md-offset-3" id="heroes-wrap" style="margin-bottom:20%;">
		<h1 class="text-left">PARTICIPANTS  {!! $category->title." ". $category->year !!}</h1>
		<style>
			.heroes-image{
				width:200px;
				height:200px;
				margin:0 auto;
				position:relative;
			}
			.heroes-image-background{
				margin:0 auto;
				width:300;
				height:300px;
				max-width:100%;
				max-height:100%;
				background-size:cover;
			}
		</style>
		{{--*/ $i = 0 /*--}}
		@foreach($participants as $p)
			<div class="col-md-6">
				<div class="container heroes">
					<h3 class="text-center">{!! $p->name !!}</h3>
					<div class="heroes-image">
						@if($i == 0)
							<div class="border-top-left"></div>
							{{--*/ $i = 1 /*--}}
						@else
							<div class="border-top-right"></div>
							{{--*/ $i = 0 /*--}}
						@endif
						<div class="heroes-image-background" style="background-image:url('/{!! $p->picture_path.$p->picture_name !!}');" title="{!! $p->name !!}"></div>
					</div>
					<div class="triangle-down heroes-detail-button" data-info-id="{!! $p->id !!}" style="margin-bottom:4%;"></div>

					<div class="heroes-info" data-info-block="{!! $p->id !!}">
						<section>
							{!! $p->picture_text !!}
						</section>
				 	</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection
