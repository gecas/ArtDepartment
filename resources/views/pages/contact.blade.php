@extends('layout')
@section('content')
	<div class="col-md-8 col-md-offset-3" style="margin-bottom:20%;">
	{!! $contacts->contacts !!}
	
		<h4><b>find us on Facebook:</b></h4>
		<a href="https://www.facebook.com/artdepartmentmasterclass/?fref=ts" title="Art Department Masterclass on Facebook" target="_blank">
			<div style="background-image:url('/img/fb_logo.png');background-size:cover;width:30px;height:30px;"></div>
		</a>
	</div>
@endsection