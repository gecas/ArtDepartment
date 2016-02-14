@extends('admin')

@section('content')

<div class="container col-md-6 col-md-offset-3" style="padding-top:70px;">

<a href="/dashboard/pictures/categories" class="btn apply-now">Atgal</a>

<h3 class="text-center">Pridėti nuotraukų: </h3>
@include('errors.list')

  <!-- <form method="POST" action="/dashboard/pictures/photos" id="my_dropzone" class="dropzone" enctype="multipart/form-data">

	{!! csrf_field() !!}

  <input type="hidden" name="photo-category" value="{!! $category->id !!}">

  <div class="form-group">
      <div id="dropzonePreview" class="dz-default dz-message" style="cursor: pointer; border:1px solid black;padding:4%;">
        <span>Spauskite arba meskite failus čia, norėdami juos įkelt</span><br/>
    </div>
  </div>

  <button type="submit" class="btn btn-primary" id="submit-all">Įkelti</button>
  
   </form> -->

   <form action="/dashboard/pictures/photos" class="dropzone" id="addPhotos" enctype="multipart/form-data">
   <input type="hidden" name="photo-category" value="{!! $category->id !!}">
     {!! csrf_field() !!}
     <div class="dz-message" data-dz-message><span>Pridėkite nuotraukas jas keldami ar įmesdami čia</span></div>
   </form>

   

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
<script>
  Dropzone.options.addPhotos = {
    paramName : 'photo',
    maxFilesize : 4,
    uploadMultiple: true,
    parallelUploads: 100,
    maxFiles: 100,
    acceptedFiles: "image/*",
    addRemoveLinks: true,
  }
</script>
<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
 -->
@endsection