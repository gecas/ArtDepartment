
@extends('layout')
@section('content')
	<div class="col-md-8 col-md-offset-3" style="margin-bottom:20%;">

		<h1 class="text-left">WORKSHOPS 15/16</h1>
		<div class="border-top-left"></div>
		{!! $workshops->workshops !!}

	</div>
@endsection