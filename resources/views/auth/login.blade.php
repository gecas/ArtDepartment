<!-- resources/views/auth/login.blade.php -->
@extends('layout')

@section('content')
<div class="col-md-4 col-md-offset-4">
<h2 class="text-center">Vartotojo prisijungimas : </h2>

	<form method="POST" action="/auth/login">
	    {!! csrf_field() !!}

	@include('errors.list')

	    <div class="form-group">
	        <label for="email">El. paštas : </label>
	        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
	    </div>
	
	    <div class="form-group">
	         <label for="password">Slaptažodis : </label>
	        <input type="password" name="password" class="form-control" id="password">
	    </div>
	
	    <div class="form-group">
	        <input type="checkbox" name="remember"> Prisiminti mane
	    </div>
	
	    <div class="form-group">
	        <button type="submit" class="btn apply-now">Prisijungti</button>
	    </div>


	</form>
</div>
@endsection