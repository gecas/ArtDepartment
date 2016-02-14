@extends('admin')

@section('content')

<div class="container col-md-8 col-md-offset-2">@include('errors.list')</div>

<div class="container col-md-4 col-md-offset-4">

<h3 class="text-center">Redaguoti šalį : </h3>

  <form method="POST" action="/dashboard/countries/{!! $country->id !!}/redaguoti" id="countriesFormUpload">

	{!! csrf_field() !!}

    <div class="form-group">
    <label for="country">Pavadinimas :</label>
    <input type="text" id="country" name="country" value="{!! $country->title !!}" class="form-control" />
    </div>

    <div class="form-group">
    <button type="submit" class="btn apply-now form-control">Redaguoti šalį</button>
    </div>
	
   </form>
</div>



@endsection