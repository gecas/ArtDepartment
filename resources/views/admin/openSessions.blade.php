@extends('admin')

@section('content')
<div class="container" style="padding-top:70px;">
<div class="table-responsive">
	<h3 class="text-center">Open sessions registracija</h3>

  {!! $openSessions->render() !!}
  <table class="table table-striped table-hover">

    <thead>
          <tr>
            <th>#</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>El. paštas</th>
            <th>Film school/company</th>
            <th>Miestas</th>
            <th>Detaliau</th>
            <th>Ištrinti</th>
          </tr>
        </thead>

        <tbody>
       {{--*/ $i = 0 /*--}}
		
        @foreach($openSessions as $open)
        {{--*/ $i++; /*--}}
        
          <tr>
         
            <th scope="row">{!! $i !!}</th>
       
            <td>{!! $open->name !!}</td>
            <td>{!! $open->surname !!}</td>
            <td>{!! $open->email !!}</td>
            <td>{!! $open->company !!}</td>
            <td>{!! $open->city !!}</td>
            <td><a href="/dashboard/open_sessions/{!! $open->id !!}">Detaliau</a></td>
            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myOpenDeleteModal" open-id="{!! $open->id !!}">Ištrinti</button></td>
         </tr>
         @endforeach
        </tbody>

  </table>
  {!! $openSessions->render() !!}

</div>
</div>

<!-- Modal -->
<div id="myOpenDeleteModal" class="modal fade" role="dialog">
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
      <form action="" id="modal-open-delete-form" method="POST">
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