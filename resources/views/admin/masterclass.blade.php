@extends('admin')

@section('content')
<div class="container" style="padding-top:70px;">
<div class="table-responsive">
	<h3 class="text-center">Masterclass registracija</h3>
  <table class="table table-striped table-hover">

    <thead>
          <tr>
            <th>#</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>El. paštas</th>
            <th>Film school/company</th>
            <th>Šalis</th>
            <th>Detaliau</th>
            <th>Ištrinti</th>
          </tr>
        </thead>

        <tbody>
       {{--*/ $i = 0 /*--}}
		
        @foreach($masterclass as $master)
        {{--*/ $i++; /*--}}
        
          <tr>
         
            <th scope="row">{!! $i !!}</th>
       
            <td>{!! $master->name !!}</td>
            <td>{!! $master->surname !!}</td>
            <td>{!! $master->email !!}</td>
            <td>{!! $master->company !!}</td>
            <td>{!! $master->country->title !!}</td>
            <td><a href="/dashboard/masterclass/{!! $master->id !!}">Detaliau</a></td>
            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myDeleteModal" master-id="{!! $master->id !!}">Ištrinti</button></td>
         </tr>
         @endforeach
        </tbody>

  </table>
  {!! $masterclass->render() !!}

</div>
</div>

<!-- Modal -->
<div id="myDeleteModal" class="modal fade" role="dialog">
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
      <form action="" id="modal-delete-form" method="POST">
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