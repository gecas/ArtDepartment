<!DOCTYPE html>
<html>
<head>
	<title>Art department</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.css">
	<link rel="stylesheet" type="text/css" href="/swipebox/css/swipebox.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="admin-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/dashboard">Art department</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Countries <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/dashboard/countries/create">Sukurti šalį</a></li>
                  <li><a href="/dashboard/countries">Visos šalys</a></li>
                </ul>
              </li>
            <li><a href="/dashboard/our-heroes">Our heroes</a></li>
            <li><a href="/dashboard/masterclass">Masterclass</a></li>
            <li><a href="/dashboard/open_sessions">Open sessions</a></li>
            <li><a href="/dashboard/workshops">Workshops 15/16</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Apply now <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="/dashboard/apply/masterclass">Masterclass</a></li>
                  <li><a href="/dashboard/apply/openSessions">Open sessions</a></li>
                </ul>
              </li>
            <li><a href="/dashboard/contact_us">Contact us</a></li>
            <li><a href="/dashboard/participants/categories">Participants</a></li>
             <li><a href="/dashboard/pictures/categories">Pictures</a></li>
             <li><a href="/dashboard/video">Video</a></li>  
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<div class="container-fluid">

@yield('content')

</div>


<div id="scrollTop">▲</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script type="text/javascript" src="/swipebox/js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();

      });
</script>
 <script type="text/javascript">
//   Dropzone.options.myDropzone = {

//   // Prevents Dropzone from uploading dropped files immediately
//   autoProcessQueue: false,
//   uploadMultiple: true,
//   paramName : 'photo',
//   parallelUploads: 100,
//   maxFiles: 100,
//   acceptedFiles: "image/*",
//   clickable: '#dropzonePreview',
//   addRemoveLinks: true,
//   previewsContainer: '#dropzonePreview',

//   init: function() {
//     var submitButton = document.querySelector("#submit-all")
//         myDropzone = this; // closure

//     submitButton.addEventListener("click", function() {
//       if (myDropzone.getQueuedFiles().length > 0) {                        
//             myDropzone.processQueue();  
//         } else {                       
//             $("#my-dropzone").submit(); //send empty 
//         }  
//       //myDropzone.processQueue(); // Tell Dropzone to process all queued files.
//     });

//     // You might want to show the submit button only when 
//     // files are dropped here:
//     this.on("successmultiple", function() {
//       showMessage("", "Naujiena išsaugota!", "success");
//       setTimeout(function(){location.href = "/dashboard/pictures"}, 1500);
//     });

//   }
// };
 </script>
<script type="text/javascript">
	$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop()>200){
			$('#scrollTop').fadeIn(200);
		} else {
			$('#scrollTop').fadeOut(200);
		}
	});
	$('#scrollTop').click(function(){
		
		$('html, body').animate({ scrollTop: 0}, 1000);
	
	});
});
</script>

<script type="text/javascript">
	$('#navbar ul li a').click(function(){
    $('#navbar ul li').removeClass("active");
    $(this).addClass("active");
});
</script>

<script type="text/javascript">
  $('#myDeleteModal').on('show.bs.modal', function (event) {
    var master_id = $(event.relatedTarget).attr("master-id");
    var input = $(this).find("#modal-delete-form").attr("action", "/dashboard/master/"+master_id);
  });
</script>

<script type="text/javascript">
  $('#myOpenDeleteModal').on('show.bs.modal', function (event) {
    var open_id = $(event.relatedTarget).attr("open-id");
    var input = $(this).find("#modal-open-delete-form").attr("action", "/dashboard/open/"+open_id);
  });
</script>

<script type="text/javascript">
  $('#myCountryDeleteModal').on('show.bs.modal', function (event) {
    var country_id = $(event.relatedTarget).attr("country-id");
    var input = $(this).find("#modal-country-delete-form").attr("action", "/dashboard/countries/"+country_id);
  });
</script>

<script type="text/javascript">
  $('#myParticipantCatsDeleteModal').on('show.bs.modal', function (event) {
    var category_id = $(event.relatedTarget).attr("category-id");
    var input = $(this).find("#modal-participants-categories-delete-form").attr("action", "/dashboard/participants/categories/"+category_id);
  });
</script>

<script type="text/javascript">
  $('#myParticipantsDeleteModal').on('show.bs.modal', function (event) {
    var participant_id = $(event.relatedTarget).attr("participant-id");
    var input = $(this).find("#modal-participants-delete-form").attr("action", "/dashboard/participants/delete/"+participant_id);
  });
</script>

<script type="text/javascript">
  $('#myPictureCatsDeleteModal').on('show.bs.modal', function (event) {
    var category_id = $(event.relatedTarget).attr("category-id");
    var input = $(this).find("#modal-pictures-categories-delete-form").attr("action", "/dashboard/pictures/categories/"+category_id);
  });
</script>

<script type="text/javascript">
  $('#myVideoDeleteModal').on('show.bs.modal', function (event) {
    var video_id = $(event.relatedTarget).attr("video-id");
    var input = $(this).find("#modal-video-delete-form").attr("action", "/dashboard/video/"+video_id);
  });
</script>

<script src="//tinymce.cachefly.net/4.2/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

@include ('flash')
</body>
</html>