@extends('admin')

@section('content')
<div class="col-md-10 col-md-offset-1" style="padding-top:70px;">
<a href="/dashboard/pictures/categories" class="btn apply-now">Atgal</a>

	<h3 class="text-center">Pictures :</h3>
  <form 

  action="/dashboard/pictures/{!! $category->id !!}/redaguoti" 
  method="POST"
  enctype="multipart/form-data" 
  >
  {!! csrf_field() !!}
  <input type="hidden" name="picture_category" value="{!! $category->id !!}">
 
  <div class="form-group">
    @if(count($pictures) > 0)
      <div class="form-group">
        <ul class="list-inline">
          @foreach($pictures as $picture)
          <li>
            <div
      style="background-image:url(/{!! $picture->photo_path.$picture->photo_name !!});height:200px;width:200px;background-size:cover;"></div>
            <br>
            <label for="pictures_{!! $picture->id !!}"><input id="pictures_{!! $picture->id !!}" type="checkbox" name="pictures[]" value="{!! $picture->id !!}"> Ištrinti</label>
          </li>
         @endforeach
      </ul>
      </div>
    @endif
  </div>

  
    <div class="form-group">
  <div class="form-group">
    <button type="submit" class="btn btn-primary form-control" id="submitPictures">Redaguoti</button>
  </div>

  </form>

  <form 
  class="dropzone" 
  id="editPhotos" 
  method="POST" 
  action="/dashboard/pictures/{!! $category->id !!}/redaguoti2" 
  >
  {!! csrf_field() !!}
  <input type="hidden" name="edit-photo-category" value="{!! $category->id !!}">
  <div class="dz-message" data-dz-message><span>Pridėkite nuotraukas jas keldami ar įmesdami čia</span></div>
  </form>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
<script>
  Dropzone.options.editPhotos = {
    paramName : 'edit_photo',
    maxFilesize : 4,
    uploadMultiple: true,
    parallelUploads: 100,
    maxFiles: 100,
    acceptedFiles: "image/*",
    addRemoveLinks: true,
  }
</script>
@endsection