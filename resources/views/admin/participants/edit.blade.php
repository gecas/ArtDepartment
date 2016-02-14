@extends('admin')

@section('content')

<div class="container col-md-8 col-md-offset-2">@include('errors.list')</div>

<div class="container col-md-6 col-md-offset-3" style="padding-top:70px;">

<a href="/dashboard/participants/categories" class="btn apply-now">Atgal</a>

<h3 class="text-center">Redaguoti participants : </h3>

  <form method="POST" action="/dashboard/participants/{!! $participant->id !!}/redaguoti" id="editParticipantForm" enctype="multipart/form-data">

	{!! csrf_field() !!}
  
  <div class="form-group">
    <label for="name">Vardas/pavardė :</label>
    <input type="text" name="name" class="form-control" value="{!! $participant->name !!}"/>
    </div>

    <div class="form-group">
    <label for="text">Aprašymas :</label>
    <textarea name="picture_text" class="form-control" rows="10">{!! $participant->picture_text !!}</textarea>
    </div>

    @if ($participant->picture_name)
                <div class="edit-post-image">
                <img src="/{!! $participant->picture_path.$participant->picture_name !!}" width="300px" title="{!! $participant->title !!}">
                </div>
                <div id="profile-upload">
                   <div class="form-group">
              <label>Participant picture:</label><br/>
              <input type="file" name="edit-participant-photo" id="file" class="inputfile" accept="image/*" />
              <label for="file">
              <i class="fa fa-cloud-upload"></i>
              Įkelti nuotrauką</label>
              <br/>
              <span id="file_upload"></span>
              <div id="files_names"></div>
            </div>
          </div>
          @else
          <div id="profile-upload">
                  <h4>Nuotrauka nebuvo įkelta</h4>
                  <p>Įkelkite nuotrauką :</p>
                   <div class="form-group">
              <label>Profilio nuotrauka:</label><br/>
              <input type="file" name="edit-participant-photo" id="file" class="inputfile" accept="image/*" />
              <label for="file">
              <i class="fa fa-cloud-upload"></i>
              Įkelti nuotrauką</label>
              <br/>
              <span id="file_upload"></span>
              <div id="files_names"></div>
            </div>
          </div>
                @endif
    

    <div class="form-group">
    <button type="submit" class="btn apply-now form-control">Redaguoti participants</button>
    </div>
	
   </form>
</div>




<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#editParticipantForm #file").change(function() {
    var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
    $("#file_upload").text(fileName);
  });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#file").change(function(){

        //console.log($(this)[0]);
        $("#files_names")/*.html("<p>Selected file name: </p>").append($(this)[0].files[0].name)*/.append("<br>").append("<div class='participant-edit-image'><img></div>");
        readURL($(this)[0], "#files_names img");
        //$(".files_names").html("Selected file name: ").append($(this)[0].files[0].name).append("<img src='"+$(this)[0].files[0].name+"'>");
    });

});

function readURL(input, img) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(img).attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

</script>
@endsection
