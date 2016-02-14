@extends('admin')

@section('content')

<div class="container col-md-8 col-md-offset-2">@include('errors.list')</div>

<div class="container col-md-6 col-md-offset-3" style="padding-top:70px;">

<a href="/dashboard/pictures/categories" class="btn apply-now">Atgal</a>

<h3 class="text-center">Redaguoti pictures kategoriją ({!! $pictures_category->title !!}) : </h3>

  <form style="margin-bottom:70px;" method="POST" action="/dashboard/pictures/categories/{!! $pictures_category->id !!}/redaguoti">

	{!! csrf_field() !!}

    <div class="form-group">
    <label for="pic_cat_title">Pavadinimas :</label>
   <input type="text" name="picture_category_title" id="pic_cat_title" value="{!! $pictures_category->title !!}" class="form-control">
    </div>

    <div class="form-group">
    <button type="submit" class="btn apply-now form-control">Redaguoti pictures kategoriją</button>
    </div>
	
   </form>
</div>



@endsection