@extends('layout')

@section('content')
<div class="col-md-8 col-md-offset-3" style="position:relative;">
  <h1>Videos</h1>

@foreach($videos as $video)
    <div class="col-md-10 col-md-offset-2" style="width:300px;margin-bottom:5%;">
      <!-- <div class="border-bottom-left"></div>
      <div class="border-top-right"></div> -->
      <h4 class="text-center">{!! $video->video_title !!}</h4>
      <div>{!! $video->video_content !!}</div>
    </div>
@endforeach

</div>
@endsection