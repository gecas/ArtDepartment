@extends('admin')

@section('content')

<div class="container col-md-8 col-md-offset-2">@include('errors.list')</div>

<div class="container col-md-4 col-md-offset-4" style="padding-top:70px;">

<a href="/dashboard/participants/categories" class="btn apply-now">Atgal</a>

<h3 class="text-center">Redaguoti participants kategoriją : </h3>

  <form method="POST" action="/dashboard/participants/categories/{!! $category->id !!}/redaguoti" id="countriesFormUpload">

	{!! csrf_field() !!}

    <div class="form-group">
    <label for="title">Pavadinimas :</label>
    <select name="title" class="form-control">
      <option value="SPRING">SPRING</option>
      <option value="SUMMER">SUMMER</option>
      <option value="FALL">FALL</option>
      <option value="WINTER">WINTER</option>
    </select>
    </div>

    <div class="form-group">
    <label for="title">Metai :</label>
    <select name="year" class="form-control">
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
    </select>
    </div>

    <div class="form-group">
    <button type="submit" class="btn apply-now form-control">Redaguoti participants kategoriją</button>
    </div>
	
   </form>
</div>



@endsection