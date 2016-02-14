@extends('admin')

@section('content')
<div class="container" style="padding-top:70px;">
<div class="table-responsive">
	<h3 class="text-center">Visos šalys :</h3>
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
		
        @foreach($countries as $country)
        {{--*/ $i++; /*--}}
        
          <tr>
         
            <th scope="row">{!! $i !!}</th>
            <td>{!! $country->title !!}</td>
            <td><a href="/dashboard/countries/{!! $country->id !!}/edit">Redaguoti</a></td>
            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myCountryDeleteModal" country-id="{!! $country->id !!}">Ištrinti</button></td>
         </tr>
         @endforeach
        </tbody>

  </table>

</div>
</div>

<!-- Modal -->
<div id="myCountryDeleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ištrinti šalį</h4>
      </div>
      <div class="modal-body">
        Ar tikrai norite ištrinti šalį ? 
      </div>
      <div class="modal-footer">
      <form action="" id="modal-country-delete-form" method="POST">
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