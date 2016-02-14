@extends('admin')

@section('content')
<div class="container" style="padding-top:70px;">
<a href="/dashboard/pictures/categories" class="btn apply-now">Atgal</a>
<div class="table-responsive">
	<h3 class="text-center">Pictures :</h3>
  <p class="text-center"><a href="/dashboard/pictures/{!! $category->id !!}/create" class="btn apply-now">Pridėti nuotraukų</a></p>
  <p class="text-center"><a href="/dashboard/pictures/{!! $category->id !!}/edit" class="btn apply-now">Redaguoti nuotraukas</a></p>
  <!-- <table class="table table-striped table-hover">

    <thead>
          <tr>
            <th>#</th>
            <th>Pavadinimas</th>
            <th>Tekstas</th>
            <th>Redaguoti</th>
            <th>Ištrinti</th>
          </tr>
        </thead>

        <tbody>
       {{--*/ $i = 0 /*--}}
		
        @foreach($pictures as $picture)
        {{--*/ $i++; /*--}}
        
          <tr>
         
            <th scope="row">{!! $i !!}</th>
       
            <td>{!! $picture->name !!}</td>
            <td>{!! $picture->picture_text !!}</td>
          <td><a href="/dashboard/participants/details/{!! $picture->id !!}">Detaliau</a></td> 
            <td><a href="/dashboard/participants/{!! $picture->id !!}/edit">Redaguoti</a></td>
            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myParticipantsDeleteModal" picture-id="{!! $picture->id !!}">Ištrinti</button></td> 
         </tr>
         @endforeach
        </tbody>

  </table> -->

  <div class="col-md-10 col-md-offset-1">
    <ul style="list-style:none; display:inline-block;">
    @foreach($pictures as $picture)
    <li class="col-md-3" style="padding:2px;">
      <div
      style="background-image:url(/{!! $picture->photo_path.$picture->photo_name !!});height:200px;width:200px;background-size:cover;"></div>
    </li>
    @endforeach
    </ul>
  </div>

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