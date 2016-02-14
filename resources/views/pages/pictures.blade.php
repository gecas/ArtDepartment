@extends('layout')

@section('content')
<div class="col-md-8 col-md-offset-3" style="position:relative;">
  <h1>Pictures</h1>

@foreach($categories as $category)
  <a href="/pictures/category/{!! $category->slug !!}" style="color:#333;">
    <div class="col-md-6 col-md-offset-2" style="width:300px;margin-bottom:5%;">
      <div class="border-bottom-left"></div>
      <div class="border-top-right"></div>
      <h3 class="text-center">{!! $category->title !!}</h3>
    </div>
    </a>
@endforeach

</div>
@endsection