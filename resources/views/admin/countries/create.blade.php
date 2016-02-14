@extends('admin')

@section('content')

<div class="container col-md-8 col-md-offset-2">@include('errors.list')</div>

<div class="container col-md-4 col-md-offset-4">

<h3 class="text-center">Sukurti naują šalį : </h3>

  <form method="POST" action="/dashboard/countries" id="countriesFormUpload" enctype="multipart/form-data">

	{!! csrf_field() !!}

    <div class="form-group">
    <label for="country">Pavadinimas :</label>
    <input type="text" id="country" name="country" class="form-control" />
    </div>

    <div class="form-group">
    <button type="submit" class="btn apply-now form-control">Sukurti šalį</button>
    </div>
	
   </form>
</div>



@endsection