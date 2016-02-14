@extends('admin')

@section('content')

<div class="container col-md-6 col-md-offset-3" style="padding-top:70px;">

<h3 class="text-center">Pridėti nuotraukų: </h3>
@include('errors.list')

 
   <form action="/dashboard/video" method="POST">
     {!! csrf_field() !!}

     <div class="form-group">
       <input type="text" class="form-control" name="video_title">
     </div>
  
    <div class="form-group">
     <textarea class="form-group" name="video_content" cols="10"></textarea>
    </div>

    <div class="form-group">
      <button class="btn btn-primary" type="submit">Sukurti</button>
    </div>
   </form>

   

</div>

@endsection