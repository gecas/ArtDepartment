@extends('layout')

@section('content')
<div class="col-md-8 col-md-offset-3" style="position:relative;">
  <h1>Participants</h1>

@foreach($participants as $participant)
  <a href="/participants/category/{!! $participant->slug !!}" style="color:#333;">
    <div class="col-md-6 col-md-offset-2" style="width:150px;height:150px; margin-bottom:5%;">
      <div class="border-bottom-left" style="bottom:0"></div>
      <div class="border-top-right"></div>
      <h1 class="text-center">{!! $participant->year !!}</h1>
      <h1 class="text-center">{!! $participant->title !!}</h1>
    </div>
    </a>
@endforeach

</div>
@endsection