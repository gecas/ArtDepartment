@extends('admin')

@section('content')

<div class="container col-md-8 col-md-offset-2">@include('errors.list')</div>

<div class="container col-md-4 col-md-offset-4" style="padding-top:70px;">

<a href="/dashboard/pictures/categories" class="btn apply-now">Atgal</a>

<h3 class="text-center">Sukurti naują pictures kategoriją : </h3>

  <form method="POST" action="/dashboard/pictures/categories">

	{!! csrf_field() !!}

    <div class="form-group">
    <label for="pic_cat_title">Pavadinimas :</label>
   <input type="text" name="picture_category_title" id="pic_cat_title" class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" class="btn apply-now form-control">Sukurti pictures kategoriją</button>
    </div>
	
   </form>
</div>



@endsection