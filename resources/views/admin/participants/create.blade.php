@extends('admin')

@section('content')

<div class="container col-md-6 col-md-offset-3" style="padding-top:70px;">

<a href="/dashboard/participants/categories" class="btn apply-now">Atgal</a>

<h3 class="text-center">Sukurti naują participants: </h3>
@include('errors.list')

  <form method="POST" action="/dashboard/participants" id="participantFormUpload" enctype="multipart/form-data">

	{!! csrf_field() !!}
  <input type="hidden" value="{!! $category !!}" name="category"/>

    <div class="form-group">
    <label for="name">Pavadinimas/vardas :</label>
    <input type="text" name="name" class="form-control" />
    </div>

    <div class="form-group">
    <label for="text">Aprašymas :</label>
    <textarea name="picture_text" class="form-control" rows="10"></textarea>
    </div>

    <div class="form-group">
    <span>Nuotrauka</span>
    <span><input type="file" name="participantFile" accept="/image/*" id="participant" class="inputfile" style="z-index:50;" />
    <label for="participant" class="cvFile">Įkelti nuotrauką!</label>
    </span>
    <div id="participant_upload" style="z-index:50;"></div>
    <div id="files_names"></div>
  </div>

    <div class="form-group">
    <button type="submit" class="btn apply-now form-control">Sukurti participants</button>
    </div>
	
   </form>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $("#participantFormUpload #participant").change(function() {
    var fileName = $(this).val().replace(/C:\\fakepath\\/i, '');
    $("#participant_upload").text(fileName);
  });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#participant").change(function(){

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