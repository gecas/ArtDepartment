@extends('admin')

@section('content')
<div class="container" style="padding-top:70px;">
<div class="table-responsive">
	<h3 class="text-center">Participants :</h3>
  <p class="text-center"><a href="/dashboard/participants/{!! $category->id !!}/create" class="btn apply-now">Naujas participant</a></p>
  <table class="table table-striped table-hover">

    <thead>
          <tr>
            <th>#</th>
            <th>Pavadinimas</th>
            <th>Tekstas</th>
            <!-- <th>Detaliau</th> -->
            <th>Redaguoti</th>
            <th>Ištrinti</th>
          </tr>
        </thead>

        <tbody>
       {{--*/ $i = 0 /*--}}
		
        @foreach($participants as $participant)
        {{--*/ $i++; /*--}}
        
          <tr>
         
            <th scope="row">{!! $i !!}</th>
       
            <td>{!! $participant->name !!}</td>
            <td>{!! $participant->picture_text !!}</td>
           <!--  <td><a href="/dashboard/participants/details/{!! $participant->id !!}">Detaliau</a></td> -->
            <td><a href="/dashboard/participants/{!! $participant->id !!}/edit">Redaguoti</a></td>
            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myParticipantsDeleteModal" participant-id="{!! $participant->id !!}">Ištrinti</button></td> 
         </tr>
         @endforeach
        </tbody>

  </table>

</div>
</div>

<!-- Modal -->
<div id="myParticipantsDeleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ištrinti įrašą</h4>
      </div>
      <div class="modal-body">
        Ar tikrai norite ištrinti įrašą ? 
      </div>
      <div class="modal-footer">
      <form action="" id="modal-participants-delete-form" method="POST">
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