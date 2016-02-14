@extends('admin')

@section('content')
<div class="container" style="padding-top:70px;">
<div class="table-responsive">
	<h3 class="text-center">Visi video :</h3>
    <p class="text-center"><a href="/dashboard/video/create" class="btn apply-now">Pridėti video</a></p>
  <table class="table table-striped table-hover">

    <thead>
          <tr>
            <th>#</th>
            <th>Pavadinimas</th>
            <th>Redaguoti</th>
            <th>Ištrinti</th>
          </tr>
        </thead>

        <tbody>
       {{--*/ $i = 0 /*--}}
		
        @foreach($videos as $video)
        {{--*/ $i++; /*--}}
        
          <tr>
         
            <th scope="row">{!! $i !!}</th>
            <td>{!! $video->video_title !!}</td>
            <td><a href="/dashboard/video/{!! $video->id !!}/edit">Redaguoti</a></td>
            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myVideoDeleteModal" video-id="{!! $video->id !!}">Ištrinti</button></td>
         </tr>
         @endforeach
        </tbody>

  </table>

</div>
</div>

<!-- Modal -->
<div id="myVideoDeleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ištrinti video</h4>
      </div>
      <div class="modal-body">
        Ar tikrai norite ištrinti video ? 
      </div>
      <div class="modal-footer">
      <form action="" id="modal-video-delete-form" method="POST">
      {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
     <button type="submit" class="btn btn-danger"> Ištrinti</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
        </form>
      </div>
    </div>

  </div>
</div>
@endsection