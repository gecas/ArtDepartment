@extends('admin')

@section('content')
<div class="container" style="padding-top:70px;">
<div class="table-responsive">
	<h3 class="text-center">Pictures kategorijos :</h3>
  <p class="text-center"><a href="/dashboard/pictures/categories/create" class="btn apply-now">Nauja kategorija</a></p>
  <table class="table table-striped table-hover">

    <thead>
          <tr>
            <th>#</th>
            <th>Pavadinimas</th>
            <th>Detaliau</th>
            <th>Redaguoti</th>
            <th>Ištrinti</th>
          </tr>
        </thead>

        <tbody>
       {{--*/ $i = 0 /*--}}
		
        @foreach($categories as $category)
        {{--*/ $i++; /*--}}
        
          <tr>
         
            <th scope="row">{!! $i !!}</th>
       
            <td>{!! $category->title !!}</td>
            <td><a href="/dashboard/pictures/categories/details/{!! $category->slug !!}">Detaliau</a></td>
            <td><a href="/dashboard/pictures/categories/{!! $category->id !!}/edit">Redaguoti</a></td>
            <td><button class="btn btn-danger" data-toggle="modal" data-target="#myPictureCatsDeleteModal" category-id="{!! $category->id !!}">Ištrinti</button></td>
         </tr>
         @endforeach
        </tbody>

  </table>

</div>
</div>

<!-- Modal -->
<div id="myPictureCatsDeleteModal" class="modal fade" role="dialog">
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
      <form action="" id="modal-pictures-categories-delete-form" method="POST">
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